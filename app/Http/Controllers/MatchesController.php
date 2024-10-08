<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Matches;
use App\Models\Trainer;
use App\Models\Team;
use App\Models\Team_Players;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    //
    public function getPlayers()
    {
     
        $username = session("name");

      
        $trainerTeam = Trainer::select('Team')->where('username', $username)->first();

     
        if ($trainerTeam) {
         
            $players = Players::where('Team', $trainerTeam['Team'])->get();
        } else {

            $players = collect(); 
        }


        return view('pages.create_matches', ['players' => $players]);
    }


    function createMatch(Request $request){
        $team1_name=$request->input('team1_name');
        $team2_name=$request->input('team2_name');
        $team1_result=$request->input('team1_result');
        $team2_result=$request->input('team2_result');
        $team1_players=$request->input('team1_players');
        $team2_players=$request->input('team2_players');
        $date=$request->input('match_date');
        if (array_intersect($team1_players, $team2_players)) {
            return view('pages.createMatch');

        }

        $team1 = new Team();
        $team1->name = $team1_name;
        $team1->save();
        $team1_id = $team1->id;

        $team2 = new Team();
        $team2->name = $team2_name;
        $team2->save();
        $team2_id = $team2->id;

        $match = new Matches();
        $match->idTeam1 = $team1_id;
        $match->idTeam2 = $team2_id;
        $match->Date = $date;
        $match->Team1Res = $team1_result;
        $match->Team2Res = $team2_result;
$done='no';
        if($team1_result !== null && $team2_result !== null){
            $done='yes';
        }
$match->done=$done;
$match->save();

foreach($team1_players as $team1_player){

$player=new Team_Players();
$player->idTeam=$team1_id;
$player->usernamePlayer=$team1_player;
$player->save();
}
foreach($team2_players as $team2_player){

    $player=new Team_Players();
    $player->idTeam=$team2_id;
    $player->usernamePlayer=$team2_player;
    $player->save();
    }
    return to_route('matches');
    }



    
}
