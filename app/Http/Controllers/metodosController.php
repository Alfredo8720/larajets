<?php

namespace App\Http\Controllers;

use App\Http\Requests\Jetstore;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Matematica;



class metodosController extends Controller
{

    public function registros(){
        return view('auth.register');
    }

    public function usuarios(){
        return view('usuarios');
    }

    public function dashboard(){
       $reg=Registro::paginate();
        //return $reg;
        return view('dashboard', compact('reg'));
    }

    public function matematicas(){
        return view('usuarios');
    }
    /** 
     *@param \Illuminate\Http\Request var $request
     *@return \Illuminate\Http\Response
    */
    public function store(Request $request){
    Matematica::create([
        'email'=> $request->Email,
        'm1' => $request->r1,
        'm2' => $request->r2,
        'm3' => $request->r3,
        'm4' => $request->r4,
        'm5' => $request->r5,
        'm6' => $request->r6,
        'm7' => $request->r7,
        'm8' => $request->r8,
        'm9' => $request->r9,
        'm10' => $request->r10,
        'm11' => $request->r11,
        'm12' => $request->r12,
        'm13' => $request->r13,
        'm14' => $request->r14,
        'm15' => $request->r15,
        'm16' => $request->r16,
        'm17' => $request->r17,
        'm18' => $request->r18,
        'm19' => $request->r19,
        'm20' => $request->r20,
        'm21' => $request->r21,
        'm22' => $request->r22,
        'm23' => $request->r23,
        'm24' => $request->r24,
        'm25' => $request->r25,
        'm26' => $request->r26,
        'm27' => $request->r27,
        'm28' => $request->r28,
        'm29' => $request->r29,
        'm30' => $request->r30,
    ]);
    //return redirect()->route('dashboard');
    }
}

