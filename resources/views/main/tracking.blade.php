@extends('layouts.master')

@section('title')
    Tracking
@endsection

@section('content')
    <section id="tracking" class="py-5">
        <div class="container">
            <div class="tracker">
                <h5 class="tracker-header mb-1">TRACK YOUR PRODUCT <span class="mild-text ml-2">now you can track your product easily</span></h5>
                <form action="">
                    <div class="row w-100 m-0 no-gutters">
                        <div class="col-md-4 px-1 my-2">
                            <input class="form-control tracker-item" type="text" placeholder="Order id">
                        </div>
                        <div class="col-md-4 px-1 my-2">
                            <input class="form-control tracker-item" type="text" placeholder="Email">
                        </div>
                        <div class="col-md-4 px-1 my-2">
                            <button class="btn btn-def btn-block tracker-item">TRACK YOUR PRODUCT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
