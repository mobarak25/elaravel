@extends('layout')
@section('content')
<div class="product-details"><!--product-details-->

<div class="col-sm-5">
	<div class="view-product">
		<img src="{{url(json_decode($product->product_image)[0])}}" alt="" />
		<h3>ZOOM</h3>
	</div>
	
	<div id="similar-product" class="carousel slide" data-ride="carousel">
		
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			@foreach ($productSlides->chunk(3) as $chunk)
			    <div class="item">
			        @foreach ($chunk as $productItm)
			            <a href="{{ url('/view-product/'.$productItm->category_id) }}"><img src="{{url(json_decode($productItm->product_image)[0])}}" alt="" width="85"></a>

			        @endforeach
			    </div>
			@endforeach
		</div>
		<!-- Controls -->
		<a class="left item-control" href="#similar-product" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right item-control" href="#similar-product" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>
	</div>
</div>
<div class="col-sm-7">



	<div class="product-information"><!--/product-information-->
	<img src="{{url('frontend/images/product-details/new.jpg')}}" class="newarrival" alt="" />
	<h2>{{$product->product_name}}</h2>
	<p>Web ID: 1089772</p>
	<img src="{{url('frontend/images/product-details/rating.png')}}" alt="" />
	<span>
		<span>BDT. {{$product->product_price}}</span>
		<label>Quantity:</label>
		<input type="text" value="{{$product->product_price}}" />
		<button type="button" class="btn btn-fefault cart">
		<i class="fa fa-shopping-cart"></i>
		Add to cart
		</button>
	</span>
	<p><b>Availability:</b> In Stock</p>
	<p><b>Brand:</b> {{$product->mName}}</p>
	<p><b>Size:</b> {{$product->product_size}}</p>
	<p><b>Color:</b> {{$product->product_color}}</p>
	<a href=""><img src="{{url('frontend/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
	</div><!--/product-information-->
</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
<div class="col-sm-12">
	<ul class="nav nav-tabs">
		<li><a href="#details" data-toggle="tab">Details</a></li>
		<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
		<li><a href="#tag" data-toggle="tab">Tag</a></li>
		<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
	</ul>
</div>
<div class="tab-content">
	<div class="tab-pane fade" id="details" >
		<p>{{$product->product_long_description}}</p>
	</div>
	
	<div class="tab-pane fade" id="companyprofile" >
		<div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{url('frontend/images/home/gallery1.jpg')}}" alt="" />
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="tab-pane fade" id="tag" >
		<div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{url('frontend/images/home/gallery1.jpg')}}" alt="" />
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="tab-pane fade active in" id="reviews" >
		<div class="col-sm-12">
			<ul>
				<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
				<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
				<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
			</ul>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p><b>Write Your Review</b></p>
			
			<form action="#">
				<span>
					<input type="text" placeholder="Your Name"/>
					<input type="email" placeholder="Email Address"/>
				</span>
				<textarea name="" ></textarea>
				<b>Rating: </b> <img src="{{url('frontend/images/product-details/rating.png')}}" alt="" />
				<button type="button" class="btn btn-default pull-right">
				Submit
				</button>
			</form>
		</div>
	</div>
	
</div>
</div><!--/category-tab-->
<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">recommended items</h2>

<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active">
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{asset('frontend')}}/images/home/recommend1.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{asset('frontend')}}/images/home/recommend2.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{asset('frontend')}}/images/home/recommend3.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{asset('frontend')}}/images/home/recommend1.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{asset('frontend')}}/images/home/recommend2.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{asset('frontend')}}/images/home/recommend3.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a>
</div>
</div><!--/recommended_items-->
@endsection