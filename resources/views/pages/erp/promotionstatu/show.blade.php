<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/promotionstatu/_show.blade.php" was generated by ProBot AI.
* Date: 25/02/2025 13:33:41
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show PromotionStatu')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('promotionstatus.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$promotionstatu->id}}</td></tr>
		<tr><th>Name</th><td>{{$promotionstatu->name}}</td></tr>
		<tr><th>Created At</th><td>{{$promotionstatu->created_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
