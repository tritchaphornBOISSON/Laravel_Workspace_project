@extends('profiles.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class ="pull-left">
<h2>Edit Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('profiles.index')}}"> Back</a>
</div>
</div>
</div>
@if($errors->any())
<div class="alert alert-danger">
<strong> Whopps!</strong>There were some problems with your input.<br><br>
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{route('profiles.update',$profile->id)}}" method="POST">
@csrf 
@method('PUT')
<div class="row">
<div class ="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>login:</strong>
<input type="text" name="login" value="{{$profile->login}}" class="form-control">
</div>
</div>
<div class ="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>email:</strong>
<input type="text" name="email" value="{{$profile->email}}" class="form-control">
</div>
</div>
<div class ="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>password:</strong>
<input type="password" name="password" value="{{$profile->password}}" class="form-control">
</div>
</div>
<div class ="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>phone:</strong>
<input type="text" name="phone" value="{{$profile->phone}}" class="form-control">
</div>
</div>
<div class ="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nickname:</strong>
<input type="text" name="nickname" value="{{$profile->nickname}}" class="form-control">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">submit </button>
</div>
</div>
</form>
@endsection