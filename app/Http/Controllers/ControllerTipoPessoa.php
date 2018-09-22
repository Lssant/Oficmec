<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoPessoa;

class ControllerTipoPessoa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpPessoa = TipoPessoa::all();
        return view('tipoPessoa.tipopessoas', compact('tpPessoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoPessoa.cad_tipo_pessoa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoPessoa = new TipoPessoa();
        $tipoPessoa ->nome = $request->input('tipoPessoa');// no input é da view
        $tipoPessoa->save();
        
        return redirect('/tipopessoa');

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
        $tpes = TipoPessoa::find($id);
        if(isset($tpes)){
            return view('tipoPessoa.edit_tipo_pessoa', compact('tpes'));
        }
        return redirect('/tipopessoa');
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
        $tpes =TipoPessoa::find($id);
        if(isset($tpes)){
            // input('nomeCliente') é o name do input do form
            $tpes->nome = $request->input('tipoPessoa');
            $tpes->save();
        }
        return redirect('/tipopessoa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpes = TipoPessoa::find($id);
        if(isset($tpes)){
            $tpes->delete();
        }
        return redirect('/tipopessoa');
    }
}
