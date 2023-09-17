<?php

namespace App\Livewire\Forms;

use App\Models\Transaction;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Form;

class TransactionForm extends Form
{
    public ?Transaction $transaction;

    #[Locked]
    public $id = '';

    #[Rule('required|date')]
    public $date = '';

    #[Rule('required|int')]
    public $account_id = '';

    #[Rule('required|int')]
    public $category_id = '';

    #[Rule('required|numeric')]
    public $amount = '';

    #[Rule('nullable')]
    public $description = '';

    public function store()
    {
        $this->validate();

        Transaction::create($this->except('id'));
    }

    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
        $this->id = $transaction->id;
        $this->date = $transaction->date->format('Y-m-d');
        $this->account_id = $transaction->account_id;
        $this->category_id = $transaction->category_id;
        $this->amount = $transaction->amount;
        $this->description = $transaction->description;
    }

    public function update()
    {
        $this->validate();

        $this->transaction->update($this->all());
    }
}
