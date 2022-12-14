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

Route::group(
    ['namespace' => 'DataTable', 'as' => 'datatable.', 'middleware' => []],
    function () {
        Route::resource('/', 'DataTableController');
        Route::get('datatable.data', ['as' => 'data', 'uses' => 'DataTableController@data']);


        Route::resource('/table', 'TableController');
        Route::get('table.data', ['as' => 'table.data', 'uses' => 'TableController@data']);
    }
);
