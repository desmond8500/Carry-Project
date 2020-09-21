<?php

Route::get('/', function () {
    return view('welcome');
})->name('index');


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
