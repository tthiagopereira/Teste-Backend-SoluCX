<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Avalicao;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function __construct()
    {
        $this->class = Cliente::class;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required|email|unique:clientes',
            'telefone' => 'required',
            'cpf' => 'required|unique:clientes'
        ]);

        return response()->json(Cliente::create($request->all()));

    }

}
