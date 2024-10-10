@extends('layouts.navbar');


    @section('player','active')
        


@section('middle')
<div class="hero" style="">

    <div class="container">
<section class="ftco-section" style="padding-top: 25%;">
    <div >
     <table class ="table table-bordered table-dark table-hover">
        <thead>
            <tr>
                <th>User Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Length</th>
                <th>Weight</th>
                <th>Team</th>
                <th>Match</th>
                <th>Date</th>
            </tr>
            <tr>
<td>{{$data->username}}</td>
<td>{{$data->FirstName}}</td>
<td>{{$data->LastName}}</td>
<td>{{$data->Email}}</td>
<td>{{$data->Length}}</td>
<td>{{$data->Weight}}</td>
<td>{{$data->Team}}</td>
<td>({{$team1['Name']}} ) VS ({{$team2['Name']}})</td>
<td>{{$date}}</td>
            </tr>
            </thead>
     </table>

    </div>

</section>
    </div>
</div>
@endsection
