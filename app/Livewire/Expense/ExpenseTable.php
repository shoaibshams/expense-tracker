<?php

namespace App\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;
use Livewire\WithPagination;

class ExpenseTable extends Component
{
    use WithPagination;

    public $delete_id = '';

    public function render()
    {
        return view('livewire.expense.expense-table', [
            'expenses' => Expense::paginate(10),
        ]);
    }

    public function setDeleteId($id)
    {
        $this->delete_id = $id;
    }

    public function delete()
    {
        Expense::where('id', $this->delete_id)->delete();
    }
}
