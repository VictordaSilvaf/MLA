<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Update extends Component
{
    public Category $category;

    protected function rules(): array
    {
        return [
            'category.name' => 'required|string|min:3|max:255|unique:categories,name,' . $this->category->id,
            'category.description' => 'string|min:3|max:255',
        ];
    }

    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function save(): void
    {
        $this->validate();
        $this->category->save();
    }
    public function render()
    {
        return view('livewire.categories.update');
    }
}
