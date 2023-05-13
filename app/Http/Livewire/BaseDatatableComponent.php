<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;

/**
 * Class BaseDatatableComponent
 */
class BaseDatatableComponent extends DataTableComponent
{
    public bool $sortingPillsStatus = false;
    public bool $columnSelectStatus = false;

    public $showButtonOnHeader = false;
    public $buttonComponent = '';
    
    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [];
    }
}
