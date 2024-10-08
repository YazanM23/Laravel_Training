@extends('layouts.navbar')
@section('middle')
@section('signup','active')
<div class="hero overlay" style="background-image: url('../resources/images/bg_3.jpg');">

  <div class="container">
<section class="ftco-section" style="padding-top: 25%;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">SignUp </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="login-wrap p-0">
            <h3 class="mb-4 text-center">Create new account</h3>
            <form action="trainerForm" class="signin-form">
              <div class="form-group">
                <a href="trainerForm" class="form-control btn btn-primary submit px-3">Trainer</a>
              </div>
            </form>
            <form action="playerForm" class="signin-form">
              <div class="form-group">
                <a href='playerForm' class="form-control btn btn-primary submit px-3" name="player">Player</a>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="row align-items-center">

  </div>
  </div>
</div>

@endsection