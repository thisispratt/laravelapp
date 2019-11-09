<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ATGmessage;

class ATGController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,['name' => 'required',
        'location' => 'required'
        ]);

        //creating a message var
        $atgmessage = new ATGmessage;

        $atgmessage->name = $request-> input('name');
        $atgmessage->location = $request-> input('location');

        //save message
         $atgmessage-> save();

         //redirect
          return redirect('/')->with('success','Data submitted');
        
         
    }

    public function gethome(){
        return view('home');
    }
    public function getform(){
        return view('form');
    }

}
