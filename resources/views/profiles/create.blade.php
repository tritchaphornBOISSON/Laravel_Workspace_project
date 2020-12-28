@extends('profiles.layout')
@section('content')
<div class="row">
<div class ="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Profile</h2>
</div>
<div class ="pull-right">
<a class="btn btn-primary" href="{{route('profiles.index')}}">Back </a>
</div>
</div>
</div>
@if($errors->any())
<div class ="alert alert-danger">
<strong> Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach($errors->all() as $error)
<li> {{$error}}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{route('profiles.store')}}" method="POST">
@csrf 
<div class="row">
<div class="col-xs-12 clo -sm-12 col-md-12">
<div class ="form-group">
<strong> login:</strong>
<input type="text" name="login" class="form-control" placeholder="login" required>
</div>
</div>
<div class="col-xs-12 clo -sm-12 col-md-12">
<div class ="form-group">
<strong> email:</strong>
<input type="text" name="email" class="form-control" placeholder="email" required>
</div>
</div>
<div class="col-xs-12 clo -sm-12 col-md-12">
<div class ="form-group">
<strong> password:</strong>
<input type="password" name="password" class="form-control" placeholder="password" required>
</div>
</div>
<div class="col-xs-12 clo -sm-12 col-md-12">
<div class ="form-group">
<strong> phone number:</strong>
<input type="text" name="phone" class="form-control" placeholder="phone"required>
</div>
</div>
<div class="col-xs-12 clo -sm-12 col-md-12">
<div class ="form-group">
<strong> nickname:</strong>
<input type="text" name="nickname" class="form-control" placeholder="nickname">
</div>
</div>
<div class="col-xs-12  col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary"> Submit </button>
</div>
</div>
</form>
@endsection
