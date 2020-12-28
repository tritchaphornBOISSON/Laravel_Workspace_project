
@extends('reservations.parent')

           

@section('main')



<div align="right">
	<a href="{{ route('reservations.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show reservation</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $reservation->date_debut }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $reservation->date_fin }}

            </div>

        </div>

    </div>

@endsection