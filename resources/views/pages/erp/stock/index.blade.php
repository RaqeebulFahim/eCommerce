<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/stock/_index.blade.php" was generated by ProBot AI.
* Date: 24/02/2025 14:05:41
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage Stock')
@section('style')


@endsection
@section('page')
<a href="{{route('stocks.create')}}">New Stock</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Product Id</th>
			<th>Transaction Type</th>
			<th>Quantity</th>
			<th>Updated At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($stocks as $stock)
		<tr>
			<td>{{$stock->id}}</td>
			<td>{{$stock->product_id}}</td>
			<td>{{$stock->transaction_type}}</td>
			<td>{{$stock->quantity}}</td>
			<td>{{$stock->updated_at}}</td>

			<td>
			<form action = "{{route('stocks.destroy',$stock->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('stocks.show',$stock->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('stocks.edit',$stock->id)}}"> Edit </a>
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
