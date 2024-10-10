<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Trainer;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    function signupPlayer(Request $request){
        $player=Players::where('username',$request->input('username'));
        if(!$player){
            return back()->with('error','Username already exists');
        }
     $checkTrainer=Trainer::where('username',$request->input('username'));
     if(!$checkTrainer){
         return back()->with('error','Username already exists');
     }
     
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
        return redirect()->route('signin')->with('success', 'Player account created successfully.');

    }
    function signupTrainer(Request $request){
       
    $player=Players::where('username',$request->input('username'));
   @dd($player);
    if(!$player){

        return back()->with('error','Username already exists');
    }

 $checkTrainer=Trainer::where('username',$request->input('username'));
 if(!$checkTrainer){
     return back()->with('error','Username already exists');
 }
 


  $trainer = new Trainer;
        $trainer->username = $request->input('user');
        $trainer->FirstName = $request->input('fname');
        $trainer->LastName = $request->input('lname');
        $trainer->Email = $request->input('email');
        $trainer->Password = $request->input('password');
        $trainer->Team=$request->input('team');
        $trainer->save();


        return redirect()->route('signin')->with('success', 'Player account created successfully.');


    }
 
}
