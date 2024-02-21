@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row text-center">
        <h1>
            Projects
        </h1>


        <div class="row text-center my-3">

            <div class="card" style="height:100%">
                <img src="{{ Vite::asset('public/img/img.crdownload') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">nome del progetto:{{ $project -> nome }}</h5>
                    <p class="card-text">{{ $project -> descrizione }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$project -> data_progetto}}</li>
                </ul>
                <div class="card-body">
                    <a href=" {{ route('project.show', $project -> id) }} " class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

    </div>
</div>



    
@endsection