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
		<a href="#">Add Product</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product <span class="label label-success">{{Session::get('message')}}</span></h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>

		<div class="box-content">
			<form class="form-horizontal" action="{{url('/save-product')}}" method="post" enctype="multipart/form-data">
				@csrf
				<fieldset>
					<div class="control-group">
						<label class="control-label">Product Name</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="product_name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="selectError3">Product Category</label>
						<div class="controls">
							<select id="selectError3" name="category_id">
								@foreach($categories as $category)
									<option value="{{$category->category_id}}">{{$category->category_name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="selectError">Product Manufacture</label>
						<div class="controls">
							<select id="selectError" name="menufacture_id">
								@foreach($menufactures as $menufacture)
									<option value="{{$menufacture->manufacture_id}}">{{$menufacture->manufacture_name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Product Short Description</label>
						<div class="controls">
							<textarea class="cleditor" rows="3" name="product_short_description"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Product Long Description</label>
						<div class="controls">
							<textarea class="cleditor" rows="3" name="product_long_description"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Product Price</label>
						<div class="controls">
							<input type="number" class="input-xlarge" name="product_price">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="fileInput">Image</label>
						<div class="controls">
							<input class="input-file uniform_on" name="product_image[]" id="fileInput" type="file" multiple="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Product Size</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="product_size">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Product Color</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="product_color">
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
						<button type="submit" class="btn btn-primary">Add Producr</button>
					</div>
				</fieldset>
			</form>
		</div>

	</div><!--/span-->
</div><!--/row-->
@endsection