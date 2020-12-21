<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MemberController;
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

Route::get('teuz', function () {
    return view('index');
});

// Route::get('teuz/business', function () {
//     return view('business');
// });
Route::get('teuz/business/add', function () {
    return view('add');
});

Route::get('teuz/business', [MemberController::class, 'show']);
