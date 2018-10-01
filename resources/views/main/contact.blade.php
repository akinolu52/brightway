@extends('layouts.general')

@section('title')
    Contact
@endsection

@section('page-link'){{ url('contact') }}@endsection

@section('content')
<!--Section fourteen Contact form start-->
<div class="ed_transprentbg ed_toppadder90 ed_bottompadder90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder50">
					<h3>contact info</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="ed_contact_form">
					<div class="form-group">
						<input type="text" id="uname" class="form-control"  placeholder="Your Name">
					</div>
					<div class="form-group">
						<input type="email" id="umail" class="form-control"  placeholder="Your Email">
					</div>
					<div class="form-group">
						<input type="text" id="sub" class="form-control"  placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea id="msg" class="form-control" rows="4" placeholder="Message"></textarea>
					</div>
					<button id="ed_submit" class="btn ed_btn ed_orange ">send</button>
					<p id="err"></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="ed_event_single_address_info">
					<h4 class="">We will give you our best</h4>
					<p class="ed_bottompadder40 ed_toppadder10">You can always reach us via following contact details. We will give our best to reach you as possible.</p>
					<p>Phone: <span>+971-52-967-0247</span></p>
					<p>Email: <a href="#">info@gemscargo.com</a></p>
					<p>Website: <a href="#">http://www.gemscargo.com</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Section fourteen Contact form start-->
<!--Section fifteen Contact form start-->
<div class="ed_event_single_contact_address ed_toppadder90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder50">
					<h3>Find here</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="ed_event_single_address_map">
		<div id="map"></div>
	</div>
</div>
<!--Section fifteen Contact form start-->
@endsection
