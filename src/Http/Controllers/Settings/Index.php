<?php

namespace LaravelLiberu\Typesense\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelLiberu\Typesense\Forms\Builders\Settings as Form;
use LaravelLiberu\Typesense\Models\Settings;

class Index extends Controller
{
    public function __invoke(Form $form)
    {
        return ['form' => $form->edit(Settings::current())];
    }
}
