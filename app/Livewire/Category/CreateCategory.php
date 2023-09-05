<?php

namespace App\Livewire\Category;

use App\Livewire\Forms\CategoryForm;
use Livewire\Component;

class CreateCategory extends Component
{
    public CategoryForm $form;

    public function save()
    {
        $this->form->store();

        return $this->redirect(CategoryTable::class);
    }

    public function render()
    {
        return view('livewire.category.create-category');
    }
}
