<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;

    public $delete_id = '';
    public $per_page = 10;
    public $search = '';
    public $type = '';

    public function render()
    {
        return view('livewire.category.category-table', [
            'categories' => Category::query()
                ->when(!empty($this->search), function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                })->when(!empty($this->type), function ($query) {
                    $query->where('type', $this->type);
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

    public function updated($property)
    {
        if (in_array($property, ['type', 'search', 'per_page'])) {
            $this->resetPage();
        }
    }
}
