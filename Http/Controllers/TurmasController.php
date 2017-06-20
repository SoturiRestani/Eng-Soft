<?php

namespace App\Http\Controllers;

use App\Turmas;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Turmas=Turmas::all();
        //dd($Users1);

        return view('Turmas.index', compact('Turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipodeusuario == 'Aluno')
        {
            return redirect()->route('index_usuario');
        }
        return view('Turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->tipodeusuario == 'Aluno')
        {
            return redirect()->route('index_usuario');
        }
        //dd($request->all());
        Turmas::create($request->all());
        return redirect()->route('turmas.index');
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
        if(Auth::user()->tipodeusuario == 'Aluno')
        {
            return redirect()->route('index_usuario');
        }
        $turmaso=Turmas::find($id);
        return view('Turmas.edit', compact('turmas'));
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
        if(Auth::user()->tipodeusuario == 'Aluno')
        {
            return redirect()->route('index_usuario');
        }
        $turmas=Turmas::find($id);
        $turmas->fill($request->all());
        $turmas->save();
        return redirect()->route('index_turmas');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->tipodeusuario == 'Aluno')
        {
            return redirect()->route('index_usuario');
        }
        Turmas::destroy($id);
        return redirect()->route('index_turmas');
    }
}
