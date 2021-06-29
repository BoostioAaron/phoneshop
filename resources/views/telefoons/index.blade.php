@extends('app')

@section('content')

<table class="table">
<head>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>
    <thead>
    <a href="{{ route('telefoons.create')}}" class="btn btn-primary">Create</a>
    <tr>

        <td>Model</td>

        <td>Fabrikant</td>

        <td>Geheugen</td>

        <td>Prijs</td>

        <td>Actie</td>

    </tr>

    </thead>

    <tbody>

    @foreach($telefoons as $telefoon)

    <tr>

        <td>{{$telefoon->model}}</td>

        <td>{{$telefoon->fabrikant}}</td>

        <td>{{$telefoon->geheugen}}</td>

        <td>{{$telefoon->prijs}}</td>

        <td><a href="{{ route('telefoons.edit',$telefoon->id)}}" class="btn btn-primary">Wijzig</a></td>
        <form action="{{ route('telefoons.destroy',$telefoon->id)}}" method="post">

            @csrf

            @method('DELETE')

            <td><button class="btn btn-danger" type="submit">Verwijder</button></td>

        </form>


    </tr>

    @endforeach

    </tbody>

</table>

@endsection

