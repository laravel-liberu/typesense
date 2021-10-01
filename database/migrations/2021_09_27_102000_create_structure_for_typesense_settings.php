<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForTypesenseSettings extends Migration
{
    protected ?string $parentMenu = 'Typesense';

    protected array $menu = [
        'name' => 'Settings', 'icon' => 'fad user-cog', 'route' => 'integrations.typesense.settings.index', 'order_index' => 200, 'has_children' => false,
    ];

    protected array $permissions = [
        ['name' => 'integrations.typesense.settings.index', 'description' => 'Show settings for Typesense', 'is_default' => false],
        ['name' => 'integrations.typesense.settings.update', 'description' => 'Update Typesense settings', 'is_default' => false],
    ];
}
