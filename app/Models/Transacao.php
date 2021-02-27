<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $table = 'transacoes';

    protected $fillable = [
        'cliente_id', 'loja_id', 'colaborador_id', 'data', 'valor'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class,'cliente_id');
    }

    public function lojas()
    {
        return $this->hasMany(Loja::class, 'loja_id');
    }

    public function colaboradores()
    {
        return $this->hasMany(Colaborador::class, 'colaborador_id');
    }
}
