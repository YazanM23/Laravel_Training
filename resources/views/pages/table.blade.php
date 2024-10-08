@extends('layouts.navbar')

@section('container')
<section class="ftco-section">
    <div class="container" style="padding-top: 8%">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Players in Your Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-bordered table-dark table-hover" id="playerTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Length</th>
                                <th>Weight</th>
                                <th>Team</th>
                     
                            </tr>
                        </thead>
                        <tbody>
                            <h1 style="color:white">{{ session('name') }}</h1>
                            @foreach ($players as $player)
                            <tr>
                                
                                <form method="POST" action="{{ route('pages.update', $player->username) }}">
                                    @csrf
                                    @method('PUT')

                                    <td>{{ $loop->index + 1 }}</td>
                                    <td><input type='text' name="username" value='{{ $player->username }}' readonly></td>
                                    <td><input type='text' name="FirstName" value='{{ $player->FirstName }}'></td>
                                    <td><input type='text' name="LastName" value='{{ $player->LastName }}'></td>
                                    <td><input type='text' name="Email" value='{{ $player->Email }}'></td>
                                    <td><input type='text' name="Length" value='{{ $player->Length }}'></td>
                                    <td><input type='text' name="Weight" value='{{ $player->Weight }}'></td>
                                    <td><input type='text' name="Team" value='{{ $player->Team }}' readonly></td>
                                    <td>
                                        <button type="submit">Update</button>
                                    </td>
                                </form>

                               
                                <td>
                                    <form action="{{ route('pages.delete', $player->username) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    
                    <table class="table table-bordered table-dark table-hover" id="playerTable">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Length</th>
                                <th>Weight</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <h1 style="color: white">New Player</h1>
                    
                            <form method="POST" action="{{ route('pages.store') }}">
                                @csrf
                                @method('POST')

                                <tr>
                                    <td><input type='text' name="username"></td>
                                    <td><input type='text' name="FirstName"></td>
                                    <td><input type='text' name="LastName"></td>
                                    <td><input type='text' name="Email"></td>
                                    <td><input type='text' name="Length"></td>
                                    <td><input type='text' name="Weight"></td>
                                    <td><input type='password' name="password"></td>
                                    <td >
                                        <button type="submit">Insert</button>
                                    </td>
                                </tr>
                             
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    input {
        width: 100px;
        background-color: transparent;
        color: white;
        border-color: transparent;
    }
    input:hover {
        background-color: gray;
        border-color: transparent;
    }
    button {
        display: inline;
        padding: 3px;
        background-color: transparent;
        border-color: transparent;
        color: white;
    }
    button:hover {
        background-color: gray;
        border-color: transparent;
    }
</style>
