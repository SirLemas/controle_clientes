<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if(empty($req->cliente)){
            return response()->json('Cliente nao enviado, por favor verificar dados', 400);
        }

        $cliente = Cliente::where(['cpf' => $req->cliente['cpf']])->first();

        if(!empty($cliente)){
            return response()->json('Cliente ja esta cadastrado no sistema', 409);
        }

        Cliente::create($req->cliente);
        return response()->json('Cliente cadastrado com sucesso', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente =  Cliente::where(['id' => $id])->first();

        if(empty($cliente)){
            return response()->json('Cliente nao encontrado!', 404);
        }

        return response()->json($cliente, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $cliente = Cliente::where(['id' => $id])->first();

        if(empty($cliente)){
            return response()->json('Cliente nao encontrado', 404);
        }

        $cliente->nome = $req->cliente['nome'];
        $cliente->telefone = $req->cliente['telefone'];
        $cliente->cpf = $req->cliente['cpf'];
        $cliente->placa_carro = $req->cliente['placa_carro'];
        $cliente->save();

        return response()->json('Cliente atualizado com sucesso!', 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::where(['id' => $id])->first();

        if(empty($cliente)){
            return response()->json('Cliente nao encontrado', 404);
        }

        $cliente->delete();
        return response()->json('Cliente deletado com sucesso', 200);
    }
}
