<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryTable extends Component
{
    public $categories = [];
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.category-table');
    }
}
