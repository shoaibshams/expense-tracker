<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;

    public $delete_id = '';
    public $per_page = 25;
    public $search = '';

    public function render()
    {
        return view('livewire.category.category-table', [
            'categories' => Category::query()
                ->when(!empty($this->search), function ($query) {
                        $this->resetPage();
                        $query->where('name', 'like', '%'.$this->search.'%');
                })->paginate($this->per_page),
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

    public function setPerPage($per_page)
    {
        $this->per_page = $per_page;
    }
}
