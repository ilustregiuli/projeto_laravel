<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meubemvindo', 'MeuBemVindoController@dizerBemvindo');

Route::get('/index','MeuBemVindoController@bemvindoPersonalizado');


