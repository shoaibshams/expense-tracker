<?php

namespace App\Livewire\Category;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public CategoryForm $form;

    public function mount(Category $category)
    {
        $this->form->setCategory($category);
    }

    public function update()
    {
        $this->form->update();

        return $this->redirect(CategoryTable::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.category.edit-category');
    }
}
