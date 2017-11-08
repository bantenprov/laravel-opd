<?php

Route::group(['prefix' => 'laravel-opd'], function() {
    Route::get('demo', 'Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@demo');
});
