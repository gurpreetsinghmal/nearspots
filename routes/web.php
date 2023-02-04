<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/categories',[HomeController::class,'getcategories']);
// Route::get('/categories/',[HomeController::class,'getcategories']);
// Route::get('/categories/{}/{}',[HomeController::class,'getcategories']);


Route::get('/policy', function () {
    $policy="test";
    $data=compact('policy');
    return view('policy')->with($data);
});
Route::get('/terms', function () {
    $terms="Gurpreet";
    $data=compact('terms');
    return view('terms')->with($data);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
