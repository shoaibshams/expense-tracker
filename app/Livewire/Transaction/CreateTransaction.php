<?php

namespace App\Livewire\Transaction;

use App\Livewire\Forms\TransactionForm;
use App\Models\Account;
use App\Models\Category;
use Livewire\Component;

class CreateTransaction extends Component
{
    public TransactionForm $form;

    public function render()
    {
        $this->form->date = date('Y-m-d');
        $this->form->category_id = 1;

        return view('livewire.transaction.create-transaction', [
            'categories' => Category::all(),
            'accounts' => Account::all(),
        ]);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirect(TransactionTable::class, navigate: true);
    }
}
