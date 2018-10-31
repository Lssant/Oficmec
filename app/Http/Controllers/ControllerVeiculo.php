<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Veiculo;

class ControllerVeiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veic = Veiculo::with('pessoa')->get();
        return view('veiculos.veiculos', compact('veic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculos.cad_veiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veic = new Veiculo();

        $veic->modelo = $request->input('modeloVeic'); 
        $veic->marca = $request->input('marcaVeic'); 
        $veic->cor = $request->input('corVeic'); 
        $veic->ano = $request->input('anoVeic'); 
        $veic->combustivel = $request->input('combustivelVeic'); 
        $veic->placa = $request->input('placaVeic'); 
        $veic->pessoa_id = $request->input('cliVeic'); 

        $veic->save();

        return redirect('/veiculos');

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
        $veic = Veiculo::find($id);

        if(isset($veic)){
            return view('veiculos.edit_veiculo',compact('veic'));
        }
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
        $veic = Veiculo::find($id);

        if (isset($veic)){
            $veic->modelo = $request->input('modeloVeic'); 
            $veic->marca = $request->input('marcaVeic'); 
            $veic->cor = $request->input('corVeic'); 
            $veic->ano = $request->input('anoVeic'); 
            $veic->combustivel = $request->input('combustivelVeic'); 
            $veic->placa = $request->input('placaVeic'); 
            $veic->pessoa_id = $request->input('cliVeic');

            $veic->save();

            return redirect('/veiculos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veic = Veiculo::find($id);

        if (isset($veic)){
            $veic->delete();
        }
        return redirect('/veiculos');

    }
}
