<?php

namespace Tests\Service;

use App\Services\UnitKerjaManagementService;

class UnitKerjaManagementServiceTest extends ServiceTestCase
{
    public function test_index_unit()
    {
        //
    }

    public function test_show_unit()
    {
        //
    }

    public function test_show_unit_throw_model_not_found_exception()
    {
        //
    }

    public function test_store_unit()
    {
        //
    }

    public function test_update_unit()
    {
        //
    }

    public function test_update_unit_throw_model_not_found_exception()
    {
        //
    }

    public function test_destroy_unit()
    {
        //
    }

    public function test_destroy_unit_throw_model_not_found_exception()
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

        $this->service = new UnitKerjaManagementService;
    }
}
