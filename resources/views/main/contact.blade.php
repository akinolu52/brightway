@extends('layouts.master')

@section('title')
    TMSORAYA
@endsection

@section('content')
    <section id="home">
        <div class="container pb-5">
            <div id="carousel">
                <div id="heroCarousel" class="carousel slide" data-ride="carousel">
                    {{--<ol class="carousel-indicators">--}}
                    {{--<li data-target="#heroCarousel" data-slide-to="0" class="active"></li>--}}
                    {{--<li data-target="#heroCarousel" data-slide-to="1" class=""></li>--}}
                    {{--<li data-target="#heroCarousel" data-slide-to="2" class=""></li>--}}
                    {{--</ol>--}}
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-md-8 col-lg-9">
                                    <img class="fit-cover" src="/img/slider.jpg" alt="First slide">
                                </div>
                                <div class="col-md-4 col-lg-3 d-none d-md-flex justify-content-center align-self-center px-4">
                                    <div class="cid">
                                        <h4 class="header">CULTURE</h4>
                                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Atque, doloribus fugit ipsum nam quam qui recusandae reiciendis reprehenderit velit voluptate.</p>
                                        <a href="" class="btn btn-link">View more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-md-8 col-lg-9">
                                    <img class="fit-cover" src="/img/slider.jpg" alt="First slide">
                                </div>
                                <div class="col-md-4 col-lg-3 d-none d-md-flex justify-content-center align-self-center px-4">
                                    <div class="cid">
                                        <h4 class="header">CUL</h4>
                                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Atque, doloribus fugit ipsum nam quam qui recusandae reiciendis reprehenderit velit voluptate.</p>
                                        <a href="" class="btn btn-link">View more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-md-8 col-lg-9">
                                    <img class="fit-cover" src="/img/slider.jpg" alt="First slide">
                                </div>
                                <div class="col-md-4 col-lg-3 d-none d-md-flex justify-content-center align-self-center px-4">
                                    <div class="cid">
                                        <h4 class="header">TURE</h4>
                                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Atque, doloribus fugit ipsum nam quam qui recusandae reiciendis reprehenderit velit voluptate.</p>
                                        <a href="" class="btn btn-link">View more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        {{--<div class="plant-1">--}}
            {{--<img class="img-fluid" src="/img/plant1.png" alt="">--}}
        {{--</div>--}}
        {{--<div class="plant-2">--}}
            {{--<img class="img-fluid" src="/img/plant2.png" alt="">--}}
        {{--</div>--}}
        {{--<div class="pillow">--}}
            {{--<img class="img-fluid" src="/img/pillow.png" alt="">--}}
        {{--</div>--}}
        {{--<div class="totem">--}}
            {{--<img class="img-fluid" src="/img/totem.png" alt="">--}}
        {{--</div>--}}
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h1 class="text-center header">Meet the Team</h1>
                    <p class="text-center text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam at ducimus est molestiae, necessitatibus neque nihil nobis, numquam obcaecati officia quas repudiandae saepe totam voluptas? Laboriosam nam officia omnis quisquam sunt! At consectetur consequatur, est expedita maiores sit tenetur. Consectetur consequuntur dignissimos eaque eligendi enim error eum exercitationem hic laboriosam laudantium libero minima minus non, quisquam ratione repudiandae voluptates!
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-discover">DISCOVER MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="example">
        <div class="container">
            <div class="row pt-5 justify-content-around">
                <div class="col-md-5 mb-5">
                    <img src="/img/Bitmap.jpg" class="img-fluid" alt="">
                    <div class="text-center description pt-4">
                        <h5 class="text-uppercase font-weight-bold header">let us inspire you</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nam natus provident saepe suscipit unde vel. Consequuntur culpa labore mollitia!</p>
                        <a href="">Make appointment</a>
                    </div>
                </div>
                <div class="col-md-5 mb-5">
                    <img src="/img/Bitmap2.jpg" class="img-fluid" alt="">
                    <div class="text-center description pt-4">
                        <h5 class="text-uppercase font-weight-bold header">outstanding kitchen and dining</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nam natus provident saepe suscipit unde vel. Consequuntur culpa labore mollitia!</p>
                        <a href="">Make appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="container pb-5">
            <h5 class="text-uppercase text-center headerfont-weight-bold ">PARTNERS AND CLIENTS</h5>
            <div class="container">
                <div class="row pt-4 justify-content-center">
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client.jpg"  alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client_2.jpg" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client.jpg" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client_2.jpg" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client.jpg" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client_2.jpg" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client.jpg"  alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client_2.jpg" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client.jpg" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <img class="img-fluid" src="/img/Client_2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection