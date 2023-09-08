<?php

use App\Livewire\Category\CategoryTable;
use App\Livewire\Category\CreateCategory;
use App\Livewire\Category\EditCategory;
use App\Livewire\Expense\CreateExpense;
use App\Livewire\Expense\EditExpense;
use App\Livewire\Expense\ExpenseTable;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/category', CategoryTable::class)->name('category');
    Route::get('/category/create', CreateCategory::class)->name('category.create');
    Route::get('/category/{category}/edit', EditCategory::class)->name('category.edit');

    Route::get('/expense', ExpenseTable::class)->name('expense');
    Route::get('/expense/create', CreateExpense::class)->name('expense.create');
    Route::get('/expense/{expense}/edit', EditExpense::class)->name('expense.edit');
});
