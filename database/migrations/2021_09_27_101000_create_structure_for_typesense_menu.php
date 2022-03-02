<?php

use LaravelEnso\Migrator\Database\Migration;

return new class extends Migration
{
    protected array $menu = [
        'name' => 'Typesense', 'icon' => 'search', 'route' => null, 'order_index' => 600, 'has_children' => true,
    ];

    protected ?string $parentMenu = 'Integrations';
};
