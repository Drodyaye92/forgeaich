<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomController extends Controller
{
    public function addition (Request $request){
        //$_request->select nombre1 FROM sommes ->($numb1);
       // $_request->select FROM sommes (nombre2)->($numb2);
        $numb1=$request->input('number1');
        $numb2=$request->input('number2');
        $numb3= $numb1 + $numb2;
       // return redirect()->route('/',['numb3'=>$numb3]);
       
       return view('login',['result'=>$numb3]); //->with($numb3);

    }
    public function index(){
        return view('index');
    }
    
}
