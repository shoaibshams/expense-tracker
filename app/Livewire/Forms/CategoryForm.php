<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CategoryForm extends Form
{
    #[Rule('required|min:3')]
    public $name = '';

    public function store() {
        Category::create($this->all());
    }
}
