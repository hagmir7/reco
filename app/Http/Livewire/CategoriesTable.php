<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Shop\Product\Category;

class CategoriesTable extends DataTableComponent
{
    protected $model = Shop\Product\Category::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Slug", "slug")
                ->sortable(),
            Column::make("Description", "description")
                ->sortable(),
            Column::make("Position", "position")
                ->sortable(),
            Column::make("Is enabled", "is_enabled")
                ->sortable(),
            Column::make("Seo title", "seo_title")
                ->sortable(),
            Column::make("Seo description", "seo_description")
                ->sortable(),
            Column::make("Parent id", "parent_id")
                ->sortable(),
            Column::make("Show in welcome page", "show_in_welcome_page")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
