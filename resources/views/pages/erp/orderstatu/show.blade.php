<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/orderstatu/_show.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:32:18
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show OrderStatu')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('orderstatus.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$orderstatu->id}}</td></tr>
		<tr><th>Name</th><td>{{$orderstatu->name}}</td></tr>
		<tr><th>Created At</th><td>{{$orderstatu->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$orderstatu->updated_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
