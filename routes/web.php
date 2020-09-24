<?php

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('carry.index');
})->name('index');

// ============================================================================
// Carry
// ============================================================================
Route::get('carry/index', 'CarryController@index')->name('carry.index');
Route::get('carry/car', 'CarryController@car')->name('carry.car');
Route::get('carry/carList', 'CarryController@carList')->name('carry.carList');
Route::get('carry/addCommande', 'CarryController@addCommande')->name('carry.addCommande');
Route::get('carry/commandes', 'CarryController@commandes')->name('carry.commandes');


// auth
Route::get('carry/login', 'CarryController@login')->name('carry.login');
Route::get('carry/register', 'CarryController@register')->name('carry.register');
Route::post('carry/auth', 'CarryController@auth')->name('carry.auth');
Route::get('carry/logout', 'CarryController@logout')->name('carry.logout');

// ============================================================================
// Backofffice
// ============================================================================
Route::get('devnote/{fichier?}', 'DevnotesController@index')->name('devnotes');
Route::get('backoffice', 'BackofficeController@index')->name('backoffice');
Route::get('backoffice/user.list', 'BackofficeController@user_list')->name('user.list');


Auth::routes(['verify' => true]);

// ============================================================================
// Infyom
// ============================================================================

Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');


Route::resource('cars', 'CarController');


Route::resource('commandes', 'CommandeController');
