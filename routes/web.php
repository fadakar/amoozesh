<?php

use Illuminate\Support\Facades\Route;
use \App\Utilties\Router;

Router::crud('post','App\Http\Controllers\PostController');
Router::crud('category','App\Http\Controllers\CategoryController');
Router::crud('tag','App\Http\Controllers\TagController');
Router::crud('file','App\Http\Controllers\FileController');


