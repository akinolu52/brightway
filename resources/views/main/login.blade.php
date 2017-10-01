@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    <section id="login" class="py-5">
        <div class="container">
            <h1 class="loud-text">
                LOGIN
            </h1>

            <div class="col-md-7 p-0">
                <form action="" class="border p-2">
                    <div class="form-group">
                        <label for="email">Email address *</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <button class="btn btn-def">
                        Log In
                    </button>
                    <p class="milder-text">
                        <a href="/reset-password">
                            Forgot your password?
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </section>

@endsection
