<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\AccountForm;
use Livewire\Component;

class CreateAccount extends Component
{
    public AccountForm $form;

    public function save()
    {
        $this->form->store();

        $this->redirect(AccountTable::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.account.create-account');
    }
}
