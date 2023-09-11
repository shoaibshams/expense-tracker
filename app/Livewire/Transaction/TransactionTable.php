<?php

namespace App\Livewire\Transaction;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class TransactionTable extends Component
{
    use WithPagination;

    public $delete_id = '';
    public $per_page = 10;
    public $date = '';
    public $type = '';

    public function render()
    {
        $transactions = Transaction::query()
            ->when(! empty($this->date), function ($query) {
                $query->where('date', $this->date);
            })->latest('date')->paginate($this->per_page);

        return view('livewire.transaction.transaction-table', [
            'transactions' => $transactions,
            'current_month_transactions' => Transaction::whereMonth('date', date('n'))->sum('amount'),
            'current_year_transactions' => Transaction::whereYear('date', date('Y'))->sum('amount'),
            'total_transactions' => Transaction::sum('amount'),
        ]);
    }

    public function setDeleteId($id)
    {
        $this->delete_id = $id;
    }

    public function delete()
    {
        Transaction::where('id', $this->delete_id)->delete();
    }

    public function updated($property)
    {
        if (in_array($property, ['type', 'date', 'per_page'])) {
            $this->resetPage();
        }
    }
}
