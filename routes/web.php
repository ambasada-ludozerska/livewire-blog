<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PostList;
use App\Http\Livewire\PostShow;
use App\Http\Livewire\PostAdd;
use App\Http\Livewire\PostEdit;
use App\Http\Livewire\PostDelete;

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

Route::get('/', PostList::class);
Route::get('/add', PostAdd::class);
Route::get('/{id}', PostShow::class);
Route::get('/{id}/edit', PostEdit::class);
Route::get('/{id}/delete', PostDelete::class);
