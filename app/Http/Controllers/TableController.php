<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function getPlayers()
    {
     
        $username = session("name");

      
        $trainerTeam = Trainer::select('Team')->where('username', $username)->first();

     
        if ($trainerTeam) {
         
            $players = Players::where('Team', $trainerTeam['Team'])->get();
        } else {

            $players = collect(); 
        }


        return view('pages.table', ['players' => $players]);
    }

    public function deletePlayer($username)
    {
        $player = Players::where('username', $username)->firstOrFail();

        $player->delete();

        return to_route('pages.table');
    }


    public function updatePlayer(Request $request, $username)
    {
     
        $player = Players::where('username', $username)->firstOrFail();

        $player->FirstName = $request->input('FirstName');
        $player->LastName = $request->input('LastName');
        $player->Email = $request->input('Email');
        $player->Length = $request->input('Length');
        $player->Weight = $request->input('Weight');

    
        $player->save();

   
 
        return to_route('pages.table');
    }

    function insertPlayer(Request $request){
        $username = session("name");
    $player = new Players;
    $player->username = $request->input('username');
    $player->FirstName = $request->input('FirstName');
    $player->LastName = $request->input('LastName');
    $player->Email = $request->input('Email');
    $player->Length = $request->input('Length');
    $player->Weight = $request->input('Weight');
    $player->Password = $request->input('password');

      $trainerTeam = Trainer::select('Team')->where('username', $username)->first();
      $player->Team =$trainerTeam->Team;

    // Save the new player to the database
    $player->save();
    return to_route('pages.table');

    }
}
