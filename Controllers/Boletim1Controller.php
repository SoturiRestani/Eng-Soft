<?php

namespace App\Http\Controllers;

use App\Boletim1;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Boletim1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Boletim1=Boletim1::all();
        //dd($Users1);

        return view('Boletim1.index', compact('Boletim1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipodeusuario != 'Professor')
        {
            return redirect()->route('index_boletim');
        }
        return view('Boletim1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->tipodeusuario == 'Professor')
        {
            return redirect()->route('index_boletim');
        }
        //dd($request->all());
        Boletim1::create($request->all());
        return redirect()->route('boletim1.index');
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
        if(Auth::user()->tipodeusuario != 'Professor')
        {
            return redirect()->route('index_boletim');
        }
        $boletim1=Boletim1::find($id);
        return view('Boletim1.edit', compact('boletim1'));
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
        if(Auth::user()->tipodeusuario != 'Professor')
        {
            return redirect()->route('index_boletim');
        }
        $boletim1=Boletim1::find($id);
        $boletim1->fill($request->all());
        $boletim1->save();
        return redirect()->route('boletim1.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->tipodeusuario != 'Professor')
        {
            return redirect()->route('index_boletim');
        }
        Boletim1::destroy($id);
        return redirect()->route('boletim1.index');
    }
}
