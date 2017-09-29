@extends('layouts.master', ['profile'=> true])

@section('title')
    TMSORAYA
@endsection

@section('content')
    <section id="p_team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h1 class="text-center header py-5">Meet the Team</h1>
                    <p class="text-center text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam at ducimus est molestiae, necessitatibus neque nihil nobis, numquam obcaecati officia quas repudiandae saepe totam voluptas? Laboriosam nam officia omnis quisquam sunt! At consectetur consequatur, est expedita maiores sit tenetur. Consectetur consequuntur dignissimos eaque eligendi enim error eum exercitationem hic laboriosam laudantium libero minima minus non, quisquam ratione repudiandae voluptates!
                    </p>
                </div>
                <img src="img/Slider.jpg" class="fit-cover py-3" alt="">
                <div class="col-10">
                    <p class="text-center text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam at ducimus est molestiae, necessitatibus neque nihil nobis
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="p_example">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5 mb-5">
                    <div class="text-center description pt-4">
                        <h5 class="text-uppercase font-weight-bold header">mission</h5>
                        <img src="/img/Bitmap.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nam natus provident saepe suscipit unde vel. Consequuntur culpa labore mollitia!</p>
                    </div>
                </div>
                <div class="col-md-5 mb-5">
                    <div class="text-center description pt-4">
                        <h5 class="text-uppercase font-weight-bold header">vision</h5>
                        <img src="/img/Bitmap2.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nam natus provident saepe suscipit unde vel. Consequuntur culpa labore mollitia!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="e2" class="pb-5">
       <div class="container-fluid px-0">
           <div class="row no-gutters">
               <div class="col-6">
                   <img src="/img/Bitmap2.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-6">
                   <img style="max-height: 523px !important; width: 100%" src="/img/artboard/artboard3.jpg" alt="">
               </div>
           </div>
       </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <p class="text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur magni minima mollitia odit tempore vel! Autem illum ipsa quia?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti deserunt dolor dolorem doloribus eaque error est fuga laboriosam molestias pariatur quae quaerat.
                    </p>
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
