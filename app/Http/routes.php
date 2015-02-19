<?php

\Press::SetRoutes();

Route::controllers([
	'auth' => 'App\Http\Controllers\Auth\AuthController',
	'password' => 'App\Http\Controllers\Auth\PasswordController',
]);

\Press::listRoute('tag/{tag}', 'tag|sort', ['as' => 'press.tag']);
\Press::listRoute('/', 'all|sort:date,desc', ['as' => 'press.home']);
