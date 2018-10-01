@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Users & Cargo</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Quantity</th>
                            <th>Track Id</th>
                            <th>From</th>
                            <th>From Address</th>
                            <th>To</th>
                            <th>To Address</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @if(null !== $users)
                            @foreach($users as $user)
                                <tr>
                                   <td>{{$user->id}}</td>
                                    <td><a href="{{url('admin/edit/'. $user->id) }}">{{$user->firstname}}</a></td>
                                    <td>{{$user->lastname}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->number}}</td>
                                    <td>{{$user->quantity}}</td>
                                    <td>{{$user->trackid}}</td>
                                    <td>{{$user->from}}</td>
                                    <td>{{$user->from_address}}</td>
                                    <td>{{$user->to}}</td>
                                    <td>{{$user->to_address}}</td>
                                    <td>{{$user->status}}</td>
                                    <td>{{$user->amount}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection