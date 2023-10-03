<?php

namespace App\Livewire\Transaction;

use App\Models\Category;
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

    public $category_id = '';

    public function render()
    {
        $transactions = Transaction::with('category')->when(! empty($this->date), fn($q) => $q->whereDate('date', $this->date))->when(
            ! empty($this->category_id), fn($q) => $q->where('category_id', $this->category_id)
        )->when(! empty($this->type), fn($q) => $q->whereRelation('category', 'type', $this->type))->latest('date')->paginate($this->per_page);

        return view('livewire.transaction.transaction-table', [
            'transactions' => $transactions,
            'current_month_transactions' => Transaction::whereMonth('date', date('n'))->sum('amount'),
            'current_year_transactions' => Transaction::whereYear('date', date('Y'))->sum('amount'),
            'total_transactions' => Transaction::sum('amount'),
            'categories' => Category::when(! empty($this->type), fn($q) => $q->where('type', $this->type))->get(),
        ]);
    }

    public function setDeleteId($id)
    {
        $this->delete_id = $id;
    }

    public function delete()
    {
        $delete = Transaction::where('id', $this->delete_id)->delete();
        if ($delete) {
            $this->redirect(self::class);
        }
    }

    public function updated($property)
    {
        if (in_array($property, ['type', 'date', 'per_page', 'category_id'])) {
            $this->resetPage();
        }

        if ($property === 'type') {
            $this->reset('category_id');
        }
    }

    public function clearDate(): void
    {
        $this->date = $this->type = $this->category_id = null;
    }
}
