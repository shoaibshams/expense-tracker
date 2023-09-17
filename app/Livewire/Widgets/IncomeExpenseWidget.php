<?php

namespace App\Livewire\Widgets;

use App\Models\Transaction;
use Livewire\Component;

class IncomeExpenseWidget extends Component
{
    public $title = 'Title';

    public $income = 0;

    public $expense = 0;

    public $type = '';

    public function render()
    {
        $this->getTransactions($this->type);

        return view('livewire.widgets.income-expense-widget');
    }

    private function getTransactions($type = null)
    {
        return match ($type) {
            'today' => $this->getTodayTransactions(),
            'current_week' => $this->getCurrentWeekTransactions(),
            'current_month' => $this->getCurrentMonthTransactions(),
            'current_year' => $this->getCurrentYearTransactions(),
            default => ''
        };
    }

    private function getTodayTransactions()
    {
        $income = Transaction::income()->whereDate('date', date('Y-m-d'))->sum('amount');
        $expense = Transaction::expense()->whereDate('date', date('Y-m-d'))->sum('amount');

        $this->setValues('Today', $income, $expense);
    }

    private function getCurrentWeekTransactions()
    {
        $income = Transaction::income()->whereBetween('date', [now()->subDay(6)->format('Y-m-d'), now()->format('Y-m-d')])->sum('amount');
        $expense = Transaction::expense()->whereBetween('date', [now()->subDay(6)->format('Y-m-d'), now()->format('Y-m-d')])->sum('amount');

        $this->setValues('Current Week', $income, $expense);
    }

    private function getCurrentMonthTransactions()
    {
        $income = Transaction::income()->whereYear('date', date('Y'))->whereMonth('date', date('m'))->sum('amount');
        $expense = Transaction::expense()->whereYear('date', date('Y'))->whereMonth('date', date('m'))->sum('amount');

        $this->setValues('Current Month', $income, $expense);
    }

    private function getCurrentYearTransactions()
    {
        $income = Transaction::income()->whereYear('date', date('Y'))->sum('amount');
        $expense = Transaction::expense()->whereYear('date', date('Y'))->sum('amount');

        $this->setValues('Current Year', $income, $expense);
    }

    private function setValues($title, $income, $expense)
    {
        $this->title = $title;
        $this->income = $income;
        $this->expense = $expense;
    }
}
