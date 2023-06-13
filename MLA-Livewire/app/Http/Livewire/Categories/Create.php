<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Create extends Component
{
    public Category $category;

    protected array $rules = [
        'category.name' => 'required|string|min:3|max:255|unique:categories,name',
    ];

    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function mount(): void
    {
        $this->category = new Category();
    }

    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.categories.create');
    }

    public function save(): void
    {
        $this->validate();
        $this->category->path = 1;
        $this->category->save();
    }
}
