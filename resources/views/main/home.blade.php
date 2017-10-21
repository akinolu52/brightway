
@extends('layouts.master')
@section('title')
    BrightWay Delivery
@endsection
@section('content')
<section id="home">
    <div class="jumbotron hero-section d-flex justify-content-center align-items-center">
        <div class="dark-overlay"></div>
        <div class="hero-header" data-aos="fade-in" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">
            <h1>
                WELCOME TO 
            </h1>
            <h1>
                BRIGHTWAY DELIVERY SERVICES
            </h1>
        </div>
    </div>
    <div class="card tracker p-4">
        <h5 class="tracker-header m-0 text-center">TRACK YOUR PRODUCT </h5>
        <p class="mild-text mb-1 text-center">now you can track your product easily</p>
        <form action="{{ url('/track') }}" method="post">
             {{ csrf_field() }}
            <div class="row w-100 m-0 no-gutters justify-content-center">
                <div class="col-md-12 px-1 my-1">
                    <input class="form-control tracker-item" type="number" placeholder="Order id" name="trackid">
                </div>
                <div class="col-md-4 px-1 my-1 align-self-center">
                    <button class="btn btn-def btn-block tracker-item">TRACK YOUR PRODUCT</button>
                </div>
            </div>
      @isset($status)
       {{$status}}
      @endisset            
        </form>
    </div>
     
    <div class="about py-5">
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
                    <img src="/img/about-img.png" data-aos="slide-left" class="img-fluid" alt="Delivery bus" data-aos-delay="200" data-aos-once="true">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <?php 
   $locations = array( 'Lagos Island', 'Ikoyi', 'Obalende', 'Dolphin Estate', 'Osborne Park View', 'Victoria Island', 'Banana Island', 'Marina', 'Oniru', 'Lekki Phase 1' , '3rd Roundabout', 'Osapa London', 'Alpha Beach', 'Chisco', 'Agungi Femi', 'Chevron', 'VGC', 'Ajah', 'Lekki Phase 2', 'Abraham Adesanya', 'Badore' , 'Apapa', 'Ijora', 'Iganmu', 'Costain', 'Ojuelegba', 'Surulere', 'Mushin', 'Shomolu', 'Yaba', 'Onipanu', 'Palmgrove', 'Obanikoro', 'Iyanaoworo', 'Bariga' , 'Anthony', 'Gbagada', 'Ajao Estate', 'Mushin', 'Isolo', 'Oshodi', 'Olodi-Apapa', 'MMA1', 'Mm2', 'Maryland', 'Ikeja' , 'Ojota', 'Ketu', 'Mile 12', 'Magodo-Shangisha', 'Alausa', 'Omole Phase 1', 'Omole Phase 2', 'Magodo Phase 1', 'Ojodu Berger', 'Ogba', 'Iju-Ishaga', 'Agege', 'Orile-Agege', 'Abule-Egba', 'Egbeda', 'Ikotun', 'Idimu', 'Igando', 'Ipaja', 'Gowon Estate', 'Igando', 'Ifako', 'Alimosho' , 'Mile 2', 'Amuwo-Odofin', 'Festac', 'Satelite Town', 'Navy Town', 'Alaba', 'LASU', 'Okomaiko', 'Volkswagen', 'Trade-Fair', 'Ojo', 'Iba');
   
     
    ?>
    
   
    <div class="calculate">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/calculate.png" class="img-fluid" data-aos="slide-right" alt="Delivery person" data-aos-delay="200" data-aos-once="true">
                </div>
                <div class="col-md-5">
                    <h1 class="loud-text">DELIVER YOUR ITEM</h1>
                    <h3 class="milder-text red">ITEMS MUST NOT BE MORE THAN 30KG</h3>
                    <h3 class="milder-text red">ITEMS ABOVE 30KG INCURE EXTRA CHARGES</h3>
                    

                @if(!isset($message))
                    <form action="{{ url('/user') }}" method="post">
                       {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group align-items-center">
                                        <input type="text" class="form-control form-control-nbr" id="" name="firstname" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group align-items-center">
                                        <input type="text" class="form-control form-control-nbr" id="" name="lastname" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group align-items-center">
                                <input type="email" class="form-control form-control-nbr" id="" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group align-items-center">
                                <input type="number" class="form-control form-control-nbr" id="" name="number" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group align-items-center">
                                <input type="number" class="form-control form-control-nbr" id="" name="quantity" placeholder="Number of Items" required>
                        </div>
                        <div class="form-group align-items-center">
                                <select name= "from" required class="form-control form-control-nbr select-2">
                                    @for ($i = 0; $i < count($locations); $i++)
                                         <option value = "{{ $locations[$i]}} "> {{ $locations[$i] }} </option> 
                                    @endfor
                                </select>
                        </div>
                        <div class="form-group align-items-center">
                                <input type="text" class="form-control form-control-nbr" id="" name="from_address" placeholder="From Address" required>
                        </div>
                        <div class="form-group align-items-center">
                                <select name= "to" required class="form-control form-control-nbr select-2">
                                    @for ($i = 0; $i < count($locations); $i++)
                                        <option value = "{{ $locations[$i]}} "> {{ $locations[$i] }} </option> 
                                    @endfor
                                </select>
                        </div>
                        <div class="form-group align-items-center">
                                <input type="text" class="form-control form-control-nbr" id="" name="to_address" placeholder="To Address" required>
                        </div>
                        <div class="form-group align-items-center">
                               <input type="submit" class="form-control btn-def form-control-nbr" id="" value="Deliver">
                        </div>
                        
                    </form>
                    @else
                      {{$message }}
                    @endif
                                     
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="dark-overlay"></div>
        <div class="row w-100 m-0 no-gutters">
            <div class="col-md-9 d-flex justify-content-center align-items-center">
                <div class="container py-5" data-aos="slide-right" data-aos-delay="500" data-aos-once="true">
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
            <div class="col-md-3">
                <img src="/img/step-img.png" data-aos="slide-left" class="img-fluid w-100" alt="Delivery bus" data-aos-delay="500" data-aos-once="true">
            </div>
        </div>
    </div>
    <div class="delivery">

    </div>
    <div class="testimonials py-5">
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
    
    <div class="contact py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>CONTACT US</h1>
                    <p>get in touch with us easily</p>
                    <div class="contact-cont py-5">
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
                </div>
                <div class="col-md-7">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>

    <a href="#app" class="fbtt">
        <span class="fa fa-arrow-up"></span>
    </a>
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