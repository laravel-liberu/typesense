<?php

namespace LaravelLiberu\Typesense\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelLiberu\Typesense\Models\Settings as Model;

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
