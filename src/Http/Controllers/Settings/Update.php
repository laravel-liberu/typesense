<?php

namespace LaravelLiberu\Typesense\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelLiberu\Typesense\Http\Requests\ValidateSettings;
use LaravelLiberu\Typesense\Models\Settings;

class Update extends Controller
{
    public function __invoke(ValidateSettings $request, Settings $settings)
    {
        $settings->update($request->validated());

        return ['message' => 'Settings were stored sucessfully'];
    }
}
