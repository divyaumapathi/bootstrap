{{Form::label('UserName')}} &nbsp;&nbsp;&nbsp;&nbsp;
//
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('validation.js')}}"></script>
//<link href="css/bootstrap.min.css" rel="stylesheet">


<div class=" col-md-10">
		<br>
		<br>
		
			{{Form::label('UserName')}}
        
		</div>		
		<div class=" col-md-10">

	<br>
	<br>
	{{Form::label('Password')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>

	<div class="link1">
{{ HTML::link('loginform', 'Login')}}
</div>
<div class="link2">
{{ HTML::link('login', 'Register')}}
</div>




 