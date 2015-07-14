@extends('master')
@section('main')
<html>
	<head>
		<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
	</head>
	<style type="text/css">
        .mod
        {
          
            margin-top: 300px !important;

        }
	</style>
	<body>
		         2 states<br>
				<input type="button" value="view Details" data-toggle="modal" data-target="#modal" >
				<div class="modal fade" id="modal">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">2 states</h4>
						</div>
						<div class="modal-body">
						<p>Author:Chetan Bhagat</p>
						<p>Category:Love</p>
						</div>
					
						</div>
					</div>
				</div>
				
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

			</body>
</html>
@stop