@extends('layouts.app')
@section('content')


<h1>
   Projects
</h1>

<ul>
    @foreach($projects as $project)
        <li>
            {{ $project -> nome }}
        </li>
    
    @endforeach
</ul>

@endsection