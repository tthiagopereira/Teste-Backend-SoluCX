<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'email','telefone','cpf'
    ];

    public function transacoes()
    {
        return $this->belongsToMany(Transacao::class);
    }
}
