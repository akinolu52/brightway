@extends('layouts.master')

@section('title')
    Reset Password
@endsection

@section('content')
    <section id="reset_password" class="py-5">
        <div class="container py-3">
            <h1 class="loud-text">
                LOGIN
            </h1>

            <div class="col-md-7 p-0">
                <form action="" class="border p-2">
                    <div class="form-group">
                        <label for="email">Email address *</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <button class="btn btn-def">
                        Reset Password
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection
