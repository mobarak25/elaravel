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
		<a href="#">Forms</a>
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
						<th>Slider Title</th>
						<th>Slider Suntitle</th>
						<th>Slider Description</th>
						<th><div style="width: 150px">Actions</div></th>
					</tr>
				</thead>
				<tbody>
					@php
						$i = 1;
					@endphp
					@foreach($sliders as $slider)
						<tr>
							<td>{{$i++}}</td>
							<td class="center">{{$slider->slider_title}}</td>
							<td class="center">{{$slider->slider_subtitle}}</td>
							<td class="center">{!!$slider->slider_description!!}</td>
							
							<td class="center">
								
								<a class="btn btn-info" href="{{url('/edit-slider/'.$slider->slider_id)}}">
									<i class="halflings-icon white edit"></i>
								</a>
								<a class="btn btn-danger" id="delete" href="{{url('/delete-category/'.$slider->slider_id)}}">
									<i class="halflings-icon white trash"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection