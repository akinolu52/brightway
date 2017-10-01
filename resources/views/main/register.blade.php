@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <section id="register" class="py-5">
        <div class="container">
            <h1 class="loud-text">
              REGISTER
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
                        Register
                    </button>
                    <p class="milder-text">
                        <a href="/login">
                            Have an account?
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </section>

@endsection
