@extends('master')
@section('main')
<html>
<head>
<script type="text/javascript">
	function upload()
	{
		alert('Uploaded Successfully');
	}
</script>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
      body
      {
        
      	background: darkgrey;
      }
      input.file
      {
      	font-size: 20px;
      	color:darkcyan;
      }
      label.category
      {
      	padding-left:30px;
      }
      label
      {
      	font-size: 20px;
      	color:darkcyan;
      }
      h1
      {
      	padding-bottom: 120px;
      	color:khaki;
      	padding-right: 80px;

      }
      
      .form2
      {
      	margin-top: -170px;
      }
      .form1
      {
      	margin-top:00px;
      }
     .search
     {
     	margin-top:00px;
     }
    </style>
</head>
<body>
<center><h1>Admin!!!</h1></center>

	<form action="" enctype="multipart/form-data" class="form1">
					  <div class="container">
					     <div class="row">
					     <div class="form-group">
					            <div class="col-md-offset-2">
					            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <label>Title</label><br>
                                 <input type="text" name="title" size="33">
                                 </div>
                                    </div><BR>
				       		  
					          <div class="form-group">
					              <div class="col-md-offset-2">
					                  <label class="category">Category</label><br>
							          <input type="text" name="categ" size="33">
							       </div>
							   </div>
                	                  <br><br>
                	          
                	          <div class="form-group">
				       		       <div class="col-md-offset-2">
                                       <input type="file" name="image" class="file"><br>
					               </div>
					          </div>

                	          <div class="col-md-offset-3">
					               <input type="submit" value="upload" class="btn  btn-danger" onclick="upload()">
					          </div>
	                                    <br>
				              
	      </div>
	          </div>
	    
	</form>
	<div class="search">
		<div class="col-md-offset-7">
	           <form action="coupon" method="post" class="form2">
	           <input type="text" name="coupon" id="cpon" required>
	           <input type="submit" value="Search" name="search" id="srch">
	           </form>
	    </div>
	</div>

	<div class="col-md-offset-7">
	       <form action="del_image" method="post" class="form3">
	       <input type="text" name="del_img" id="del" required>
	       <input type="submit" value="Remove" name="remove" id="rmve">
	       </form>
	</div>
    
	<script>
	var form=document.querySelector('form');
	var request=new XMLHttpRequest();
	form.addEventListener('submit',function(e)
	{
		e.preventDefault();
		var formdata=new FormData(form);
		request.open('post','submit');
		request.send(formdata);
	});
</script>
	  

            <!--{{Form::open(array('url'=>'submit','method'=>'get','class'=>"form-horizontal"))}}
	  		<input type="text" name="text" id="categ-id"></input>

	  		{{Form::submit('show' ,$attributes = array('id' => '1','class'=>"btn btn-success",'name'=>'1'))}}
            {{Form::close()}}-->



	<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>			      


</body>
</html>
@stop