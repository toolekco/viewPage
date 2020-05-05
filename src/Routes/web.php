<?php

use Illuminate\Support\Facades\Route;

$namespace = "Toolek\ViewPage\Controllers";
Route::group( ['namespace' => $namespace ] , function (){
    Route::get('/view-page' , 'ViewPageController@index');
});
