<?php

namespace LaravelEnso\Typesense\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelEnso\Typesense\Http\Requests\ValidateSettings;
use LaravelEnso\Typesense\Models\Settings;

class Update extends Controller
{
    public function __invoke(ValidateSettings $request, Settings $settings)
    {
        $settings->update($request->validated());

        return ['message' => 'Settings were stored sucessfully'];
    }
}
