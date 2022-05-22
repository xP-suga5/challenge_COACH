<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Search;
use App\Http\Livewire\CreateForm;



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

//Route::get('/', function () {
//    return view('index');
//});


Route::get('/', Search::class)->name('search');
Route::get('/create', CreateForm::class)->name('create');
