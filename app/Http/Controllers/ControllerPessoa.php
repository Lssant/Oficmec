<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;
use App\TipoPessoa;
use App\TipoTelefone;
use App\Telefone;
use App\Endereco;

class ControllerPessoa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pes = Pessoa::all();
        $pes = Pessoa::with('telefone', 'endereco')->get();
        return view('pessoa.pessoa', compact('pes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tpTel = TipoTelefone::all();
        $tpPes = TipoPessoa::all();
        return view('pessoa.cad_pessoa', compact('tpPes','tpTel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pes = new Pessoa();
        //$pes Pessoa::with('telefone','endereco');
        $tel = new Telefone();
        $end = new Endereco();

        $pes->nome = $request->input('nomePessoa');
        $pes->tipo_pessoa_id = $request->input('tipoPessoa');
        $pes->cpf = $request->input('cpfPessoa');
        $pes->RG = $request->input('RGPessoa');
        $pes->email = $request->input('emailPessoa');
        $pes->status = $request->input('statusPessoa');
       
        $tel->numero = $request->input('numeroPessoa');
        $tel->tipo_telefone_id = $request->input('tipoTelPessoa');
        
        $end->logradouro = $request->input('logradouroPessoa');
        $end->numero = $request->input('numeroPessoa');
        $end->complemento = $request->input('complementoPessoa');
        $end->bairro = $request->input('bairroPessoa');
        $end->cep = $request->input('cepPessoa');
        $end->PtReferencia = $request->input('refPessoa');
        
        $pes->save();
        $pes->telefone()->save($tel);
        $pes->endereco()->save($end);
        return view('pessoa.pessoa');
        
        /*$pes = [$tel->numero ." - ". $tel->tipo_telefone_id." - ".
                $end->logradouro ." - ". $end->numero." - ".
                $end->complemento ." - ". $end->bairro." - ".
                $end->cep ." - ". $end->PtReferencia];
        return $pes;
        */
        //return $pes->toJson();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
