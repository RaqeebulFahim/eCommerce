<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/purchase/_edit.blade.php" was generated by ProBot AI.
* Date: 24/02/2025 14:07:29
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Edit Purchase')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('purchases.index')}}">Manage</a>
<form action="{{route('purchases.update',$purchase)}}" method ="post" enctype="multipart/form-data">
@csrf
@method("PUT")
<div class="row mb-3">
	<label for="supplier_id" class="col-sm-2 col-form-label">Supplier</label>
	<div class="col-sm-10">
		<select class="form-control" name="supplier_id" id="supplier_id">
			@foreach($suppliers as $supplier)
				@if($supplier->id==$purchase->supplier_id)
					<option value="{{$supplier->id}}" selected>{{$supplier->name}}</option>
				@else
					<option value="{{$supplier->id}}">{{$supplier->name}}</option>
				@endif
			@endforeach
		</select>
	</div>
</div>
<div class="row mb-3">
	<label for="total_amount" class="col-sm-2 col-form-label">Total Amount</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="total_amount" value="{{$purchase->total_amount}}" id="total_amount" placeholder="Total Amount">
	</div>
</div>
<div class="row mb-3">
	<label for="purchase_date" class="col-sm-2 col-form-label">Purchase Date</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="purchase_date" value="{{$purchase->purchase_date}}" id="purchase_date" placeholder="Purchase Date">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
@endsection
@section('script')


@endsection
