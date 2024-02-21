@extends('layouts.app')
@section('content')


<h1>
   Projects
</h1>

<ul>
    <a href="{{route('project.create')}}">inserisci nuovo progetto</a>
    @foreach($projects as $project)
        <li>
            {{ $project -> nome }}
        </li>
    
    @endforeach
</ul>

@endsection