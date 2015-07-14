@extends('master')
@section('main')
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Home Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript">
  function colorchange()
  {
    document.getElementById('bdy').background=pink;
  }
  </script>

</head>
<style>
	.first-column
	{
		float:left;
	}
	.second-column
	{
		float:right;

	}
	body
	{
		background:#FFCC66 !important;
	}
	h1
	{
		color:red;
		margin-left:500px;

	}
</style>
<body id="bdy">

<div class="form2 col-md-offset-9">

{{Form::open(array('url'=>'search','method'=>'post'))}}
<div class="form-group">
<br>
       {{Form::text('srchtxt','',$attributes = array('id' => 'srchtxt'))}}
       	{{Form::submit('Search',$attributes = array('id' => 'srch','class'=>"btn btn-danger"))}}

   </div>
   {{Form::close()}}
</div>

<div class="form3 col-md-offset-9">
{{Form::open(array('url'=>'update','method'=>'post'))}}
<div class="form-group">
<br>
       {{Form::text('serchtxt','',$attributes = array('id' => 'serchtxt'))}}
      
      <div id="txtarea"> {{ Form::textarea('txtarea')}}</div>
        {{Form::submit('Update',$attributes = array('id' => 'updte','class'=>"btn btn-danger"))}}

   </div>
   {{Form::close()}}
</div>



<h1> STICKY NOTE!!! </h1>



<br><br>
<div class="container">
   <div class="row">
   <br>
   <div class="well"style="height:400px;width:1000px">
       <div class="modal-body">
       <div class="first-column">
   	   <div class="well col-md-offset-3 col-md-12" style="height:280px;width:420px;background:#3399CC" >
	       {{Form::open(array('url'=>'nte','method'=>'post','id'=>'form','class'=>"form-horizontal"))}}
	       <div class="form-group">
	       
              &nbsp;&nbsp;&nbsp;  {{Form::text('name','',$attributes = array('id' => 'usrnme','placeholder'=>'Name','required'=>'required'))}}

	   </div>

	      {{ Form::textarea('textarea') }}
	       </div>
	   </div>
    </div>
    
      <div class="form-group col-md-offset-8">    
       <button type="button" id="mnth"style="border-radius:4px;height:43px;background:#3399CC">
       	Month
       	{{ Form::selectMonth('mnth') }}

    </button>
    <br>
    <br>
<div class="form-group">
       <button type="button" id="day"style="border-radius:4px;height:43px;background:#3399CC">
       	Day
       	<div class="day" style="width:143px">
       	{{Form::text('day','',$attributes = array('id' => 'day','required'=>'required'))}}
         </div>   
    </button>
    </div>
       <button type="button" style="border-radius:4px;height:43px;background:#3399CC;width:158px">
       	Year
       	{{Form::text('year','',$attributes = array('id' => 'year','required'=>'required'))}}
       	</button>
       	   <div class="form-group col-md-offset-2">
           <div id="save">
       	   <br>
       	{{Form::submit('Save',$attributes = array('id' => 'sbmt','class'=>"btn btn-danger"))}}
      </div>
       </div>
       {{Form::close()}}
    </div>
    </div>
</div>
   </div>

</div>
<input type="button" name="color" onclick="colorchange()" value="pink">
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('underscore.js')}}"></script>
<script src="{{URL::asset('backbone.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('validation.js')}}"></script>
<script src="{{URL::asset('stickView.js')}}"></script>
</body>
</html>
@stop