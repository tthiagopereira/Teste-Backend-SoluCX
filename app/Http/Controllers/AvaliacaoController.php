<?php

namespace App\Http\Controllers;

use App\Models\Avalicao;

class AvaliacaoController extends Controller
{

    public function __construct()
    {
        $this->class = Avalicao::class;
    }

}
