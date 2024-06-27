<?php

namespace Tests\Service;

use App\Services\MahasiswaManagementService;

class MahasiswaManagementServiceTest extends ServiceTestCase
{
    public function test_index_mahasiswa()
    {
        //
    }

    public function test_show_mahasiswa()
    {
        //
    }

    public function test_show_mahasiswa_throw_model_not_found_exception()
    {
        //
    }

    public function test_store_mahasiswa()
    {
        //
    }

    public function test_update_mahasiswa()
    {
        //
    }

    public function test_update_mahasiswa_throw_model_not_found_exception()
    {
        //
    }

    public function test_destroy_mahasiswa()
    {
        //
    }

    public function test_destroy_mahasiswa_throw_model_not_found_exception()
    {
        //
    }

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->service = new MahasiswaManagementService;
    }
}
