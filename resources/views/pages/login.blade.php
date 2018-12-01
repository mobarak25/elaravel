@php
use App\Http\Controllers\MyController;
$getData = new MyController;
@endphp
@extends('layout')
@section('content')
<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form action="{{ url('customer-login') }}" method="post">
						@csrf
						<p>{{Session::get('logInMsg')}}</p>
						<input type="text" placeholder="Email" name="customer_email" required="" />
						<input type="password" name="password" placeholder="Password" required="" />
						<span>
							<input type="checkbox" class="checkbox">
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
				<h2>New User Signup!</h2>
				<form action="{{ url('/customer-registration') }}" method="post">
					@csrf
					<input type="text" name="customer_name" required="" placeholder="Full Name"/>
					<input type="email" name="customer_email" required="" placeholder="Email Address"/>
					<input type="password" name="password" placeholder="Password"/>
					<input type="text" name="mobile_number" required="" placeholder="Mobile Number"/>
					<button type="submit" class="btn btn-default">Signup</button>
				</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section><!--/form-->
@endsection