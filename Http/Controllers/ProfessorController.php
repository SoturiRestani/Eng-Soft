<?php

namespace App\Http\Controllers;

use App\Alunos1;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->tipodeusuario != 'Professor') {
            return redirect()->route('auth/login');
        }

        $Alunos1 = Alunos1::all();
        //dd($Users1);

        return view('pagprofessor.index', compact('Professor'));
   }};
