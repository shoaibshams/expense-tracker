<?php

namespace App\Livewire\Transaction;

use App\Livewire\Forms\TransactionForm;
use App\Models\Account;
use App\Models\Category;
use App\Models\Transaction;
use Livewire\Component;

class EditTransaction extends Component
{
    public TransactionForm $form;

    public function mount(Transaction $transaction)
    {
        $this->form->setTransaction($transaction);
    }

    public function update()
    {
        $this->form->update();

        return $this->redirect(TransactionTable::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.transaction.edit-transaction', [
            'categories' => Category::all(),
            'accounts' => Account::all(),
        ]);
    }
}
