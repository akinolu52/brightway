@extends('layouts.general')

@section('title')
    Pricing
@endsection

@section('page-link'){{ url('pricing') }}@endsection

@section('content')
<div class="ed_transprentbg ed_toppadder90 ed_bottompadder60">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder50">
					<h3>Our pricing table</h3>
				</div>
			</div>
		</div>
		<div class="ed_pricing_table_wrapper_second">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="ed_pricing_table">
				<div class="ed_pricing_heading">
					<div class="ed_table_price">
						<p class="ed_price_dollar"><sup>$ </sup>29<sub> /day</sub></p>
					</div>
					<h2>starter</h2>
				</div>
				<ul>
					<li>One Day Trial</li>
					<li>Limited delivery</li>
					<li>3 men</li>
					<li>No Supporter</li>
					<li>shiping charges</li>
				</ul>
				<div class="ed_pricing_tabel_footer">
					<a href="#" class="btn ed_btn ed_orange">purchase now</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="ed_pricing_table">
				<div class="ed_pricing_heading">
					<div class="ed_table_price">
						<p class="ed_price_dollar"><sup>$ </sup>35<sub> /day</sub></p>
					</div>
					<h2>basic</h2>
				</div>
				<ul>
					<li>One Day Standard Access</li>
					<li>Limited delivery</li>
					<li>3 men</li>
					<li>Random Supporter</li>
					<li>shiping charges</li>
				</ul>
				<div class="ed_pricing_tabel_footer">
					<a href="#" class="btn ed_btn ed_orange">purchase now</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="ed_pricing_table">
				<div class="ed_pricing_heading">
					<div class="ed_table_price">
						<p class="ed_price_dollar"><sup>$ </sup>40<sub> /yr</sub></p>
					</div>
					<h2>premium</h2>
				</div>
				<ul>
					<li>Life Time Access</li>
					<li>Unlimited delivery</li>
					<li>3+ men</li>
					<li>Free Supporter</li>
					<li>Free shiping</li>
				</ul>
				<div class="ed_pricing_tabel_footer">
					<a href="#" class="btn ed_btn ed_orange">purchase now</a>
				</div>
			</div>
		</div>
		</div>
    </div><!-- /.container -->
</div>
@endsection
