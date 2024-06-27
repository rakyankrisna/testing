<?php

namespace Tests\Service;

use App\Services\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

abstract class ServiceTestCase extends TestCase
{
    use RefreshDatabase;

    private Service $service;
}
