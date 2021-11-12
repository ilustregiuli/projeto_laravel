<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{


    public function cadastrarUser()
    {   
        return view('cadastro');

    }

    public function criarUser()
    {
        redirect('/');

    }

  

}


?>