@extends('master')
@section('main')
<html>
<head>
	<style type="text/css">
	 table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
</style>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{URL::asset('js/jquery.min.js')}}"/>
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script>
function remove1(id)
{	

	 $.ajax
    ({ 
        url: 'http://localhost:8080/ajaxreq',
        data: {"bookID": id},
        type: 'post',
        success: function(result)
        {
        	$('#'+id).remove();
        	alert('Removed Successfully');
        }
});
}
function change(id)
{

	$.ajax
	({
		url:'http://localhost:8080/ajax_edit',
		data:{'edit_bookId':id},
		type:'post',
		success:function(result)
		{
			 $("#update_id").val(id); 
			 $("#update_name").val(result[0].Name);
             $("#update_author").val(result[0].Author);
             $("#update_category").val(result[0].Category);
       
             $("#modal").modal('show');

        }
 
		
	});
	
}

</script>
</head>
<body>
<table>
		<tr>
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Book Category</th>
			<th>Author</th>
			<th>Edit</th>
			<th>Delete</th>

		</tr>
		@foreach($data as $result)
	    <tr id='{{$result->Id}}'>
		<td>{{$result->Id}}</td>
		<td>{{$result->Name}}</td>
		<td>{{$result->Category}}</td>
		<td>{{$result->Author}}</td>
		<td>
		<button type="button" onclick="remove1('{{$result->Id}}')">Delete</button>

		</td>
		<td><button type="button" onclick="change('{{$result->Id}}')" data-toggle="modal" data-target="#modal">Edit</button>
		 <td><!--<input type="button" value="delete">--></td>
		</tr>
		@endforeach
	</table>
	<input type="button" name="ssd" value="testtt" id="test" />
<div class="modal fade" id="modal">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
					<input type="hidden" value="" id="update_id"/>
				    		

						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">{{$result->Name}}</h4>
						</div>
						<div class="modal-body" id="body">
						<label>Id</label>
						<input type="text" id="new_id">
						<br>
						<label>Name</label>
						<input type="text" id="new_name">
						<br>
                        <label>Category</label>
						<input type="text" id="new_category">
						<br>
                        <label>Author</label>
						<input type="text" id="new_author">
						<br> 
	<button type="button" id="update_button">Update</button>
	
						</div>
					
						</div>
					</div>
				</div>
				

<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
	$('#test').click(function(){
		alert('hi');
	});

	$("#update_button").click(function(){
	
    var id= $("#new_id").val();	
    var name=$("#new_name").val();
    var author=$("#new_author").val();
    var category=$("#new_category").val();
    var old_id=$("#update_id").val();
	$.ajax({
			url:'http://localhost:8080/update_buk',
		data:{
			'bookId':id,
			'bookName':name,
			'bookCategory':category,
			'bookAuthor':author,
			'id':old_id
		},
		type:'post',
		success:function(result)
		{
			alert('Updated');
		}
	});
});	

});
</script>

</body>
</html>
@stop