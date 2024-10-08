<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Trainer;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    function signupPlayer(Request $request){
    
        $player = new Players;
        $player->username = $request->input('user');
        $player->FirstName = $request->input('fname');
        $player->LastName = $request->input('lname');
        $player->Email = $request->input('email');
        $player->Length = $request->input('length');
        $player->Weight = $request->input('weight');
        $player->Password = $request->input('password');
        $player->Team=$request->input('team');
        $player->save();
    return view('pages.signin');


    }
    function signupTrainer(Request $request){
    
        $trainer = new Trainer;
        $trainer->username = $request->input('user');
        $trainer->FirstName = $request->input('fname');
        $trainer->LastName = $request->input('lname');
        $trainer->Email = $request->input('email');
        $trainer->Password = $request->input('password');
        $trainer->Team=$request->input('team');
        $trainer->save();
    return view('pages.signin');


    }
 
}
