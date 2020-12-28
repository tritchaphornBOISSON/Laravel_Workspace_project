@extends('annonces.parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('annonces.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/img/{{ $data->picture }}" class="img-thumbnail" />
	<h3>Title - {{ $data->title }} </h3>
	<h3>Category - {{ $data->category }}</h3>
	<h3>Description - {{ $data->description }}</h3>
	<h3>Price - {{ $data->price }}</h3>
	<h3>Location - {{ $data->location }}</h3>
</div>
@endsection
