<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class MeuBemVindoController extends Controller
{


    public function bemvindoPersonalizado()
    {
        $nome = 'Giuli Ilustre';
        return view('bem_vindo', [
            'nomeGiuli' => $nome
        ]);
    }

    public function dizerBemvindo()
    {

        echo 'Olá, seja bem vindo!';
    }


}


?>