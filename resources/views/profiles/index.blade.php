@extends('profiles.layout')
@section('centent')
<div class="pull-left">
<h2> Profile Curd</h2>
</div>
<div class ="row">
<div class ="col-lg-1 margin-tb">
<div class ="pull-right">
<a class="btn btn-success" href="{{route('profiles.create')}}"> Create new profile </a>
</div>
</div>
</div>
@if($message=Session::get('success'))
<div class ="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Identifiant</th>
<th>Login</th>
<th>Email</th>
<th>Password</th>
<th>Phone</th>
<th>nickname</th>
<th width="200px">Action</th>
</tr>
@foreach($profiles as $profile)
<tr>

<td>{{$profile->id}}</td>
<td>{{$profile->login}}</td>
<td>{{$profile->email}}</td>
<td>{{$profile->password}}</td>
<td>{{$profile->phone}}</td>
<td>{{$profile->nickname}}</td>
<td><form action="{{route('profiles.destroy',$profile->id)}}"method="POST">
<a class="btn btn-info" href="{{route('profiles.show',$profile->id)}}"> Show</a>
<a class="btn btn-primary" href="{{route('profiles.edit',$profile->id)}}">Edit</a>
@csrf 
@method('DELETE')
<button type="submit" class="btn btn-danger" > Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
