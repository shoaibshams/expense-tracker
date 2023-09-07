<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;
    public $delete_id = '';

    public function render()
    {
        return view('livewire.category-table', [
            'categories' => Category::paginate(10)
        ]);
    }

    public function setDeleteId($id)
    {
        $this->delete_id = $id;
    }

    public function delete()
    {
        Category::where('id', $this->delete_id)->delete();
    }
}
