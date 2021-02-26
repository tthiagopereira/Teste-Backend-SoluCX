<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->class = Colaborador::class;
    }

}
