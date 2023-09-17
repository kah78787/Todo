<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('task',[
    TaskController::class,
    'index'
])->middleware('auth')->name('task.index');

Route::get('task/create',[
    TaskController::class,
    'create'
])->middleware('auth');

Route::post('task',[
    TaskController::class,
    'store'
])->middleware('auth')->name('task.store');

Route::get('task/{task}/edit',[
    TaskController::class,
    'edit'
])->middleware('auth')->name('task.edit');


Route::patch('task/{task}',[
    TaskController::class,
    'update'
])->middleware('auth')->name('task.update');

Route::delete('task/{task}',[
    TaskController::class,
    'destroy'
])->middleware('auth')->name('task.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

