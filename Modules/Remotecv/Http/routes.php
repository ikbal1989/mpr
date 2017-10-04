<?php

Route::group(['middleware' => 'web', 'prefix' => 'remotecv', 'namespace' => 'Modules\Remotecv\Http\Controllers'], function()
{
    Route::get('/', 'RemotecvController@index');
    Route::get('blogs', 'RemotecvController@blogs');
    Route::get('resume', 'RemotecvController@resume');
    Route::get('portfolio', 'RemotecvController@portfolio');
    Route::get('contact', 'RemotecvController@contact');
});
