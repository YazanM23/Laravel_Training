<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\ViewMatchesController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});

Route::get('/posts', [PostsController::class,'index'])->name('posts.index');
Route::get('/posts/{post}', [PostsController::class,'show'])->name('posts.show');


Route::get('/index',[ViewMatchesController::class, 'getLastMatch'])->name('index') ; 

Route::view('/matches','pages.matches')->name('matches');
Route::view('/players','pages.players')->name('players');
Route::view('/blog','pages.blog')->name('blog');
Route::view('/contact','pages.contact')->name('contact') ;
Route::view('/signin','pages.signin')->name('signin') ;
Route::view('/signup','pages.signup')->name('signup') ; 

Route::view('/trainerForm','pages.trainerForm');
Route::view('/playerForm','pages.playerForm');
Route::post('/posts', [PostsController::class,'posts'])->name('posts.show');


Route::post('/login', [LoginController::class, 'login'])->name('pages.login');
// Route::get('/player', function () {
//     return view('pages.player');
// })->name('pages.player');

Route::get('/player', [PlayerController::class, 'playerInformation'])->name('pages.player');
Route::get('/signout',[SignOutController::class, 'logout'])->name('pages.signout') ; 

Route::get('/trainer', function () {
    return view('pages.trainer');
})->name('pages.trainer');
Route::get('/table',[TableController::class, 'getPlayers'])->name('pages.table') ; 
Route::put('/table/{username}', [TableController::class, 'updatePlayer'])->name('pages.update');
Route::delete('/table/{username}', [TableController::class, 'deletePlayer'])->name('pages.delete');
Route::post('/table', [TableController::class, 'insertPlayer'])->name('pages.store');
Route::post('/signup/player', [SignUpController::class, 'signupPlayer'])->name('pages.signupPlayer');
Route::post('/signup/trainer', [SignUpController::class, 'signupTrainer'])->name('pages.signupTrainer');

Route::get('/createMatch',[MatchesController::class, 'getPlayers'])->name('pages.createMatch') ; 
Route::post('/createMatch',[MatchesController::class, 'createMatch'])->name('pages.createMatch') ; 
Route::get('/matches',[ViewMatchesController::class, 'getMatches'])->name('matches') ; 
