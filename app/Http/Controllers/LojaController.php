<?php

namespace App\Http\Controllers;

use App\Models\Avalicao;

class LojaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->class = Avalicao::class;
    }

    //
}
