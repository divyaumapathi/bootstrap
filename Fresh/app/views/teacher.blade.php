@extends('master')
@section('main')
<h1>Home Page</h1>
<ul>
<h3>Names</h3>
    @foreach($dat as $author)
    <li>{{$author->Name}}</li>
    @endforeach
  <h3>Course</h3>
    @foreach($dat as $author)
    <li>{{$author->Course}}</li>
    @endforeach
    </ul>

@stop