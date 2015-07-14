@extends('master')

@section('sidebar')
    

    <p>This is appended to the master sidebar.</p>
@stop

@section('main')
    
    <ul>
    @foreach($authors as $author)
    <li>{{author->name}}</li>
    @endforeach
    </ul>
@stop