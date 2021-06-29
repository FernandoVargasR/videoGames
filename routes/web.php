<?php
use App\Http\Controllers\VideogameController;
use App\Http\Controllers\FtpvideogameController;
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

// Route::get('inicio', function () {
//     return view('home');
// });

Route::get('/', function () {
    //return view('welcome');
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('videogame', VideogameController::class); //->middleware('auth');

Route::resource('ftpvideogame', FtpvideogameController::class);
