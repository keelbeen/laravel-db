<?php


use App\Http\Controllers\DashboardAkunController;
use App\Http\Controllers\DashboardStoreController;
use App\Http\Controllers\DashboardMainController;
use App\Http\Controllers\DashboardSettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Kelvin Agustian",
        "email" => "kelvinrezki11@gmail.com",
        "image" => "Kelvin.jpeg"
    ]);
});



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/akun', DashboardAkunController::class)
->middleware('auth');
Route::resource('/dashboard/settings', DashboardSettingsController::class)
->middleware('auth');
Route::resource('/dashboard/store', DashboardStoreController::class)
->middleware('auth');

Route::get('/dashboard2', function() {
    return view('dashboard2.index');
})->middleware('auth');

Route::resource('/dashboard2/akun', DashboardAkunController::class)
->middleware('auth');
Route::resource('/dashboard2/store', DashboardStoreController::class)
->middleware('auth');
Route::resource('/dashboard2/settings', DashboardSettingsController::class)
->middleware('auth');
