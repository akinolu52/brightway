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
                                ADDRESS:
                            </h4>
                        </div>
                        <div class="col-6">
                            <p class="milder-text">
                                No 10 Olanrewaju street by community rd bus stop ago , okota Lagos.
                            </p>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-6">
                            <h4 class="semi-loud-text">
                                Numbers:
                            </h4>
                        </div>
                        <div class="col-6">
                            <p>
                                <a href="tel:+2348112818373" class="milder-text">0811 281 8373</a>
                            </p>
                            <p>
                                <a href="tel:+2349025417206" class="milder-text">0902 541 7206</a>
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
                                <a href="mailto:brightwaydelivery@gmail.com" class="milder-text">brightwaydelivery@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-nbr" id="" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control form-control-nbr" id="" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">Subject</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-nbr" id="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 semi-loud-text m-0">Message</label>
                            <div class="col-sm-9">
                                <textarea name="" id="" cols="30" rows="10" class="form-control form-control-nbr" required></textarea>
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
            var uluru = {lat: 6.5532415, lng: 3.2649028};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
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