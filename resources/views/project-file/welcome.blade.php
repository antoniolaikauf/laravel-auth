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
        <div class="col-4 my-3 element">

            <div class="card shadow  mb-5 bg-body rounded" style="height:100%">
                <!-- {{-- Link immagine faker che abbiamo preferito non mettere perchè non mostra immagini ma testo --}} -->
                <!-- {{-- <img src="{{ asset( $project -> img ) }}" alt=""> --}} -->
                <img src="{{ Vite::asset('public/img/img.crdownload') }}" alt="" class="p-3">
                <div class="card-body">
                    <h5 class="card-title">nome del progetto:{{ $project -> nome }}</h5>
                    <p class="card-text">{{ $project -> descrizione }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$project -> data_progetto}}</li>
                </ul>
                <div class="card-body">
                    <button type="button" class="btn btn-info">
                        <a href=" {{ route('project.show', $project -> id) }} " class="card-link">Card link</a>
                    </button>

                    @auth
                    <form action=" {{ route('project.destroy', $project -> id) }} " method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-warning my-3">Delete</button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection