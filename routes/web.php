<?php

use App\Http\Controllers\MainController;
// use App\Http\Controllers\Base\Topic\TopicController;
// use App\Http\Controllers\Base\Topic\SubtopicController;
use App\Http\Controllers\Transactions\TransactionIndexController;
use App\Http\Controllers\Transactions\TransactionCreateController;
use App\Http\Controllers\Transactions\TransactionStoreController;
use App\Http\Controllers\Transactions\TransactionShowController;
use App\Http\Controllers\Transactions\TransactionEditController;
use App\Http\Controllers\Transactions\TransactionUpdateController;
use App\Http\Controllers\Transactions\TransactionDeleteController;
use App\Http\Controllers\Contacts\ContactIndexController;
use App\Http\Controllers\Contacts\ContactCreateController;
use App\Http\Controllers\Contacts\ContactStoreController;
use App\Http\Controllers\Contacts\ContactShowController;
use App\Http\Controllers\Contacts\ContactEditController;
use App\Http\Controllers\Contacts\ContactUpdateController;
use App\Http\Controllers\Contacts\ContactDeleteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', MainController::class)->name('main');

Route::prefix('transactions')->name('transactions.')->group(function () {
    Route::get('/', TransactionIndexController::class)->name('index');
    Route::get('/create', TransactionCreateController::class)->name('create');
    Route::post('/store', TransactionStoreController::class)->name('store');
    Route::get('/show/{transaction}', TransactionShowController::class)->name('show');
    Route::get('/edit/{transaction}', TransactionEditController::class)->name('edit');
    Route::patch('/update/{transaction}', TransactionUpdateController::class)->name('update');
    Route::delete('/delete/{transaction}', TransactionDeleteController::class)->name('destroy');
});

Route::prefix('contacts')->name('contacts.')->group(function () {
    Route::get('/', ContactIndexController::class)->name('index');
    Route::get('/create', ContactCreateController::class)->name('create');
    Route::post('/store', ContactStoreController::class)->name('store');
    Route::get('/show/{contact}', ContactShowController::class)->name('show');
    Route::get('/edit/{contact}', ContactEditController::class)->name('edit');
    Route::patch('/update/{contact}', ContactUpdateController::class)->name('update');
    Route::delete('/delete/{contact}', ContactDeleteController::class)->name('destroy');
});