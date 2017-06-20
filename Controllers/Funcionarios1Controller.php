<?php

namespace App\Http\Controllers;

use App\Funcionarios1;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Funcionarios1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->tipodeusuario == 'Aluno')
        {
            return redirect()->route('index_usuario');
        }
        $Funcionarios1=Funcionarios1::all();
        //dd($Users1);

        return view('Funcionarios1.index', compact('Funcionarios1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Funcionarios1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Funcionarios1::create($request->all());
        return redirect()->route('funcionarios1.index');
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
        $funcionarios1=Funcionarios1::find($id);
        return view('Funcionarios1.edit', compact('funcionarios1'));
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
        $funcionarios1=Funcionarios1::find($id);
        $funcionarios1->fill($request->all());
        $funcionarios1->save();
        return redirect()->route('funcionarios1.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Funcionarios1::destroy($id);
        return redirect()->route('funcionarios1.index');
    }
}
