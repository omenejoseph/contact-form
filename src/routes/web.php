<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

Route::group(['namespace' => 'Omenejoseph\Contact\Http\Controllers'], function(){
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});
