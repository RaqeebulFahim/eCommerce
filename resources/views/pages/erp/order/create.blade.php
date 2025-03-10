<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/order/_create.blade.php" was generated by ProBot AI.
* Date: 24/02/2025 14:06:53
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create Order')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('orders.index')}}">Manage</a>
<form action="{{route('orders.store')}}" method ="post" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
	<label for="customer_id" class="col-sm-2 col-form-label">Customer</label>
	<div class="col-sm-10">
		<select class="form-control" name="customer_id" id="customer_id">
			@foreach($customers as $customer)
				<option value="{{$customer->id}}">{{$customer->name}}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="row mb-3">
	<label for="total_price" class="col-sm-2 col-form-label">Total Price</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="total_price" id="total_price" placeholder="Total Price">
	</div>
</div>
<div class="row mb-3">
	<label for="order_status_id" class="col-sm-2 col-form-label">Order_Status</label>
	<div class="col-sm-10">
		<select class="form-control" name="order_status_id" id="order_status_id">
			@foreach($order_statuss as $order_status)
				<option value="{{$order_status->id}}">{{$order_status->name}}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="row mb-3">
	<label for="payment_status_id" class="col-sm-2 col-form-label">Payment_Status</label>
	<div class="col-sm-10">
		<select class="form-control" name="payment_status_id" id="payment_status_id">
			@foreach($payment_statuss as $payment_status)
				<option value="{{$payment_status->id}}">{{$payment_status->name}}</option>
			@endforeach
		</select>
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
