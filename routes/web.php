<?php

use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthController::class, 'registerView'])->name('regiter-view');
Route::post('/save-register-user', [AuthController::class, 'registerUsers'])->name('save-users');
Route::get('/ajax-circle', [AuthController::class, 'getCircle'])->name('ajax-circle');
Route::get('/ajax-ranges', [AuthController::class, 'getRanges'])->name('ajax-ranges');
