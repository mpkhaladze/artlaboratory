@extends('layouts.admin')
@section('content')


<div class="container">
	<form method="POST" enctype="multipart/form-data" action="{{url('admin/items')}}">
		<div class="form-horizontal col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<fieldset>
				<legend>პროდუქტის დამატება</legend>
				
				<!-- Text input-->
					<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					  <label class="col-md-4 control-label">Name</label>  
					  <div class="col-md-6">
					 	 <input  name="name" value="" type="text" placeholder="name" class="form-control input-md">  
					  </div>
					</div>
									<!-- Text input-->
					<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					  <label class="col-md-4 control-label">Weight</label>  
					  <div class="col-md-6">
					 	 <input  name="weight" value="" type="text" placeholder="weight" class="form-control input-md">  
					  </div>
					</div>
									<!-- Text input-->
					<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					  <label class="col-md-4 control-label">Length</label>  
					  <div class="col-md-6">
					 	 <input  name="length" value="" type="text" placeholder="length" class="form-control input-md">  
					  </div>
					</div>
									<!-- Text input-->
					<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
					  <label class="col-md-4 control-label">Width</label>  
					  <div class="col-md-6">
					 	 <input  name="width" value="" type="text" placeholder="width" class="form-control input-md">  
					  </div>
					</div>
	          		 <!-- teachers_select -->
			        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            <label class="col-md-4 control-label">Materials</label>  
			            <div class="col-md-6">
			               <select class="form-control" id="materials_select" name="material_id">
			                 <option></option>
			                 	@<?php foreach ($materials as $material): ?>
			                     	<option value="{{$material->id}}">{{$material->name}}</option>
			                	<?php endforeach ?>
			               </select>
			            </div>
			        </div>

			        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            <label class="col-md-4 control-label">Authors</label>  
			            <div class="col-md-6">
			               <select class="form-control" id="authors_select" name="author_id">
			                 <option></option>
			                 	@<?php foreach ($authors as $author): ?>
			                     	<option value="{{$author->id}}">{{$author->name}}</option>
			                	<?php endforeach ?>
			               </select>
			            </div>
			        </div>
			        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            <label class="col-md-4 control-label">Store</label>  
			            <div class="col-md-6">
			               <select class="form-control" id="stores_select" name="store_id">
			                 <option></option>
			                 	@<?php foreach ($stores as $store): ?>
			                     	<option value="{{$store->id}}">{{$store->name}}</option>
			                	<?php endforeach ?>
			               </select>
			            </div>
			        </div>
			        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            <label class="col-md-4 control-label">Kinds</label>  
			            <div class="col-md-6">
			               <select class="form-control" id="kinds_select" name="kind_id">
			                 <option></option>
			                 	@<?php foreach ($kinds as $kind): ?>
			                     	<option value="{{$kind->id}}">{{$kind->name}}</option>
			                	<?php endforeach ?>
			               </select>
			            </div>
			        </div>
			        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            <label class="col-md-4 control-label">Categories</label>  
			            <div class="col-md-6">
			               <select class="form-control" id="categories_select" name="category_id">
			                 <option></option>
			                 	@<?php foreach ($categories as $category): ?>
			                     	<option value="{{$category->id}}">{{$category->name}}</option>
			                	<?php endforeach ?>
			               </select>
			            </div>
			        </div>
			        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            <label class="col-md-4 control-label">Description</label>  
			            <div class="col-md-6">
			               <textarea name="description" value="" type="text" placeholder="description" class="form-control" rows="3"></textarea>
			            </div>
			        </div>
			        <!-- file upload -->
			          <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-5">
					    <label class="col-xs-12 col-sm-6 col-md-6 col-lg-4">File input</label>
					    <input class="col-xs-12 col-sm-6 col-md-6 col-lg-8" type="file" name="photo-1">
					  </div>
						<!-- Button -->
				<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label class="col-sm-8 col-md-8 col-lg-8 control-label" for="singlebutton"></label>
					<div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary">დამატება</button>
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</div>
			</fieldset>
		</div>
	</form>
</div>





@endsection