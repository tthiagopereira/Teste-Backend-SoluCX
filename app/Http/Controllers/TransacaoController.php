<?php

namespace App\Http\Controllers;

use App\Models\Transacao;

class TransacaoController extends Controller
{

    public function __construct()
    {
        $this->class = Transacao::class;
    }

}
