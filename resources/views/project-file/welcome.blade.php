@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row text-center">
        <h1>
            Projects
        </h1>

        @auth
        <h3>
            <a href="{{route('project.create')}}" id>inserisci nuovo progetto</a>
        </h3>
        @endauth

        @foreach($projects as $project)
        <div class="col-4 my-3 element" >

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
                    <form action=" {{ route('project.destroy', $project -> id) }} " method="POST">

                        @csrf
                        @method('DELETE')
    
                        <input class="card-link" type="submit" value="X" id="delete-btn">
                    </form>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection