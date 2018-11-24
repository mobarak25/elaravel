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
			<a href="#">Update Manufacture</a>
		</li>
	</ul>
			
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Manufacture <span class="label label-success">{{Session::get('message')}}</span></h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="{{url('/update-manufacture/'.$get_manufacture->manufacture_id)}}" method="post">
					@csrf
					<fieldset>

						<div class="control-group">
							<label class="control-label">Update Manufacture Name</label>
							<div class="controls">
								<input type="text" class="input-xlarge" name="manufacture_name" value="{{$get_manufacture->manufacture_name}}">
							</div>
						</div>


						<div class="control-group">
							<label class="control-label">Update Manufacture Description</label>
							<div class="controls">
								<textarea class="cleditor" rows="3" name="manufacture_description">{{$get_manufacture->manufacture_description}}</textarea>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Update Manufacture</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div><!--/span-->
	</div><!--/row-->
@endsection