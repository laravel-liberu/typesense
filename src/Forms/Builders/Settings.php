<?php

namespace LaravelLiberu\Typesense\Forms\Builders;

use LaravelLiberu\Forms\Services\Form;
use LaravelLiberu\Typesense\Models\Settings as Model;

class Settings
{
    private const TemplatePath = __DIR__.'/../Templates/settings.json';

    public function edit(Model $settings)
    {
        return (new Form($this->templatePath()))->edit($settings);
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
