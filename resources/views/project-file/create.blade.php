@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row text-center">
        <h1>
            Projects:crea nuovo progetto
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

            <label for="nome" class="form-label"> inserisci nome progetto</label>
            <input type="text" id="nome" name="nome" class="form-control">
            <label for="descrizione" class="form-label"> inserisci la descrizione</label>
            <input type="text" id="descrizione" name="descrizione" class="form-control">
            <label for="data_progetto" class="form-label"> inserisci data progetto</label>
            <input type="date" name="data_progetto" id="data_progetto" class="form-control">
            <input type="submit" value="crea">
        </form>
    </div>
</div>





@endsection