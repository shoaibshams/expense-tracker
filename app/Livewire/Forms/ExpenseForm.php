<?php

namespace App\Livewire\Forms;

use App\Models\Expense;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Form;

class ExpenseForm extends Form
{
    public ?Expense $expense;

    #[Locked]
    public $id = '';

    #[Rule('required|date')]
    public $date = '';

    #[Rule('required|int')]
    public $category_id = '';

    #[Rule('required|numeric')]
    public $amount = '';

    #[Rule('nullable')]
    public $description = '';

    public function store()
    {
        $this->validate();

        Expense::create($this->except('id'));
    }

    public function setExpense($expense)
    {
        $this->expense = $expense;
        $this->id = $expense->id;
        $this->date = $expense->date->format('Y-m-d');
        $this->category_id = $expense->category_id;
        $this->amount = $expense->amount;
        $this->description = $expense->description;
    }

    public function update()
    {
        $this->validate();

        $this->expense->update($this->all());
    }
}
