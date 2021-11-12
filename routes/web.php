<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastrar', 'CadastrarController@cadastrarUser');
Route::post('/criar','CadastrarController@criarUser');






// rotas teste
// Route::get('/meubemvindo', 'MeuBemVindoController@dizerBemvindo');
// Route::get('/index','MeuBemVindoController@bemvindoPersonalizado');


?>