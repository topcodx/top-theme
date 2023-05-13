<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class UserTable extends BaseDatatableComponent
{
    protected $model = User::class;
    
    public $showButtonOnHeader = true;
    public $buttonComponent = 'users.component.add-button';
    
    public function columns(): array
    {
        return [
            Column::make("NAME", "name")
                ->sortable()
                ->searchable()
            ->view('users.component.user-profile'),
            Column::make("EMAIL", "email")
                ->sortable()
                ->searchable(),
            Column::make("CREATED AT", "created_at")
                ->sortable()
                ->searchable(),
            Column::make("UPDATED AT", "updated_at")
                ->sortable()
                ->searchable(),
            Column::make("Action", "id")
                ->view('users.component.action'),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Active')
                ->options([
                    
                ]),
        ];
    }
}
