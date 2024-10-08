@extends('layouts.navbar')
@section('middle')
<div class="hero overlay" style="background-image: url('../resources/images/bg_3.jpg');">

    <div class="container">
<section class="ftco-section" style="padding-top: 25%;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Choose one</h3>
                    <form action="table" class="signin-form">
                        <div class="form-group">
                            <button  class="form-control btn btn-primary submit px-3">Players</button>
                        </div>
                    </form>
                    <form action="{{route('pages.createMatch')}}" class="signin-form">
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3" name="player">Create Match</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</div>
@endsection