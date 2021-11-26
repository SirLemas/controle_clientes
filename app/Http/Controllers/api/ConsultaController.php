<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ConsultaController extends Controller
{
    public function consulta($numero){
        return Cliente::where('placa_carro', 'like', "______$numero")->get();
    }
}
