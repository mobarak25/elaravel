@php
use App\Http\Controllers\MyController;
$getData = new MyController;
@endphp
@extends('layout')
@section('content')
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Check out</li>
			</ol>
		</div><!--/breadcrums-->
		<div class="register-req">
			<p>Please fill Up the all fields</p>
		</div><!--/register-req-->
		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-5 clearfix">
					<div class="bill-to">
						<p>Bill To</p>
						<div class="form-two">
							<form action="{{ url('save-shipping-details') }}" method="post">
								@csrf
								<input type="text" name="shipping_email" placeholder="Email*">
								<input type="text" name="shipping_first_name" placeholder="First Name *">
								<input type="text" name="shipping_last_name" placeholder="Last Name *">
								<input type="text" name="shipping_address" placeholder="Address *">
								<input type="text" name="shipping_mobile_number" placeholder="Mobile Number *">
								<input type="text" name="shipping_city" placeholder="City *">
								<input type="submit" class="btn btn-primary" value="Done">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> <!--/#cart_items-->
@endsection