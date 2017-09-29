@extends('layouts.master') @section('title') BrightWay Delivery @endsection @section('content')
<section id="home">
    <div class="jumbotron hero-section">
        <div class="dark-overlay"></div>
        <h1>
            AWESOME TEMPLATE FOR COURIER & DELIVERY SERVICES
        </h1>
    </div>
    <div class="card tracker p-4">
        <h5 class="tracker-header mb-1">TRACK YOUR PRODUCT <span class="mild-text ml-2">now you can track your product easily</span></h5>
        <form action="">
            <div class="row w-100 m-0 no-gutters">
                <div class="col-md-4 px-1">
                    <input class="form-control tracker-item" type="text" placeholder="Order id">
                </div>
                <div class="col-md-4 px-1">
                    <input class="form-control tracker-item" type="text" placeholder="Email">
                </div>
                <div class="col-md-4 px-1">
                    <button class="btn btn-def btn-block tracker-item">TRACK YOUR PRODUCT</button>
                </div>
            </div>
        </form>
    </div>

    <div class="about p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="about-header">ABOUT US</h1>
                    <p class="mild-text">lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t empor incididunt ut labore
                        et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ul lamco laboris nisi
                        ut aliquip.
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
                    <img src="/img/about-img.png" data-aos="slide-left" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="calculate">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/calculate.png" class="img-fluid" data-aos="slide-right" alt="">
                </div>
                <div class="col-md-5">
                    <h1 class="loud-text">CALCULATE YOUR COST</h1>
                    <p class="milder-text">lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
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
                        <div class="form-group row align-items-center">
                            <label for="" class="col-sm-3 semi-loud-text m-0">some</label>
                            <div class="col-sm-9">
                                <select name="" class="form-control form-control-nbr" id=""></select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button class="btn btn-def btn-block">Calculate cost</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="dark-overlay"></div>
        <div class="row w-100 m-0 no-gutters">
            <div class="col-md-9 col-6 d-flex justify-content-center align-items-center">
                <div class="container-fluid p-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="icon-container"></div>
                                <div class="text-container">
                                    <h5 class="white-text-header">FAST DELIVERY</h5>
                                    <p class="mild-text">unde omnis iste natus error</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="icon-container"></div>
                                <div class="text-container">
                                    <h5 class="white-text-header">FAST DELIVERY</h5>
                                    <p class="mild-text">unde omnis iste natus error</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="icon-container"></div>
                                <div class="text-container">
                                    <h5 class="white-text-header">FAST DELIVERY</h5>
                                    <p class="mild-text">unde omnis iste natus error</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <img src="/img/step-img.png" data-aos="slide-left" class="img-fluid w-100" alt="">
            </div>
        </div>
    </div>
    <div class="delivery">

    </div>
    <div class="testimonials p-5">
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-inline-flex justify-content-center align-items-center">
                        <div class="col-8 text-center">
                            <img src="/img/avatar.jpg" class="rounded-circle" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta esse ipsum nobis quibusdam,
                                quisquam vel? Perferendis similique, soluta? Commodi, cupiditate dolores inventore labore
                                magnam nesciunt obcaecati porro provident quo sunt ullam, velit voluptatum. Accusantium harum
                                odit perferendis quasi reiciendis.</p>
                            <h5>BUSHRA AHASAN</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-inline-flex justify-content-center align-items-center">
                        <div class="col-8 text-center">
                            <img src="/img/avatar.jpg" class="rounded-circle" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta esse ipsum nobis quibusdam,
                                quisquam vel? Perferendis similique, soluta? Commodi, cupiditate dolores inventore labore
                                magnam nesciunt obcaecati porro provident quo sunt ullam, velit voluptatum. Accusantium harum
                                odit perferendis quasi reiciendis.</p>
                            <h5>BUSHRA AHASAN</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-inline-flex justify-content-center align-items-center">
                        <div class="col-8 text-center">
                            <img src="/img/avatar.jpg" class="rounded-circle" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta esse ipsum nobis quibusdam,
                                quisquam vel? Perferendis similique, soluta? Commodi, cupiditate dolores inventore labore
                                magnam nesciunt obcaecati porro provident quo sunt ullam, velit voluptatum. Accusantium harum
                                odit perferendis quasi reiciendis.</p>
                            <h5>BUSHRA AHASAN</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
        </div>
    </div>
    <div class="pricing p-5">
        <div class="container">
            <div class="header text-center">
                <h3 class="loud-text">PRICING & PLAN</h3>
                <p class="mild-text">see our pricing & plan to get the best services</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="pricing-panel p-4 text-center">
                        <div class="pricing-price">
                            $150
                        </div>
                        <div class="pricing-desc">
                            for multiple products
                        </div>
                        <div class="pricing-header">
                            standard
                        </div>
                        <div class="pricing-description">
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>

                        </div>
                        <div class="pricing-footer">
                            <a href="">ORDER NOW <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-panel active p-4 text-center">
                        <div class="pricing-price">
                            $150
                        </div>
                        <div class="pricing-desc">
                            for multiple products
                        </div>
                        <div class="pricing-header">
                            standard
                        </div>
                        <div class="pricing-description">
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>

                        </div>
                        <div class="pricing-footer">
                            <a href="">ORDER NOW <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-panel p-4 text-center">
                        <div class="pricing-price">
                            $150
                        </div>
                        <div class="pricing-desc">
                            for multiple products
                        </div>
                        <div class="pricing-header">
                            standard
                        </div>
                        <div class="pricing-description">
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>
                            <h4 class="pricing-title">
                                PRODUCT WEIGHT:
                                <span>< 3KG</span>
                            </h4>

                        </div>
                        <div class="pricing-footer">
                            <a href="">ORDER NOW <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>CONTACT US</h1>
                    <p>get in touch with us easily</p>
                    <div class="row">
                        <div class="col-6">
                            NUMBERS:
                        </div>
                        <div class="col-6">
                            /0/040840
                        </div>
                        <div class="col-6">
                            EMAIL ADDRESS:
                        </div>
                        <div class="col-6">
                            test@test.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection