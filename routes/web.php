<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);
Route::get('/landingpage', HomeController::class)->name('landingpage');
Route::get('/dashboard', HomeController::class)->name('landingpage');
Route::get('/deskripsi', [ContentController::class,'deskripsi'])->name('deskripsi');
Route::get('/AboutUs',[ContentController::class,'AboutUs'])->name('AboutUs');
Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/landingpage', function () {
        return view('landingpage');
    })->name('landingpage');
});
