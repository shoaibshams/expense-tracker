<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\AccountForm;
use App\Models\Account;
use Livewire\Component;

class EditAccount extends Component
{
    public AccountForm $form;

    public function mount(Account $account)
    {
        $this->form->setAccount($account);
    }

    public function update()
    {
        $this->form->update();

        return $this->redirect(AccountTable::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.account.edit-account');
    }
}
