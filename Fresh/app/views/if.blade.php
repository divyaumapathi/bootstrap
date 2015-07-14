@extends('master')
@section('main')
<h1>Home Page</h1>
<ul>
<h3>Names</h3>
@if($dat->count)
return 'not empty';
@else
return 'empty';
@stop