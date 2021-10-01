<?php

namespace LaravelEnso\Typesense\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelEnso\Typesense\Forms\Builders\Settings as Form;
use LaravelEnso\Typesense\Models\Settings;

class Index extends Controller
{
    public function __invoke(Form $form)
    {
        return ['form' => $form->edit(Settings::current())];
    }
}
