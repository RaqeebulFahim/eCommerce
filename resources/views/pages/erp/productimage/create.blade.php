<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/productimage/_create.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:32:46
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create ProductImage')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('productimages.index')}}">Manage</a>
<form action="{{route('productimages.store')}}" method ="post" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
	<label for="product_id" class="col-sm-2 col-form-label">Product</label>
	<div class="col-sm-10">
		<select class="form-control" name="product_id" id="product_id">
			@foreach($products as $product)
				<option value="{{$product->id}}">{{$product->name}}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="row mb-3">
	<label for="image_name" class="col-sm-2 col-form-label">Image Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="image_name" id="image_name" placeholder="Image Name">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
