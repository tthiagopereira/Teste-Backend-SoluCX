<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Colaborador;
use App\Models\Loja;
use App\Models\Transacao;
use Illuminate\Http\Request;

class TransacaoController extends Controller
{

    public function __construct()
    {
        $this->class = Transacao::class;
    }

    public function store(Request $request)
    {
        $register = Cliente::find($request->cliente_id);
        if(is_null($register)){
            return response()->json(['message'=>'Cliente não existe']);
        }
        $register = Loja::find($request->loja_id);
        if(is_null($register)) {
            return response()->json(['message' => 'Loja não existe']);
        }
        $register = Colaborador::find($request->colaborador_id);
        if(is_null($register)) {
            return response()->json(['message' => 'Colaborador não existe']);
        }
        $this->validate($request, [
            'data' => 'date',
            'valor'=> 'numeric|min:1|',
        ]);
        return response()->json(Transacao::create($request->All()));
    }

    public function update(Request $request, $id)
    {
        $register = Cliente::find($request->cliente_id);
        if(is_null($register)){
            return response()->json(['message'=>'Cliente não existe']);
        }
        $register = Loja::find($request->loja_id);
        if(is_null($register)) {
            return response()->json(['message' => 'Loja não existe']);
        }
        $register = Colaborador::find($request->colaborador_id);
        if(is_null($register)) {
            return response()->json(['message' => 'Colaborador não existe']);
        }
        $this->validate($request, [
            'data' => 'date',
            'valor'=> 'numeric|min:1|',
        ]);
        $register = Transacao::find($id);
        if (is_null($register)) {
            return response()->json(['message' => 'Registros não existe']);
        }
        $register->fill($request->All());
        $register->update();
        return response()->json($register);
    }
}
