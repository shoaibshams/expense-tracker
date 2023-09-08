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
            'expenses' => Expense::latest('date')->paginate(25),
            'current_month_expenses' => Expense::whereMonth('date', date('n'))->sum('amount'),
            'current_year_expenses' => Expense::whereYear('date', date('Y'))->sum('amount'),
            'total_expenses' => Expense::sum('amount'),
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
