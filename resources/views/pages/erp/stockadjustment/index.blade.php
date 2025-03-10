<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/stockadjustment/_index.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:36:06
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage StockAdjustment')
@section('style')


@endsection
@section('page')
<a href="{{route('stockadjustments.create')}}">New StockAdjustment</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Product Id</th>
			<th>Adjustment Type Id</th>
			<th>Quantity Adjusted</th>
			<th>Reason</th>
			<th>Adjusted By</th>
			<th>Created At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($stockadjustments as $stockadjustment)
		<tr>
			<td>{{$stockadjustment->id}}</td>
			<td>{{$stockadjustment->product_id}}</td>
			<td>{{$stockadjustment->adjustment_type_id}}</td>
			<td>{{$stockadjustment->quantity_adjusted}}</td>
			<td>{{$stockadjustment->reason}}</td>
			<td>{{$stockadjustment->adjusted_by}}</td>
			<td>{{$stockadjustment->created_at}}</td>

			<td>
			<form action = "{{route('stockadjustments.destroy',$stockadjustment->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('stockadjustments.show',$stockadjustment->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('stockadjustments.edit',$stockadjustment->id)}}"> Edit </a>
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
