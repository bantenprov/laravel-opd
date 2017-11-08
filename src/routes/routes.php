<?php

Route::group(['prefix' => 'laravel-opd'], function() {
    Route::get('demo', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@demo');


    Route::get('', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@index');
    Route::get('create-root', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@createRoot');
    Route::get('create-child', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@createChild');
    
    Route::post('create-root', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@storeRoot')->name('storeRoot');
    Route::post('create-child', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@storeChild')->name('storeChild');
    Route::get('add-child/{id}', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@addChild')->name('addChild');
});
