<?php

namespace Tests\Model;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\DataProvider;
use Symfony\Component\Yaml\Yaml;
use Tests\TestCase;

abstract class ModelTestCase extends TestCase
{
    use RefreshDatabase;

    protected $model;

    #[DataProvider('validInputProvider')]
    public function test_valid_input($input)
    {
        $input = $this->setupInputWithDependency($input);
        $model = $this->model::create($input);

        $this->assertDatabaseHas($model->getTable(), $input);
    }

    #[DataProvider('invalidInputProvider')]
    public function test_invalid_input($input, $expected)
    {
        $this->assertThrows(function () use ($input) {
            $this->model::create($this->setupInputWithDependency($input));
        }, ValidationException::class, $expected);
    }

    public static function validInputProvider()
    {
        return static::getValidInput(static::getTestName() . '.yml');
    }

    public static function invalidInputProvider()
    {
        return static::getInvalidInput(static::getTestName() . '.yml');
    }

    protected static function getValidInput($fileName)
    {
        return static::getCasesByFixtures($fileName);
    }

    protected static function getInvalidInput($fileName)
    {
        return static::getCasesByFixtures($fileName, false);
    }

    protected function setupInputWithDependency($input)
    {
        foreach ($input as $key => $value) {
            if (Str::startsWith($value, 'dependency.')) {
                // if input has dependency, create dependency
                $model = 'App\Models\\' . str_replace('dependency.', '', $value);
                $dep = $model::factory()->create();
                $input[$key] = $dep->id;
            } elseif ($value === 'unique') {
                // if input is unique, create other
                $dep = ($this->model)::factory()->create();
                $input[$key] = $dep->$key;
            }
        }

        return $input;
    }

    protected static function getCasesByFixtures($fileName, $isValid = true)
    {
        // load dataset file
        $dataset = Yaml::parseFile('tests/Model/Fixtures/' . $fileName);

        // ambil yang sesuai aja
        $caseDataset = $dataset[($isValid ? '' : 'in') . 'validDataset'];

        // wrapping untuk return
        $caseInput = [];

        // looping untuk masukin ke array
        for ($i = 0; $i < count($caseDataset); $i++) {
            $caseInput[$caseDataset[$i]['case']] = [$caseDataset[$i]['input'], $caseDataset[$i]['expected']];
        }

        return $caseInput;
    }

    protected static function getTestName()
    {
        return basename(get_called_class());
    }
}
