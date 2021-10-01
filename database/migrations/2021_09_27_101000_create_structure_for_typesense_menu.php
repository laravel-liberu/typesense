<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForTypesenseMenu extends Migration
{
    protected array $menu = [
        'name' => 'Typesense', 'icon' => 'search', 'route' => null, 'order_index' => 600, 'has_children' => true,
    ];

    protected ?string $parentMenu = 'Integrations';
}
