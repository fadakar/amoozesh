<?php


namespace App\Utilties;
use Illuminate\Support\Facades\Route;

class Router
{
    public static function crud($uri,$controller)
    {
        Route::get("{$uri}","{$controller}@index");
        Route::get("{$uri}/create","{$controller}@create");
        Route::post("{$uri}/create","{$controller}@store");
        Route::get("{$uri}/{id}/edit","{$controller}@edit");
        Route::post("{$uri}/{id}/edit","{$controller}@update");
        Route::get("{$uri}/{id}/delete" ,"{$controller}@destroy");
    }
}
