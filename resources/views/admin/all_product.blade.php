@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">All Product</a>
	</li>
</ul>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2>
				<i class="halflings-icon user"></i>
				<span class="break"></span>Members
				<span class="green">{{Session::get('message')}}</span>
				<span class="green">{{Session::get('delmessage')}}</span>
			</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>SI.</th>
						<th>Name</th>
						<th>Category</th>
						<th>Brand</th>
						<th>Short Description</th>
						<th>Long Description</th>
						<th>Price</th>
						<th>Image</th>
						<th>Size</th>
						<th>Color</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				
				<tbody>
					@php
					$i = 1;
					@endphp
					@foreach($products as $product)
					<tr>
						<td>{{$i++}}</td>
						<td class="center">{{$product->product_name}}</td>
						<td class="center">{{$product->catName}}</td>
						<td class="center">{{$product->mName}}</td>
						<td class="center">{!!$product->product_short_description!!}</td>
						<td class="center">{!!$product->product_long_description!!}</td>
						<td class="center">{{$product->product_price}}TK</td>
						<td class="center">
							@php
							$images = json_decode($product->product_image);
							foreach ($images as $image) {
							echo "<img src='{$image}' alt='' width='100'>";
							}
							@endphp
						</td>
						<td class="center">{{$product->product_size}}</td>
						<td class="center">{{$product->product_color}}</td>
						<td class="center">
							<span class="label {{($product->publication_status == 1)? 'label-success':'label-warning'}}">{{($product->publication_status == 1)? 'Published':'Unpublished'}}</span>
						</td>
						<td class="center">
							<div style="width: 130px;">
								<a class="btn {{($product->publication_status == 1)? 'btn-danger':'btn-success'}}" href="{{url('/active_unactive_product/'.$product->product_id)}}">
									<i class="halflings-icon white {{($product->publication_status == 1)? 'thumbs-down':'thumbs-up'}}"></i>
								</a>
								<a class="btn btn-info" href="{{url('/edit-product/'.$product->product_id)}}">
									<i class="halflings-icon white edit"></i>
								</a>
								<a class="btn btn-danger" id="delete" href="{{url('/delete-product/'.$product->product_id)}}">
									<i class="halflings-icon white trash"></i>
								</a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection