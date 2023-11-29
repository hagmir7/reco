<?php

namespace App\Http\Livewire\Categories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Shopper\Framework\Repositories\Ecommerce\CategoryRepository;
use Shopper\Framework\Traits\WithChoicesCategories;
use Shopper\Framework\Traits\WithSeoAttributes;

class Edit extends Component
{
    use WithChoicesCategories;
    use WithSeoAttributes;

    public Model $category;

    public int $categoryId;

    public string $name = '';

    public ?int $parent_id = null;

    public ?string $description = null;

    public bool $showInWelcomePage = false;

    public ?int $priority = null;

    public bool $is_enabled = false;

    public ?string $fileUrl = null;

    public $parent;

    public $seoAttributes = [
        'name' => 'name',
        'description' => 'description',
    ];

    protected $listeners = [
        'trix:valueUpdated' => 'onTrixValueUpdate',
        'shopper:fileUpdated' => 'onFileUpdate',
    ];

    public function mount($category): void
    {
        $this->category = $category;
        $this->categoryId = $category->id;
        $this->name = $category->name;
        $this->parent_id = $category->parent_id;
        $this->description = $category->description;
        $this->is_enabled = $category->is_enabled;
        $this->updateSeo = true;
        $this->seoTitle = $category->seo_title ?? $category->name;
        $this->seoDescription = $category->seo_description;
        $this->selectedCategory = $category->parent_id ? [$category->parent_id] : [];
        $this->parent = $category->parent_id ? $category->parent : null;
        $this->showInWelcomePage = $category->show_in_welcome_page;
        $this->priority = $category->priority;
    }

    public function onTrixValueUpdate(string $value): void
    {
        $this->description = $value;
    }

    public function onFileUpdate($file): void
    {
        $this->fileUrl = $file;
    }

    public function isUpdate(): bool
    {
        return true;
    }

    public function store(): void
    {
        $this->validate($this->rules());

        $this->category->update([
            'name' => $this->name,
            'slug' => $this->parent ? $this->parent->slug . '-' . $this->name : $this->name,
            'parent_id' => $this->parent_id,
            'description' => $this->description,
            'is_enabled' => $this->is_enabled,
            'seo_title' => $this->seoTitle,
            'seo_description' => str_limit($this->seoDescription, 157),
            'show_in_welcome_page' => $this->showInWelcomePage,
            'priority' => $this->priority,
        ]);

        if ($this->fileUrl) {
            $this->category
                ->addMedia($this->fileUrl)
                ->toMediaCollection(config('shopper.system.storage.disks.uploads'));
        }

        session()->flash('success', __('Category successfully updated!'));

        $this->redirectRoute('shopper.categories.index');
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|max:150',
            'showInWelcomePage' => function (string $attribute, mixed $value, \Closure $fail) {
                if ($value && (new CategoryRepository())
                        ->makeModel()
                        ->scopes('enabled')
                        ->whereNot('id', $this->categoryId)
                        ->where('show_in_welcome_page', true)->count() >= 4) {
                    $fail("You Can't add another category to home page!");
                }
            },
            'priority' => [
                'nullable', 'required_if:showInWelcomePage,true', 'integer',
                Rule::unique(shopper_table('categories'), 'priority')->ignore($this->categoryId)
            ],
            'is_enabled' => 'accepted_if:showInWelcomePage,true',
        ];
    }

    public function render()
    {
        return view('livewire.categories.edit', [
            'categories' => (new CategoryRepository())
                ->makeModel()
                ->scopes('enabled')
                ->tree()
                ->orderBy('name')
                ->get()
                ->toTree(),
        ]);
    }
}
