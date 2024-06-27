<?php

namespace App\Models;

use App\Observers\ModelValidationObserver;

trait ModelValidation
{
    abstract public function rules();

    protected static function bootModelValidation()
    {
        static::observe(ModelValidationObserver::class);
    }
}
