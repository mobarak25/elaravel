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
						<th>Category Name</th>
						<th>Category Description</th>
						<th>Publication Status</th>
						<th><div style="width: 150px">Actions</div></th>
					</tr>
				</thead>
				<tbody>
					@php
						$i = 1;
					@endphp
					@foreach($manufactures as $manufacture)
						<tr>
							<td>{{$i++}}</td>
							<td class="center">{{$manufacture->manufacture_name}}</td>
							<td class="center">{!!$manufacture->manufacture_description!!}</td>
							<td class="center">
								<span class="label {{($manufacture->publication_status == 1)? 'label-success':'label-warning'}}">{{($manufacture->publication_status == 1)? 'Published':'Unpublished'}}</span>
							</td>
							<td class="center">
								<a class="btn {{($manufacture->publication_status == 1)? 'btn-danger':'btn-success'}}" href="{{url('/active_unactive_cat/'.$manufacture->manufacture_id)}}">
									<i class="halflings-icon white {{($manufacture->publication_status == 1)? 'thumbs-down':'thumbs-up'}}"></i>
								</a>
								<a class="btn btn-info" href="{{url('/edit-manufacture/'.$manufacture->manufacture_id)}}">
									<i class="halflings-icon white edit"></i>
								</a>
								<a class="btn btn-danger" id="delete" href="{{url('/delete-manufacture/'.$manufacture->manufacture_id)}}">
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