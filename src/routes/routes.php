<?php

Route::group(['prefix' => 'opd','middleware' => ['web']], function() {    

    Route::get('', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@index')->name('opd.index');
    Route::get('create-root', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@createRoot')->name('opd.create.root');
    
    Route::post('create-root', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@storeRoot')->name('opd.store.root');
    Route::post('create-child', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@storeChild')->name('opd.store.child');
    Route::get('add-child/{id}', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@addChild')->name('opd.add.child');
    Route::get('{id}/edit', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@edit')->name('opd.edit');
    Route::put('{id}/update', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@update')->name('opd.update');
});
