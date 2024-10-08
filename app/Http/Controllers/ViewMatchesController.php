<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Matches;
use App\Models\Trainer;
use App\Models\Team;
use App\Models\Team_Players;
use Illuminate\Http\Request;

class ViewMatchesController extends Controller
{
    //
    public function getMatches(){
        $match = Matches::where('done', 'yes')
        ->orderBy('date', 'desc')
        ->first();  
global $lastMatchNameTeam1;
global $lastMatchNameTeam2;
global $team1Res;
global $team2Res;
global $status;
global $status2;
global $nextMatchNameTeam1;
global $nextMatchNameTeam2;
global $dateNextMatch;
if ($match) {
   
$team1 = Team::where('id', $match->idTeam1)->first();
$lastMatchNameTeam1=($team1->Name);
$team2 = Team::where('id', $match->idTeam2)->first();
$lastMatchNameTeam2=($team2->Name);
$results=Matches::select('Team1Res','Team2Res')->orderBy('date','desc')->first();

         
$team1Res=$results->Team1Res;
$team2Res=$results->Team2Res;


$status="draw";
$status2="draw";
            if($team1Res>$team2Res){
              $status="win";
              $status2="lose";
            }
            else if($team1Res<$team2Res){
                $status="lose";
                $status2="win";
            }
            

        
       
    }
    
    $nextMatch = Matches::where('done', 'no')
    ->orderBy('date', 'desc')
    ->first();  

    if($nextMatch){
        $nextTeam1 = Team::where('id', $nextMatch->idTeam1)->first();
        $nextMatchNameTeam1=($nextTeam1->Name);
        $nextTeam2 = Team::where('id', $nextMatch->idTeam2)->first();
        $nextMatchNameTeam2=($nextTeam2->Name);        
$dateNextMatch=$nextMatch->date;
    }
    else{
        $dateNextMatch='-';
    }
    $prevMatches = Matches::where('done', 'yes')->get(); 
    $data = [];

    
    foreach ($prevMatches as $prevMatch) {
       
        $team1Prev = Team::where('id', $prevMatch->idTeam1)->first();
        $team2Prev = Team::where('id', $prevMatch->idTeam2)->first();

        $data[] = [
            'team1' => $team1Prev ? $team1Prev->Name : 'N/A',
            'team2' => $team2Prev ? $team2Prev->Name : 'N/A',
            'team1Res' => $prevMatch->Team1Res,
            'team2Res' => $prevMatch->Team2Res,
            'date' => $prevMatch->date,
        ];
    }
    $upcomingMatches = Matches::where('done', 'no')->get();
    $upComingData = [];

  
    foreach ($upcomingMatches as $upcomingMatch) {

        $upComingteam1 = Team::where('id', $upcomingMatch->idTeam1)->first();
        $upComingteam2 = Team::where('id', $upcomingMatch->idTeam2)->first();

        
        $upComingData[] = [
            'team1' => $upComingteam1 ? $upComingteam1->Name : 'N/A',
            'team2' => $upComingteam2 ? $upComingteam2->Name : 'N/A',
            'date' => $upcomingMatch->date,
        ];
    }

    return view('pages.matches',[
        'lastMatchNameTeam1'=>$lastMatchNameTeam1,
            'lastMatchNameTeam2'=>$lastMatchNameTeam2,
            'team1Res'=>$team1Res,
            'team2Res'=>$team2Res,
            'status'=>$status,
            'status2'=>$status2,
        'nextMatchTeam1Name'=>$nextMatchNameTeam1,
        'nextMatchTeam2Name'=>$nextMatchNameTeam2,
        'dateNextMatch'=>$dateNextMatch,
        'data'=>$data,
        'upComingData'=>$upComingData,
    ]);
}
public function getLastMatch(){
    $match = Matches::where('done', 'yes')
        ->orderBy('date', 'desc')
        ->first();  
global $lastMatchNameTeam1;
global $lastMatchNameTeam2;
global $team1Res;
global $team2Res;
global $status;
global $status2;
global $nextMatchNameTeam1;
global $nextMatchNameTeam2;
global $dateNextMatch;
if ($match) {
   
$team1 = Team::where('id', $match->idTeam1)->first();
$lastMatchNameTeam1=($team1->Name);
$team2 = Team::where('id', $match->idTeam2)->first();
$lastMatchNameTeam2=($team2->Name);
$results=Matches::select('Team1Res','Team2Res')->orderBy('date','desc')->first();

         
$team1Res=$results->Team1Res;
$team2Res=$results->Team2Res;


$status="draw";
$status2="draw";
            if($team1Res>$team2Res){
              $status="win";
              $status2="lose";
            }
            else if($team1Res<$team2Res){
                $status="lose";
                $status2="win";
            }
            

        
       
    }
    return view('pages.index',[
        'lastMatchNameTeam1'=>$lastMatchNameTeam1,
            'lastMatchNameTeam2'=>$lastMatchNameTeam2,
            'team1Res'=>$team1Res,
            'team2Res'=>$team2Res,
            'status'=>$status,
            'status2'=>$status2,
     
     
    ]);
}

 
}
