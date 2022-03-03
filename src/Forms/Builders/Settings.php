<?php

namespace LaravelEnso\Typesense\Forms\Builders;

use LaravelEnso\Forms\Services\Form;
use LaravelEnso\Typesense\Models\Settings as Model;

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
