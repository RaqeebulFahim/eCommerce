<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/stockadjustment/_create.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:36:06
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create StockAdjustment')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('stockadjustments.index')}}">Manage</a>
<form action="{{route('stockadjustments.store')}}" method ="post" enctype="multipart/form-data">
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
	<label for="adjustment_type_id" class="col-sm-2 col-form-label">Adjustment_Type</label>
	<div class="col-sm-10">
		<select class="form-control" name="adjustment_type_id" id="adjustment_type_id">
			@foreach($adjustment_types as $adjustment_type)
				<option value="{{$adjustment_type->id}}">{{$adjustment_type->name}}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="row mb-3">
	<label for="quantity_adjusted" class="col-sm-2 col-form-label">Quantity Adjusted</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="quantity_adjusted" id="quantity_adjusted" placeholder="Quantity Adjusted">
	</div>
</div>
<div class="row mb-3">
	<label for="reason" class="col-sm-2 col-form-label">Reason</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="reason" id="reason" placeholder="Reason">
	</div>
</div>
<div class="row mb-3">
	<label for="adjusted_by" class="col-sm-2 col-form-label">Adjusted By</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="adjusted_by" id="adjusted_by" placeholder="Adjusted By">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
