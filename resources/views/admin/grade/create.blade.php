@extends('layouts.admin')


@section('content')
<div class="page-header">
    <h3>增加年级</h3>
</div>
<form action="{{ url('/admin/grade') }}" method="post" class="form-horizontal" >
	@include('admin.grade.form')
	<div class="form-group" style="">
	    <div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-2">
	    	<button class="btn btn-primary" type="submit">确定</button>
	    </div>
	</div>
</form>
@endsection
