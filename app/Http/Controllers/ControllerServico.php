<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Servico;
use App\Veiculo;
use App\Pessoa;
use App\Peca;

class ControllerServico extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serv = Servico::with('veiculo','pessoa','peca')->get();
        //$serv = Servico::where('id','=',1)->get();
        return view('servicos.servicos', compact('serv'));
    }

    public function buscar(Request $request)
    {
        
        $id = $request->serv;

        $serv = Servico::where('id','=',"{$id}")->get();
        //$serv = Servico::where('diagnostico','like',"%{$diag}%")->get();

        return view('servicos.buscas', compact('serv'));

        //$serv = Servico::where('id','=',"%{$busca}%")->get();
        //return view('servicos.servicos');
        //return redirect('/servicos/buscas',compact('serv'));
        
    }
    public function buscas(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $idCli = $request->idCli;
        $idVeic = $request->idVeic;

        $cliente = Pessoa::with('veiculo')->where('id','=',"{$idCli}")->first();
        
        
        foreach($cliente->veiculo as $v)
            if ($v->id == $idVeic)
                $veiculo = $v;
        //return $veiculo."<BR>".$cliente;


        return view('servicos.cad_servico',compact('cliente','veiculo'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = new Servico();

        $servico->diagnostico = $request->input('diagnostico');
        $servico->descricao = $request->input('descricao');
        $servico->mao_obra = $request->input('maoObra');
        $servico->forma_pgto = $request->input('formaPagamento');
        $servico->total = $request->input('total');
        $servico->pago = $request->input('pago');
        $servico->veiculo_id = $request->input('idVeic');
        $servico->save();

        $servico->pessoa()->attach($request->cliId);

       
        //return $servico->id."  <- id do serviço ";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $servico = Servico::with('pessoa','veiculo','peca')->where('id','=',"{$id}")->first();

        //com mais de uma pessoa no servico vai dar erro aki
        foreach($servico->pessoa as $c)
            $cliente = $c;
    
        foreach($servico->peca as $p)
            $pecas = $p;

            $veiculo = $servico->veiculo;
        
            //return $cliente.'<BR>'.$veiculo.'<BR>'.$pecas;
            
        //return $servico;
        
        return view ('servicos.mostrar_servico', compact('servico','cliente','veiculo','pecas'));
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
