@extends('layouts.master')

@section('title')
    About us
@endsection

@section('content')
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4 class="loud-text">MORE ABOUT US</h4>
                    <p class="milder-text">
                        lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                    </p>

                    <div class="service-box">
                        <div class="icon-container"></div>
                        <div class="text-container">
                            <h5 class="text-header">FAST DELIVERY</h5>
                            <p class="mild-text">unde omnis iste natus error</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="icon-container"></div>
                        <div class="text-container">
                            <h5 class="text-header">FAST DELIVERY</h5>
                            <p class="mild-text">unde omnis iste natus error</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="icon-container"></div>
                        <div class="text-container">
                            <h5 class="text-header">FAST DELIVERY</h5>
                            <p class="mild-text">unde omnis iste natus error</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <img src="/img/about-img.png" data-aos="slide-left" class="img-fluid" alt="Delivery bus" data-aos-duration="500" data-aos-once="true">

                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-4">
                    <div class="about-panel p-3" data-aos="slide-up" data-aos-delay="100" data-aos-duration="500" data-aos-once="true">
                        <h1 class="semi-loud-text">WHAT WE DO</h1>
                        <p class="milder-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. quis nostrud.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-panel p-3" data-aos="slide-up" data-aos-delay="300" data-aos-duration="500" data-aos-once="true">
                        <h1 class="semi-loud-text">WHAT WE DO</h1>
                        <p class="milder-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. quis nostrud.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-panel p-3" data-aos="slide-up" data-aos-delay="500" data-aos-duration="500">
                        <h1 class="semi-loud-text">WHAT WE DO</h1>
                        <p class="milder-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
