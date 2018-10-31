<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Peca;

class ControllerPeca extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pec = Peca::all();
        return view('pecas/pecas',compact('pec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pecas.cad_pecas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pec = new Peca();

        $pec->nome = $request->input('nomePeca');
        $pec->descricao = $request->input('descriPeca');
        $pec->quantidade = $request->input('quantPeca');
        $pec->valor = $request->input('valPeca');

        $pec->save();

        return redirect('/pecas');

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
        $pec = Peca::find($id);
        
        if (isset($pec)){
            return view('pecas.edit_pecas',compact('pec'));
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
        $pec = Peca::find($id);

        if (isset($pec)){
            $pec->nome = $request->input('nomePeca');
            $pec->descricao = $request->input('descriPeca');
            $pec->quantidade = $request->input('quantPeca');
            $pec->valor = $request->input('valPeca');
    
            $pec->save();
           
            return redirect('/pecas');    
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
        $pec = Peca::find($id);

        if (isset($pec)){
            $pec->delete();
        }
        return redirect('/pecas');
    }
}
