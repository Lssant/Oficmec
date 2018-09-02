<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CadastroCliente;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clis = CadastroCliente::all();
        return view('cliente.clientes', compact('clis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.cadcliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validação modificando a msg
        $regras = [
        'nome' => 'required|min:3|max:20|unique:cadastro_clientes',
        'endereco' => 'required',
        'RG' => 'required',
        'cpf' => 'required'
        ];
        $mensagens = [
           'nome.required' => 'O nome é requerido',
           'nome.min' => 'o minimo é 3 caracteres' 
        ];
        $request->validate($regras, $mensagens);

    /*
        $request->validate([
            // validação separando cada parametro com pipe min max caracteres e unico na tabela x
            'nome' => 'required|min:3|max:20|unique:cadastro_clientes',
            'endereco' => 'required',
            'RG' => 'required',
            'cpf' => 'required'

        ]);
    */
        $cliente = new CadastroCliente();
        $cliente->nome = $request->input('nomeCliente');
        $cliente->endereco = $request->input('endCliente');
        $cliente->RG = $request->input('RGCliente');
        $cliente->cpf = $request->input('cpfCliente');
        $cliente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cli = CadastroCliente::find($id);
        if(isset($cli)){
            return view('cliente.editarcliente', compact('cli'));
        }
        return redirect('/clientes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cli = CadastroCliente::find($id);
        if(isset($cli)){
            // input('nomeCliente') é o name do input do form
            $cli->nome = $request->input('nomeCliente');
            $cli->endereco = $request->input('endCliente');
            $cli->RG = $request->input('RGCliente');
            $cli->cpf = $request->input('cpfCliente');
            $cli->save();
        }
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cli = CadastroCliente::find($id);
        if(isset($cli)) {
            $cli->delete();
        }
        return redirect('/clientes');
    }
}
