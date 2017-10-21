@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    <section id="login" class="py-5">
        <div class="container">
                    <h1 class="loud-text">
                       REGISTER & LOGIN
                    </h1>
                <div class="row">
                    <div class="col-md-6 my-4">

                        <h1 class="semi-loud-text">
                            REGISTER
                        </h1>
                        <form action="{{ url('/register')}}" class="border p-2" method="post">
                              {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email address *</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>

                            <button class="btn btn-def">
                                Register
                            </button>
                        </form>
                    </div>
                    

                    
                    <div class="col-md-6 my-4">

                        <h1 class="semi-loud-text">
                            LOGIN
                        </h1>
                        <form action="{{ url('/signIn')}}" class="border p-2" method="post">
                             {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email address *</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>

                            <button class="btn btn-def">
                                Log In
                            </button>
                        </form>
                    </div>
            
                </div>
                    @isset($message)
                          {{$message}}
                    @endisset
        </div>
    </section>

@endsection
