<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::group(['namespace'=>'App\Http\Controllers'],function (){
    Route::get('/{any?}','IndexController')->where('any','.*');
});





