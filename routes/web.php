<?php

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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('admin.home');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/search', function () {
    return view('admin.search');
})->middleware(['auth'])->name('search');

// Route::get('/signatures', function () {
//     return view('admin.signatures');
// })->middleware(['auth'])->name('signatures');



Route::group(['middleware' => ['auth']], function () {

	# Home
	Route::post('/signatures', 'App\Http\Controllers\SignatureController@findDocument')->name('signatures');
});






require __DIR__.'/auth.php';
