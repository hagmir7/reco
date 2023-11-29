<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ClientRequest;

class ClientRequestsTable extends DataTableComponent
{
    protected $model = ClientRequest::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('shopper.client_requests.show', $row);
            });
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),

            Column::make("Last name", "last_name")
                ->sortable(),

            Column::make("First name", "first_name")
                ->sortable(),

            Column::make(__('shopper::layout.forms.label.status'), 'status')
                ->view('livewire.tables.cells.client-requests.status'),

            Column::make("Email", "email")
                ->sortable(),

            Column::make("Phone", "phone")
                ->sortable(),

            Column::make("Created at", "created_at")
                ->sortable(),

            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
