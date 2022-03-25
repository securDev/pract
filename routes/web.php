<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
   Route::add('GET', '/go', [Controller\Site::class, 'hello']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/countabonent', [Controller\Site::class, 'countAbonent']);
Route::add(['GET', 'POST'], '/addsubvision', [Controller\Site::class, 'addSubvision']);
Route::add('GET', '/addroom', [Controller\Site::class, 'addRoom']);
Route::add('GET', '/aboutabonent', [Controller\Site::class, 'aboutAbonent']);
