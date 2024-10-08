<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function logout(){
          // Clear the session
          session()->flush();


    // Redirect to login page
    return view('pages.signin');
    }
    //
}
