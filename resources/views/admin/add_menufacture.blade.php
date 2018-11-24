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
			<a href="#">Manucature</a>
		</li>
	</ul>
			
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manucature <span class="label label-success">{{Session::get('message')}}</span></h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="{{url('/manucature-asve')}}" method="post">
					@csrf
					<fieldset>

						<div class="control-group">
							<label class="control-label">Manucature Name</label>
							<div class="controls">
								<input type="text" class="input-xlarge" name="manufature_name">
							</div>
						</div>


						<div class="control-group">
							<label class="control-label">Manucature Description</label>
							<div class="controls">
								<textarea class="cleditor" rows="3" name="manufature_description"></textarea>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Publication Status</label>
							<div class="controls">
								<label class="radio">
									<input type="radio" name="publication_status" value="1" checked="">Published
								</label>
								<br>
								<label class="radio">
									<input type="radio" name="publication_status"value="0">Unpublish
								</label>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Add Manucature</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div><!--/span-->
	</div><!--/row-->
@endsection