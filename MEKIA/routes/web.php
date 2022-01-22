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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/staffDashboard', function(){
    return view('staffDashboard');
});

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::post('/addCategory',[App\Http\Controllers\CategoryController::class, 'add'])->name('addCategory');


Route::get('/addFurniture', function () {
    return view('addFurniture',['categoryID'=>App\Models\Category::all()]);
});

Route::post('/addFurniture',[App\Http\Controllers\FurnitureController::class, 'add'])->name('addFurniture');