<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryTable extends Component
{
    public $categories = [];
    public $delete_id = '';

    public function render()
    {
        $this->categories = Category::all();

        return view('livewire.category-table');
    }

    public function setDeleteId($id)
    {
        $this->delete_id= $id;
    }

    public function delete()
    {
        Category::where('id', $this->delete_id)->delete();
    }
}
