<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoTelefone;

class ControllerTipoTelefone extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpTel = TipoTelefone::all();
        return view('tipoTelefone.tipotelefone', compact('tpTel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoTelefone.cad_tipo_telefone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tpTel = new TipoTelefone();
        $tpTel ->nome = $request->input('tipoTelefone');
        $tpTel->save();

        return redirect('/tipotelefone');
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
        $tpTel = TipoTelefone::find($id);
        if (isset($tpTel)) {
            return view('tipoTelefone.edit_tipo_telefone',compact('tpTel'));
        }
        return redirect('/tipotelefone');
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
        $tpTel = TipoTelefone::find($id);
        if (isset($tpTel)) {
            $tpTel->nome = $request->input('tipotelefone');
            $tpTel->save();
        }
        return redirect('/tipotelefone');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpTel = TipoTelefone::find($id);
        if (isset($tpTel)) {
            $tpTel->delete();
        }
        return redirect('/tipotelefone');
    }
}
