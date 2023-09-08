<?php

namespace App\Livewire\Expense;

use App\Livewire\Forms\ExpenseForm;
use App\Models\Category;
use Livewire\Component;

class CreateExpense extends Component
{
    public ExpenseForm $form;

    public function render()
    {
        $this->form->date = date('Y-m-d');
        $this->form->category_id = 1;

        return view('livewire.expense.create-expense', [
            'categories' => Category::all(),
        ]);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirect(ExpenseTable::class, navigate: true);
    }
}
