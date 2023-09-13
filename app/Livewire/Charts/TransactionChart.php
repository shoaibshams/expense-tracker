<?php

namespace App\Livewire\Charts;

use Livewire\Component;

class TransactionChart extends Component
{
    public $labels = '';
    public $income = '';
    public $expense = '';

    public function mount()
    {
        $this->labels = json_encode(['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']);
        $this->income = json_encode([1,2,3,4,5,6,7]);
        $this->expense = json_encode([7,6,5,4,3,2,1]);
    }
    public function render()
    {
        return view('livewire.charts.transaction-chart');
    }
}
