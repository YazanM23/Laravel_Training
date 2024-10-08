@extends('layouts.navbar')
@section('middle')
@section('signup','active')
<div class="hero overlay" style="background-image: url('../resources/images/bg_3.jpg');">

    <div class="container">
<section class="ftco-section" style="padding-top: 25%; ">
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
                    <form action="{{route('pages.signupTrainer')}}" class="signin-form" method="post">
                        @csrf
                        <div class="form-group" style="display: flex" >
                            <input  type="text" class="form-control" placeholder="First Name" name="fname" required>
                            <input  type="text" class="form-control" placeholder="Last Name" name="lname" required style="margin-left: 3%">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="user" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <select id="listPicker" onchange="displaySelectedOption()" class="form-control" name="team">
                                <option value="Barcelona">Barcelona</option>
                                <option value="Real Madrid">Real Madrid</option>
                            </select>


                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                        </div>


                </div>
                </form>

            </div>
        </div>
    </div>
</div>
</section>
<div class="row align-items-center">

</div>
</div></div>
@endsection