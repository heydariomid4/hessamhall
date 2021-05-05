<?php

//use Illuminate\Support\Facades\Http;
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

    //$response = Http::withHeaders([
    //    'Authorization' => 'Apikey b59ac448-2a42-4a0e-a293-54f0901b83c4'
    //])->get('https://napi.arvancloud.com/cdn/4.0/domains')['data'];
    //return $response;
});

Route::middleware('auth','auth.admin')->prefix('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin');

});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
