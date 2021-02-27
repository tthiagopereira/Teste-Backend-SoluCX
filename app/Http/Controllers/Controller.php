<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Avalicao;
use App\Models\Colaborador;
use App\Models\Loja;
use App\Models\Transacao;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    protected $class;

    public function index() {
        return $this->class::all();
    }

    public function show($id) {
        $register = $this->class::find($id);
        if(is_null($register)) {
            return response()->json('',204);
        }
        return response()->json($register, 201);
    }

    public function store(Request $request) {

        if($this->class ==  Cliente::class){
            $this->validate($request, [
                'nome' => 'required',
                'email' => 'required|email|unique:clientes',
                'telefone' => 'required',
                'cpf' => 'required|unique:clientes'
            ]);
        }

        if($this->class == Transacao::class) {
            $this->validate($request, [
                'data' => 'date',
                'valor'=> 'numeric|min:1|',
            ]);
        }

        return response()->json($this->class::create($request->all()), 201);
    }

    public function update(Request $request, $id) {

        if($this->class ==  Cliente::class){

            $this->validate($request, [
                'nome' => 'required',
                'email' => 'required|email|unique:clientes',
                'telefone' => 'required',
                'cpf' => 'required|unique:clientes'
            ]);
        }

        if($this->class == Transacao::class) {
            $this->validate($request, [
                'data' => 'date',
                'valor'=> 'numeric|min:1|',
            ]);
        }


        $register = $this->class::find($id);
        if(!$register) {
            return response()->json(['erro'=>'Não existe'],404);
        }

        $register->fill($request->all());
        $register->save();
        return $register;
    }

    public function destroy(int $id) {
        $qtdRecursosRemovidos = $this->class::destroy($id);
        if($qtdRecursosRemovidos === 0 ){
            return response()->json(['erro'=> 'Registro não encontrado'], 404);
        }
        return response()->json('',204);
    }

}
