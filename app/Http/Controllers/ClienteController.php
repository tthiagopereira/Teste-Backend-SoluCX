<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Avalicao;

class ClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->class = Cliente::class;
    }
}
