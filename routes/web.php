<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastrar', 'CadastrarController@cadastrarUser');

Route::get('/meubemvindo', 'MeuBemVindoController@dizerBemvindo');

Route::get('/index','MeuBemVindoController@bemvindoPersonalizado');


?>