@extends('layouts.general')

@section('content')
<div class="ed_form_box ed_toppadder90 ed_bottompadder60">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder50">
					<h3>Search & track your cargo</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="ed_search_form" style="padding: 20px">
					<form class="form-inline" action="{{ url('/track') }}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" placeholder="Enter Track Id..." class="form-control" id="course" name="trackid">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn ed_btn pull-right ed_orange">track</button>
                        </div>
					</form>
				</div>
            </div>
            @if($track)
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 details" style="font-size: 16px;">
                    <div class="row">
                        <div class="col-md-12" style="background-color: #fca901;height: 50px;line-height: 50px;font-size: 20px;color: #fff;text-align: center;"">
                            <b>{{ $track->status }}</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="color: #fca901;">
                            <b>Shipping Details</b>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2" style="border-right: 1px solid #ccc;"><b>Shippers Name</b> </div>
                        <div class="col-md-4">{{ $track->firstname }} {{ $track->lastname }}</div>
                        <div class="col-md-2"><b>Item</b></div>
                        <div class="col-md-4">{{ $track->item_name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><b>Shippers Address</b> </div>
                        <div class="col-md-4">{{ $track->from }}</div>
                        <div class="col-md-2"><b>Weight</b></div>
                        <div class="col-md-4">{{ $track->weight }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="color: #fca901;">
                            <b>Receiver Details</b>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2"><b>Receiver Name</b> </div>
                        <div class="col-md-4">{{ $track->reciever_name }}</div>
                        <div class="col-md-2"><b>Receiver next of kin</b></div>
                        <div class="col-md-4">{{ $track->next_of_kin }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><b>Receiver Address</b> </div>
                        <div class="col-md-4">{{ $track->to }}</div>
                        <div class="col-md-2"><b>Delivery Options</b></div>
                        <div class="col-md-4">{{ $track->delivery_option }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-12" style="color: #fca901;">
                            <b>Other Details</b>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2"><b>Transaction Location</b> </div>
                        <div class="col-md-4">{{ $track->from }}</div>
                        <div class="col-md-2"><b>Origin</b></div>
                        <div class="col-md-4">{{ $track->from }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><b>Shipping Date</b> </div>
                        <div class="col-md-4">{{ $track->created_at }}</div>
                        <div class="col-md-2"><b>Destination</b></div>
                        <div class="col-md-4">{{ $track->to }}</div>
                    </div>
                    <div class="row" style="border: 1px solid #ccc;">
                        <div class="col-md-2"><b>Delivery Date</b> </div>
                        <div class="col-md-4">{{ $track->delivery_date }}</div>
                        <div class="col-md-2"><b>Comment</b></div>
                        <div class="col-md-4">{{ $track->comment }}</div>
                    </div>
                </div>
            </div>
            @else
                <div class="col-md-9">
                    <div class="alert alert-block align-items-center alert-primary" style="border: 1px solid red">
                        <p>Enter a track id to view tracking information</p>
                    </div>
                </div>
            @endif
		</div>
	</div>
</div>
<style>
.details .row {
    border: 1px solid #CCC; border-bottom: none;
}
.details .row:last-child{
    border: 1px solid #CCC;
}
.col-md-2 {
    border: 1px solid #CCC; border-bottom: none; border-top: none;
}
.col-md-2, .col-md-4 {
    height: 50px;
}
</style>

@endsection
