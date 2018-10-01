@extends('layouts.general')

@section('content')
<div class="ed_form_box ed_toppadder90 ed_bottompadder60">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top ed_bottompadder50">
					<h3>Register &amp; Login</h3>
				</div>
			</div>
            @isset($message)
                {{$message}}
            @endisset
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="ed_search_form">
                    <form action="{{ url('/register')}}" class="form-inline" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" style="color: #fff; margin-top: 15px">Email address *</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password" style="color: #fff; margin-top: 15px">Password *</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        
                        <button class="btn ed_btn pull-right ed_orange" style="margin-top: 30px">
                            Register
                        </button>
                    </form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="ed_search_form">
                    <form action="{{ url('/signIn')}}" class="form-inline" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" style="color: #fff; margin-top: 15px">Email address *</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password" style="color: #fff; margin-top: 15px">Password *</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>

                        <button class="btn ed_btn pull-right ed_orange" style="margin-top: 30px">
                            Log In
                        </button>
                    </form>
                </div>
			</div>
		</div>
	</div>
</div>

@endsection
