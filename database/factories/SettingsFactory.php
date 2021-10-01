<?php

namespace LaravelEnso\Typesense\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelEnso\Typesense\Models\Settings as Model;

class SettingsFactory extends Factory
{
    protected $model = Model::class;

    public function definition()
    {
        return [
            'enabled' => false,
        ];
    }
}
