<?php

namespace App\Livewire\Expense;

use App\Livewire\Forms\ExpenseForm;
use App\Models\Category;
use App\Models\Expense;
use Livewire\Component;

class EditExpense extends Component
{
    public ExpenseForm $form;

    public function mount(Expense $expense)
    {
        $this->form->setExpense($expense);
    }

    public function update()
    {
        $this->form->update();

        return $this->redirect(ExpenseTable::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.expense.edit-expense', [
            'categories' => Category::all(),
        ]);
    }
}
