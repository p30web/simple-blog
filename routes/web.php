<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Request;
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
   // return view('welcome');
    return view('pages.home');
});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::namespace('Auth')->group(function () {
    Route::get('/login',[AuthController::class,'show_login_form'])->name('login');
    Route::post('/login',[AuthController::class,'process_login'])->name('login');
    Route::get('/register',[AuthController::class,'show_register_form'])->name('register');
    Route::post('/register',[AuthController::class,'process_register'])->name('register');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});

Route::resource('posts',PostController::class);

Route::get('install', function (Request $request) {

    $getUserTable = (new \App\Models\User())->getTable();

    $tables = collect(\Illuminate\Support\Facades\DB::select('SHOW TABLES'))->map(function ($tables) {
        foreach ($tables as $val) {
            return $val;
        }
    })->toArray();

    if (!in_array($getUserTable, $tables)) {
        \Illuminate\Support\Facades\Artisan::call('migrate --seed');
        dump(\Illuminate\Support\Facades\Artisan::output());
    }else{
        dump('error : app installed ..') ;
    }

});

