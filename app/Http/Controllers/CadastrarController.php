<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class CadastrarController extends Controller
{


    public function cadastrarUser()
    {
        $nome = 'Formulário de cadastro';
        
        return view('cadastro', [
            'nome' => $nome
        ]);
    }

  

}


?>