<?php

namespace App\Http\Controllers;

use App\Models\Avalicao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{

    public function __construct()
    {
        $this->class = Avalicao::class;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nota' => 'min:1|max:10|numeric'
        ]);
        Avalicao::create($request->all());
        return response()->json(Avalicao::all());
    }

}
