<?php

namespace App\Http\Controllers;

use App\Intervalo;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IntervaloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Intervalo=Intervalo::all();
        //dd($Users1);

        return view('Intervalo.index', compact('Intervalo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipodeusuario != 'Diretor')
        {
            return redirect()->route('index_usuario');
        }
        return view('cadastrar_intervalo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->tipodeusuario != 'Diretor')
        {
            return redirect()->route('index_usuario');
        }
        //dd($request->all());
        Intervalo::create($request->all());
        return redirect()->route('index_intervalo');
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
        if(Auth::user()->tipodeusuario != 'Diretor')
        {
            return redirect()->route('index_usuario');
        }
        $intervalo=Intervalo::find($id);
        return view('Intervalo.edit', compact('intervalo'));
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
        if(Auth::user()->tipodeusuario != 'Diretor')
        {
            return redirect()->route('index_usuario');
        }
        $intervalo=Intervalo::find($id);
        $intervalo->fill($request->all());
        $intervalo->save();
        return redirect()->route('index_intervalo');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->tipodeusuario != 'Diretor')
        {
            return redirect()->route('index_usuario');
        }
        Intervalo::destroy($id);
        return redirect()->route('index_intervalo');
    }
}
