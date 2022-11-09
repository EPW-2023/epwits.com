<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LinktreeController;
use App\Http\Controllers\ShortlinkController;
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
    return redirect(route('coming-soon'));
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/coming-soon', function () {
    return view('errors.comingsoon');
})->name('coming-soon');
//Auth
// Route::get('/register', [AuthController::class, 'getRegister']);
// Route::post('/register', [AuthController::class, 'postRegister'])->name(
//     'post-register'
// );
Route::get('/admin-login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/admin-login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
//Not an admin :v
Route::get('/not-admin', function () {
    return view('not-admin');
});

//Admin Panel
Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.admin');
        })
            ->middleware('auth')
            ->name('admin-panel');
        Route::resource('/linktree', LinktreeController::class);

        //shortlink
        Route::resource('/shortlink', ShortlinkController::class);
    });
//shortlink finished (always in bottom)
Route::get('/{shortlink:short}', [ShortlinkController::class, 'show']);
