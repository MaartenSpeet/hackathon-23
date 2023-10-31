<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['azure'])->name('dashboard');

Route::get('/logs', function () {
    return view('logs');
})->middleware(['azure'])->name('logs');

Route::get('/login/azure', '\RootInc\LaravelAzureMiddleware\Azure@azure')->name('azure.login');
Route::get('/login/azurecallback', '\RootInc\LaravelAzureMiddleware\Azure@azurecallback')->name('azure.callback');
Route::get('/logout/azure', '\RootInc\LaravelAzureMiddleware\Azure@azurelogout')->name('azure.logout');

Route::middleware('azure')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
