<?php

namespace Tests\Service;

use App\Services\KelasManagementService;

class KelasManagementServiceTest extends ServiceTestCase
{
    public function test_index_kelas()
    {
        //
    }

    public function test_show_kelas()
    {
        //
    }

    public function test_show_kelas_throw_model_not_found_exception()
    {
        //
    }

    public function test_store_kelas()
    {
        //
    }

    public function test_update_kelas()
    {
        //
    }

    public function test_update_kelas_throw_model_not_found_exception()
    {
        //
    }

    public function test_destroy_kelas()
    {
        //
    }

    public function test_destroy_kelas_throw_model_not_found_exception()
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

        $this->service = new KelasManagementService;
    }
}
