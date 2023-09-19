<?php

use App\Livewire\Account\AccountTable;
use App\Livewire\Account\CreateAccount;
use App\Livewire\Account\EditAccount;
use App\Livewire\Category\CategoryTable;
use App\Livewire\Category\CreateCategory;
use App\Livewire\Category\EditCategory;
use App\Livewire\Dashboard;
use App\Livewire\Reports\Calendar;
use App\Livewire\Transaction\CreateTransaction;
use App\Livewire\Transaction\EditTransaction;
use App\Livewire\Transaction\TransactionTable;
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
    Route::get('/', Dashboard::class)->name('home');

    Route::get('/category', CategoryTable::class)->name('category');
    Route::get('/category/create', CreateCategory::class)->name('category.create');
    Route::get('/category/{category}/edit', EditCategory::class)->name('category.edit');

    Route::get('/transaction', TransactionTable::class)->name('transaction');
    Route::get('/transaction/create', CreateTransaction::class)->name('transaction.create');
    Route::get('/transaction/{transaction}/edit', EditTransaction::class)->name('transaction.edit');

    Route::get('/account', AccountTable::class)->name('account');
    Route::get('/account/create', CreateAccount::class)->name('account.create');
    Route::get('/account/{account}/edit', EditAccount::class)->name('account.edit');

    /*
     * Reports route
     */
    Route::get('/calendar-view', Calendar::class)->name('calendar-view');
});
