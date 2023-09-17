<?php

namespace App\Livewire\Charts;

use App\Models\Transaction;
use Livewire\Component;

class MonthlyTransactionChart extends Component
{
    public $type = 'monthly';

    public $labels = '';

    public $today_expenses = 0;

    public $total_expenses = 0;

    public $expenses = 0;

    public function render()
    {
        $this->fetchData();

        return view('livewire.charts.monthly-transaction-chart');
    }

    public function setType($type = 'monthly')
    {
        $this->type = $type;
        $this->fetchData();
    }

    public function fetchData()
    {
        $expense = Transaction::selectRaw('SUM(amount) as amount, DAY(date) as day')
            ->expense()
            ->when($this->type == 'weekly', function ($q) {
                $q->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()]);
            })
            ->whereMonth('date', date('m'))
            ->whereYear('date', date('Y'))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $this->today_expenses = $expense->where('day', date('d'))->sum('amount');
        $this->total_expenses = $expense->sum('amount');
        $this->labels = json_encode($expense->pluck('day'));
        $this->expenses = json_encode($expense->pluck('amount'));

        $this->js("loadChart($this->labels, $this->expenses)");
    }
}
