<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{
    public $name;


    public function store()
    {

        Category::create(['name' => $this->name]);

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.category-create');
    }
}
