@extends('layouts.master')

@section('title', 'Login')

@section('stylesheet')

    <style>

        .main {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background: #e9faff;
        }

        .card {
            width: 400px;
        }

    </style>

@endsection

@section('main-content')

    <div class="main">
    <!-- Material form login -->
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Sign in</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;">

                <!-- Email -->
                <div class="md-form">
                    <input type="email" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">E-mail</label>
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input type="password" id="materialLoginFormPassword" class="form-control">
                    <label for="materialLoginFormPassword">Password</label>
                </div>

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        <a href="">Forgot password?</a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form login -->
    </div>

@endsection

@section('javascript')


@endsection