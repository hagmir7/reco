<?php

namespace App\Http\Livewire\Categories;

use Illuminate\Validation\Rule;
use Livewire\Component;
use Shopper\Framework\Repositories\Ecommerce\CategoryRepository;
use Shopper\Framework\Traits\WithChoicesCategories;
use Shopper\Framework\Traits\WithSeoAttributes;

class Create extends Component
{
    use WithChoicesCategories;
    use WithSeoAttributes;

    public string $name = '';

    public ?int $parent_id = null;

    public ?string $description = null;

    public bool $showInWelcomePage = false;

    public ?int $priority = null;

    public bool $is_enabled = true;

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

    public function onTrixValueUpdate(string $value): void
    {
        $this->description = $value;
    }

    public function onFileUpdate($file): void
    {
        $this->fileUrl = $file;
    }

    public function store(): void
    {
        $this->validate($this->rules());

        $category = (new CategoryRepository())->create([
            'name' => $this->name,
            'slug' => $this->parent ? $this->parent->slug.'-'.$this->name : $this->name,
            'parent_id' => $this->parent_id,
            'description' => $this->description,
            'is_enabled' => $this->is_enabled,
            'seo_title' => $this->seoTitle,
            'seo_description' => $this->seoDescription,
            'show_in_welcome_page' => $this->showInWelcomePage,
            'priority' => $this->priority,
        ]);

        if ($this->fileUrl) {
            $category->addMedia($this->fileUrl)->toMediaCollection(config('shopper.system.storage.disks.uploads'));
        }

        session()->flash('success', __('Category successfully added!'));

        $this->redirectRoute('shopper.categories.index');
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:150',
            'showInWelcomePage' => function (string $attribute, mixed $value, \Closure $fail) {
                if ($value && (new CategoryRepository())
                    ->makeModel()
                    ->scopes('enabled')->where('show_in_welcome_page', true)->count() >= 4) {
                    $fail("You Can't add another category to home page!");
                }
            },
            'priority' => [
                'nullable', 'required_if:showInWelcomePage,true', 'integer',
                Rule::unique(shopper_table('categories'), 'priority'),
            ],
            'is_enabled' => 'accepted_if:showInWelcomePage,true',
        ];
    }

    public function render()
    {
        return view('livewire.categories.create', [
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
