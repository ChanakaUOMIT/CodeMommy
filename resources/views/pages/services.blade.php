@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis vitae odio labore ipsum tempora sunt adipisci, libero beatae mollitia recusandae distinctio molestias id inventore sint hic voluptatibus, quibusdam dolore ad!</p>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}} </li>
            @endforeach
        </ul>
    @endif

@endsection