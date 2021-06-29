@extends('app')

@section('content')

<form method="post" action="{{ route('telefoons.update', $telefoon->id) }}">

    @method('PATCH')

    <div class="form-group">

        @csrf

        <label>Model</label>

        <input type="text" class="form-control" name="model" value="{{$telefoon->model}}"/>

    </div>

    <div class="form-group">

        <label>Fabrikant</label>

        <input type="text" class="form-control" name="fabrikant" value="{{$telefoon->fabrikant}}"/>

    </div>

    <div class="form-group">

        <label>Geheugen</label>

        <input type="text" class="form-control" name="geheugen"value="{{$telefoon->geheugen}}"/>

    </div>

    <div class="form-group">

        <label>Prijs</label>

        <input type="text" class="form-control" name="prijs" value="{{$telefoon->prijs}}"/>

    </div>

    <button type="submit" class="btn btn-primary">Wijzigen</button>

</form>

@endsection
