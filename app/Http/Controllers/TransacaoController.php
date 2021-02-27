<?php

namespace App\Http\Controllers;

use App\Models\Avalicao;

class TransacaoController extends Controller
{

    public function __construct()
    {
        $this->class = Avalicao::class;
    }

}
