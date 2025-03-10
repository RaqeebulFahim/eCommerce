<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/orderstatu/_edit.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:32:18
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Edit OrderStatu')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('orderstatus.index')}}">Manage</a>
<form action="{{route('orderstatus.update',$orderstatu)}}" method ="post" enctype="multipart/form-data">
@csrf
@method("PUT")
<div class="row mb-3">
	<label for="name" class="col-sm-2 col-form-label">Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="name" value="{{$orderstatu->name}}" id="name" placeholder="Name">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
@endsection
@section('script')


@endsection
