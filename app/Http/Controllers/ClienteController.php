<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Loja;

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
