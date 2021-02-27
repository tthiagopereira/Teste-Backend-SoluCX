<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Avalicao extends Model
{
    protected $table = 'avaliacoes';

    protected $fillable = [
        'transacao_id', 'nota', 'comentario'
    ];

    public function transacoes()
    {
        return $this->hasMany(Transacao::class, 'transacao_id');
    }
}
