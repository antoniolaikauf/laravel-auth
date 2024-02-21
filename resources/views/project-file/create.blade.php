@extends('layouts.app')
@section('content')


<h1>
    Projects:nuovo
</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('project.edit')}}" method="POST">
    @csrf
    @method('POST')
    <label for="nome"> inserisci nome progetto</label>
    <input type="text" id="nome" name="nome">

    <label for="descrizione"> inserisci la descrizione</label>
    <input type="text" id="descrizione" name="descrizione">

    <label for="data_progetto"> inserisci data progetto</label>
    <input type="date" name="data_progetto" id="data_progetto">
    <input type="submit" value="crea">
</form>


@endsection