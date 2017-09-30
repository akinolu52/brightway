@extends('layouts.master')

@section('title')
    Contact us
@endsection

@section('content')
    <section id="contact">
        <div class="container py-5">
            <h1 class="loud-text">CONTACT US</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="row d-flex align-items-center">
                        <div class="col-6">
                            <h4 class="semi-loud-text">
                                NUMBERS:
                            </h4>
                        </div>
                        <div class="col-6">
                            <p>
                                <a href="tel:" class="milder-text">08081</a>
                            </p>
                            <p>
                                <a href="tel:" class="milder-text">08081</a>
                            </p>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-6">
                            <h4 class="semi-loud-text">
                                Email address:
                            </h4>
                        </div>
                        <div class="col-6">
                            <p>
                                <a href="" class="milder-text">test@test.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">some</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-nbr" id="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">some</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-nbr" id="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">some</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-nbr" id="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">some</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-nbr" id="">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9 mb-3">
                                <button class="btn btn-def btn-block">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="map"></div>
        </div>
    </section>
@endsection

@section('scripts')

    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWwVZp-9zVTfng0X1x2tbUqvBNnd0iPxM&callback=initMap">
    </script>
@endsection