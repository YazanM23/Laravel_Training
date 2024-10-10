<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function logout(){
        
          session()->flush();
          
    return to_route('signin');
    }
    
}
