<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryEdit extends Component
{
    public Category $category;
    public $name;


    public function mount()
    {
        $this->name = $this->category->name;
    }

    public function update()
    {
        $this->category->update(['name' =>  $this->name]);
        return redirect('categories');
    }

    public function render()
    {
        return view('livewire.category-edit');
    }
}
