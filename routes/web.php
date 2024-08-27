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
    return view('page.index');
});
Route::get('/test', function () {
    return view('test');
});
Route::prefix('test_page')->group(function() {
    Route::get('/test', function () {
        return view('page.index');
    });
});
Route::prefix('testrun')->group(function() {
    Route::get('/sweep', function () {
        return view('testing.sweep');
    });
    Route::get('/template', function () {
        return view('testing.newtemplate');
    });
    Route::get('/randomize', function () {
        return view('testing.randomize');
    });
    Route::get('/spa', function () {
        return view('testing.spanewpage');
    });
});
