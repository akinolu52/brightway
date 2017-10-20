@extends('layouts.admin')

@section('content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
    </script>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{--  @include('includes.form_error')  --}}
                            <!-- /.form-group -->
                            <div class="col-md-9">
                               <form action="{{ url('/update') }}" method="patch">
                                  {{ csrf_field() }}
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">First Name</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="firstname" value="{{$user->firstname}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Last Name</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="lastname" value="{{$user->lastname}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Email</label>
                                    <div class="">
                                        <input type="email" class="form-control form-control-nbr"  name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Number of Items</label>
                                    <div class="">
                                        <input type="number" class="form-control form-control-nbr"  name="quantity" value="{{$user->quantity}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Number of Items</label>
                                    <div class="">
                                        <input type="number" class="form-control form-control-nbr"  name="status" value="{{$user->status}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <div class="">
                                        <input type="submit" class="form-control form-control-nbr"  value="Edit">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->


    </div><!-- /.row -->
@endsection