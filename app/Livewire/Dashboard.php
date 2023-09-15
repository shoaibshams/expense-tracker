<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $transactions = Transaction::with('category')->latest('date')->paginate(5);

        return view('livewire.dashboard', [
            'transactions' => $transactions
        ]);
    }
}
