<?php

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

Route::get('/visualizer', function(){
    return view('visualizer');
});

Route::get('/workload-allocator', function(){
    return view('workloadAllocator');
});

Route::get('/pattern-builder', 'ActivityController@index');


Route::get('/uploader', function(){
    return view('uploader');
});

// COMPONENTS

Route::prefix('data')->group(function(){
    
    Route::get('staff', 'StaffController@index');
    Route::post('staff', 'StaffController@store');

    Route::get('units', 'UnitController@index');
    Route::post('units', 'UnitController@store');

    Route::get('offerings', 'OfferingController@index');
    Route::get('patterns', 'PatternController@index');
    
});


Route::prefix('api/data/post')->group(function(){
    Route::post('staff', 'StaffController@store');
    Route::post('unit', 'UnitController@store');
});


