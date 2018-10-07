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
                               <form action="{{ url('/admin/update/'.$user->id) }}" method="post">
                                  {{ csrf_field() }}
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Item Name</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="item_name" value="{{$user->item_name}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Reciever Name</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="reciever_name" value="{{$user->reciever_name}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Reciever Next of kin</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="next_of_kin" value="{{$user->next_of_kin}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Delivery options</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="delivery_option" value="{{$user->delivery_option}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Delivery Date</label>
                                    <div class="">
                                        <input type="date" class="form-control form-control-nbr"  name="delivery_date" value="{{$user->delivery_date}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Weight</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="weight" value="{{$user->weight}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Comment</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="comment" value="{{$user->comment}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <label for="" class=" semi-loud-text m-0">Update Status</label>
                                    <div class="">
                                        <input type="text" class="form-control form-control-nbr"  name="status" value="{{$user->status}}">
                                    </div>
                                </div>
                                <div class="form-group align-items-center">
                                    <div class="">
                                        <input type="submit" class="form-control form-control-nbr btn-primary"  value="Edit">
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