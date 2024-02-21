@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <h1>
            Projects
        </h1>
        <a href="{{route('project.create')}}">inserisci nuovo progetto</a>

        @foreach($projects as $project)
        <div class="col-4 my-3">
            
            <div class="card" style="width: 18rem; height:100%">
                <img src="{{ Vite::asset('resources/img/img.crdownload') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">nome del progetto:{{ $project -> nome }}</h5>
                    <p class="card-text">{{ $project -> descrizione }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$project -> data_progetto}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection