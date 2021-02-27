<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function transacoes()
    {
        return $this->belongsToMany(Transacao::class);
    }
}
