<?php

namespace App\Livewire\Charts;

use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class YearlyTransactionChart extends Component
{
    public $labels = '';

    public $income = '';

    public $expense = '';

    public $year_income = 0;

    public $year_expense = 0;

    public $percentage_difference = 100;

    public function render()
    {
        $this->fetchData();

        return view('livewire.charts.yearly-transaction-chart');
    }

    public function fetchData()
    {
        $income_transactions = Transaction::selectRaw('SUM(amount) as amount, MONTH(date) as month')
            ->income()
            ->whereYear('date', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $expense_transactions = Transaction::selectRaw('SUM(amount) as amount, MONTH(date) as month')
            ->expense()
            ->whereYear('date', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        for ($month = 1; $month <= 12; $month++) {
            $labels[] = Carbon::create(null, $month)->format('M');
            $income[] = $income_transactions->where('month', $month)->value('amount');
            $expense[] = $expense_transactions->where('month', $month)->value('amount');
        }

        $this->year_income = $income_transactions->sum('amount');
        $this->year_expense = $expense_transactions->sum('amount');

        if ($this->year_expense !== 0) {
            $this->percentage_difference = (($this->year_income - $this->year_expense) / $this->year_expense) * 100;
        }

        $this->labels = json_encode($labels);
        $this->income = json_encode($income);
        $this->expense = json_encode($expense);
    }
}
