<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\CategoryForm;
use Livewire\Component;

class CreateAccount extends Component
{
    public CategoryForm $form;

    public function save()
    {
        $this->form->store();

        return $this->redirect(AccountTable::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.account.create-account');
    }
}
