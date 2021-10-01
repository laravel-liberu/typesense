<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\Typesense\Http\Controllers\Settings\Index;
use LaravelEnso\Typesense\Http\Controllers\Settings\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/integrations/typesense/settings')
    ->as('integrations.typesense.settings.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
        Route::patch('{settings}', Update::class)->name('update');
    });
