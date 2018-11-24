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
		<a href="#">Add Slider</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider<span class="label label-success">{{Session::get('message')}}</span></h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>

		<div class="box-content">
			<form class="form-horizontal" action="{{url('/save-slider')}}" method="post" enctype="multipart/form-data">
				@csrf
				<fieldset>
					<div class="control-group">
						<label class="control-label">Slider title</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="slider_title">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Slider Subtitle</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="slider_subtitle">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Slider Description</label>
						<div class="controls">
							<textarea class="cleditor" rows="3" name="slider_description"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="fileInput">Image</label>
						<div class="controls">
							<input class="input-file uniform_on" name="slider_image[]" id="fileInput" type="file" multiple="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Button Link</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="btn_link">
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Add Slider</button>
					</div>
				</fieldset>
			</form>
		</div>

	</div><!--/span-->
</div><!--/row-->
@endsection