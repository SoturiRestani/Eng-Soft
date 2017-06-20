<?php

namespace App\Http\Controllers;

use App\User1;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class User1Controller extends Controller
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
            return redirect()->route('index_discente');
        }
        if(Auth::user()->tipodeusuario == 'Professor')
        {
            return redirect()->route('index_professor');
        }
        $Users1=User1::all();
        //dd($Users1);

        return view('Users1.index', compact('Users1'));
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
            return redirect()->route('index_boletim');
        }
        return view('Users1.create');
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
            return redirect()->route('index_boletim');
        }
        //dd($request->all());
        User1::create([
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
            'tipodeusuario'=>$request->tipodeusuario,

        ]);
        return redirect()->route('index_usuario');
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
            return redirect()->route('index_boletim');
        }
        $user1=User1::find($id);
        return view('Users1.edit', compact('user1'));
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
            return redirect()->route('index_boletim');
        }
        $user1=User1::find($id);
        $user1->fill($request->all());
        $user1->save();
        return redirect()->route('index_usuario');


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
            return redirect()->route('index_boletim');
        }

        User1::destroy($id);
        return redirect()->route('index_usuario');
    }
}
