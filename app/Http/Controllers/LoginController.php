<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Trainer;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function login()
    {
     session_start();
      //select * from players where username = username and password = password
      //you need to use first() to excute query
       $username=request()->user;
  $password=request()->password;

      $player=Players::where('username',$username)->where('Password',$password)->first();
      $trainer=Trainer::where('username',$username)->where('Password',$password)->first();

// // @dd($username);
    
    
        if ($player) {
          
          
            Session::put('name', $player->username);
            Session::put('user_type', 'player');
           return to_route('pages.player');
        } elseif ($trainer) {
            
       
            Session::put('name', $trainer->username);
            Session::put('user_type', 'trainer');
            return  to_route('pages.trainer');
        } else {
    
            return view('pages.signin');
        }
  
        
    }
}
