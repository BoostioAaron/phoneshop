@extends('app')

@section('content')

<form method="post" action="{{ route('telefoons.store') }}">

    <div class="form-group">

        @csrf

        <label>Model</label>

        <input type="text" class="form-control" name="model"/>

    </div>

    <div class="form-group">

        <label>Fabrikant</label>

        <input type="text" class="form-control" name="fabrikant"/>

    </div>

    <div class="form-group">

        <label>Geheugen</label>

        <input type="text" class="form-control" name="geheugen"/>

    </div>

    <div class="form-group">

        <label>Prijs</label>

        <input type="text" class="form-control" name="prijs"/>

    </div>

    <button type="submit" class="btn btn-primary">Toevoegen</button>

</form>

@endsection
