<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/purchasedetail/_index.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:34:04
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage PurchaseDetail')
@section('style')


@endsection
@section('page')
<a href="{{route('purchasedetails.create')}}">New PurchaseDetail</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Purchase Id</th>
			<th>Product Id</th>
			<th>Quantity</th>
			<th>Cost Price</th>
			<th>Subtotal</th>
			<th>Created At</th>
			<th>Updated At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($purchasedetails as $purchasedetail)
		<tr>
			<td>{{$purchasedetail->id}}</td>
			<td>{{$purchasedetail->purchase_id}}</td>
			<td>{{$purchasedetail->product_id}}</td>
			<td>{{$purchasedetail->quantity}}</td>
			<td>{{$purchasedetail->cost_price}}</td>
			<td>{{$purchasedetail->subtotal}}</td>
			<td>{{$purchasedetail->created_at}}</td>
			<td>{{$purchasedetail->updated_at}}</td>

			<td>
			<form action = "{{route('purchasedetails.destroy',$purchasedetail->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('purchasedetails.show',$purchasedetail->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('purchasedetails.edit',$purchasedetail->id)}}"> Edit </a>
				@method('DELETE')
				@csrf
				<input type = "submit" class="btn btn-danger" name = "delete" value = "Delete" />
			</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
@section('script')


@endsection
