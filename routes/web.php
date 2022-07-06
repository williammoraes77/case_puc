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

// Route::get('/home', function () {
//     return view('admin.home');
// })->middleware(['auth'])->name('home');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/search', function () {
    return view('admin.search');
})->middleware(['auth'])->name('search');

// Route::get('/signatures', function () {
//     return view('admin.signatures');
// })->middleware(['auth'])->name('signatures');



Route::group(['middleware' => ['auth']], function () {

	# Home
	Route::get('/home', 'App\Http\Controllers\SignatureController@index')->name('home');

	Route::get('/dashboard', 'App\Http\Controllers\SignatureController@dashboard')->name('dashboard');
	Route::get('/dashboard/school/{id}', 'App\Http\Controllers\SignatureController@dashboardPerSchool')->name('dashboard_school');

	Route::post('/search/signatures', 'App\Http\Controllers\SignatureController@findDocument')->name('signatures');
	Route::post('/search/signatures/check', 'App\Http\Controllers\SignatureController@checkPending')->name('check-pending');
	Route::post('/signatures/send-email', 'App\Http\Controllers\SignatureController@sendEmail')->name('send-email');

    Route::get('/logs', 'App\Http\Controllers\LogController@index')->name('logs');
});






require __DIR__.'/auth.php';
