<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Matches;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //

   public function playerInformation(){
    $username=session("name");
    $data=Players::where('username',$username)->first();

    $match = Matches::
     select('idTeam1', 'idTeam2', 'date')
    ->where(function($query) use ($username) {
        $query->where('idTeam1', function($subQuery) use ($username) {
            $subQuery->select('idTeam')
                     ->from('team__players')
                     ->where('usernamePlayer', $username)
                     ->orderByDesc('id')
                     ->limit(1);
        })
        ->orWhere('idTeam2', function($subQuery) use ($username) {
            $subQuery->select('idTeam')
                     ->from('team__players')
                     ->where('usernamePlayer', $username)
                     ->orderByDesc('id')
                     ->limit(1);
        });
    })
    ->first();
    $team1=" - ";
    $team2=" - ";
    $date=" - ";
if($match){
   

    $team1=Team::select("Name")->
    where("id",$match->idTeam1)->first();
    $team2=Team::where("id",$match->idTeam2)->first();
$date=$match->date;
}else{
$team1=['Name'=>' '];
$team2=['Name'=>' '];
}

    return view('pages.player',['data'=>$data,'team1'=>$team1,'team2'=>$team2,'date'=>$date]);
   }
}
