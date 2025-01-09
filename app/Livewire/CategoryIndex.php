<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public function delete(Category $category)
    {
        $category->delete();
    }

    public function render()
    {
        return view('livewire.category-index', ['categories' => Category::all()]);
    }
}
