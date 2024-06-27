<?php

namespace App\Observers;

use App\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ModelValidationObserver
{
    /**
     * Handle the User "creating" event.
     */
    public function creating(Model $model): void
    {
        $this->validate($model);
    }

    /**
     * Handle the User "updating" event.
     */
    public function updating(Model $model): void
    {
        $this->validate($model);
    }

    /**
     * Validate data.
     *
     * @param Model $model
     * @throws ValidationException
     */
    private function validate(Model $model)
    {
        Validator::make($model->toArray(), $model->rules())->validate();
    }
}
