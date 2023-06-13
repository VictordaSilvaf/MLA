<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.categories.index', [
            'categories' => Category::paginate(2),
        ]);
    }

    public function destroy(Category $category): void
    {
        $category->delete();
    }
}
