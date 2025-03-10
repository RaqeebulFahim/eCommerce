<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/transactiontype/_index.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:36:47
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage TransactionType')
@section('style')


@endsection
@section('page')
<a href="{{route('transactiontypes.create')}}">New TransactionType</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Factor</th>
			<th>Created At</th>
			<th>Updated At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($transactiontypes as $transactiontype)
		<tr>
			<td>{{$transactiontype->id}}</td>
			<td>{{$transactiontype->name}}</td>
			<td>{{$transactiontype->factor}}</td>
			<td>{{$transactiontype->created_at}}</td>
			<td>{{$transactiontype->updated_at}}</td>

			<td>
			<form action = "{{route('transactiontypes.destroy',$transactiontype->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('transactiontypes.show',$transactiontype->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('transactiontypes.edit',$transactiontype->id)}}"> Edit </a>
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
