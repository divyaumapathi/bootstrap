@extends('master')
@section('xyz')
<h2>Submit the form</h2>
{{Form::open()}}
{{Form::label('name','your name')}}
{{Form::text('name')}}
{{Form::submit('submit')}}
{{Form::close()}}
@stop