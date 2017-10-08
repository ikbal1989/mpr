<?php

Route::group(['middleware' => 'web', 'prefix' => 'administrator', 'namespace' => 'Modules\Administrator\Http\Controllers'], function()
{
    Route::get('/', 'AdministratorController@index');
});
