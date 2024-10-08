@extends('layouts.navbar')
@section('middle')

<div class="hero overlay" style="background-image: url('../resources/images/bg_3.jpg');">
<section class="ftco-section" style="padding-top:8%;">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Create Match</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12" >
                <div class="table-wrap" >
                    <h1>Create Match</h1><br>
                    <form action="{{route('pages.createMatch')}}" method="POST">
                        @csrf
                        <label for="team1_name">Enter Team 1 Name:</label>
                        <input type="text" id="team1_name" name="team1_name" required>

                        <label for="team2_name">Enter Team 2 Name:</label>
                        <input type="text" id="team2_name" name="team2_name" required>
                        <br><br>
                        <label for="team1_name">Enter Team 1 Result:</label>
                        <input type="number" id="team1_name" name="team1_result" >
                        <label for="team2_name">Enter Team 2 Result:</label>
                        <input type="number" id="team2_name" name="team2_result" >
                        <br>
                        <br>
                        <label for="team1_players">Select Players for Team 1:</label>
                        <select id="team1_players" name="team1_players[]" multiple required>

                          @foreach ($players as $player)
                         <option value="{{ $player->username }}">{{ $player->username }}</option>
                          @endforeach
                        </select>
                        <br>

                        <label for="team2_players">Select Players for Team 2:</label>
                        <select id="team2_players" name="team2_players[]" multiple required>
                            @foreach ($players as $player)
                         <option value="{{ $player->username }}">{{ $player->username }}</option>
                          @endforeach
                        </select>
<br>
                        <label for="match_date">Match Date:</label>
                        <input type="datetime-local" id="match_date" name="match_date" required>

                        <button type="submit">Create Match</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<style>
    label {
        color:white;
    }
    input{
        background-color:black;
        border-color:white;
        color:white;
    }
    select{
        background-color:transparent;
      
        color:white;
    }
    </style>
@endsection