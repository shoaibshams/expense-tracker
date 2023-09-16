<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Livewire\Component;

class EditAccount extends Component
{
    public CategoryForm $form;

    public function mount(Category $category)
    {
        $this->form->setCategory($category);
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
