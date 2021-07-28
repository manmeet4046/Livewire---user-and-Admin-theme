<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Users\HomePage;


use Illuminate\Support\Facades\Artisan;

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

Route::get('users/home', HomePage::class)->name('users.home');
//Route::get('feedback', ListFeedback::class)->name('feeback');
   // Route::get('feedback/create', CreateFeedbackForm::class)->name('feedback.create');

Route::get('/symlink', function () {
    Artisan::call('storage:link');
});