<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\AccountForm;
use App\Models\Account;
use Livewire\Component;
use Livewire\WithPagination;

class AccountTable extends Component
{
    use WithPagination;

    public $delete_id = '';

    public $per_page = 10;

    public $search = '';

    public AccountForm $form;

    public function render()
    {
        return view('livewire.account.account-table', [
            'accounts' => Account::query()
                ->when(! empty($this->search), function ($query) {
                    $query->where('name', 'like', '%'.$this->search.'%');
                })->paginate($this->per_page),
        ]);
    }

    public function setDeleteId($id)
    {
        $this->delete_id = $id;
    }

    public function delete()
    {
        $deleted = $this->form->destroy($this->delete_id);

        if ($deleted) {
            return $this->redirect(self::class, navigate: true);
        }

        // displaying error message, if this account has transactions
        $this->js("Swal.fire('Error','You cannot delete this account because there are related transactions.','error')");
    }

    public function setPerPage($per_page)
    {
        $this->per_page = $per_page;
    }

    public function updated($property)
    {
        if (in_array($property, ['search', 'per_page'])) {
            $this->resetPage();
        }
    }
}
