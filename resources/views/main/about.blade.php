@extends('layouts.general')

@section('title')
    About us
@endsection

@section('page-link'){{ url('about') }}@endsection

@section('content')
<!--Our expertise section one start -->
<div class="ed_transprentbg ed_toppadder90 ed_bottompadder90">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="ed_video_section_discription">
					<h4>about Transporting</h4>
					<p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
					<p>On the other hand, certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="ed_video_section">
					<div class="embed-responsive embed-responsive-16by9">
						<div class="ed_video">
							<img src="images/content/v_bg.jpg" style="cursor:pointer"  alt="1" />
							<div class="ed_img_overlay">
								<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</div>
						</div>
						<iframe id="pro_video" class="embed-responsive-item" src="https://www.youtube.com/embed/LVyIqEuQWRY" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
    </div><!-- /.container -->
</div>
<!--Our expertise section one end -->
<!--skill section start -->
<div class="ed_graysection ed_toppadder90 ed_bottompadder60">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder50">
					<h3>what we offer</h3>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="skill_section">
					<h4>trustable</h4>
					<p>Nam cursus imperdiet elit. Fusce sollicitudin eget nulla in condime.</p>
					<span><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="skill_section">
					<h4>support 24x7</h4>
					<p>Nam cursus imperdiet elit. Fusce sollicitudin eget nulla in condime.</p>
					<span><i class="fa fa-users" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="skill_section">
					<h4>rewards</h4>
					<p>Nam cursus imperdiet elit. Fusce sollicitudin eget nulla in condime.</p>
					<span><i class="fa fa-gift" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="skill_section">
					<h4>satisfied cost</h4>
					<p>Nam cursus imperdiet elit. Fusce sollicitudin eget nulla in condime.</p>
					<span><i class="fa fa-money" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="skill_section">
					<h4>user friendly</h4>
					<p>Nam cursus imperdiet elit. Fusce sollicitudin eget nulla in condime.</p>
					<span><i class="fa fa-child" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="skill_section">
					<h4>discounts</h4>
					<p>Nam cursus imperdiet elit. Fusce sollicitudin eget nulla in condime.</p>
					<span><i class="fa fa-tags" aria-hidden="true"></i></span>
				</div>
			</div>
        </div>
	</div>
</div>
<!--skill section end -->
<!--Timer Section three start -->
<div class="ed_timer_section ed_toppadder90 ed_bottompadder60">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder50">
					<h3>Why Choose Us</h3>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_counter_wrapper">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="ed_counter">
							<h2 class="timer" data-from="0" data-to="200" data-speed="5000"></h2>
							<h4>Offices Worldwide</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="ed_counter">
							<h2 class="timer" data-from="0" data-to="800" data-speed="5000"></h2>
							<h4>Hardworking People</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="ed_counter">
							<h2 class="timer" data-from="0" data-to="60" data-speed="5000"></h2>
							<h4>Countries Covered</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="ed_counter">
							<h2 class="timer" data-from="0" data-to="12" data-speed="5000"></h2>
							<h4>Years of Experiences</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Timer Section three end -->
@endsection
