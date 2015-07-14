<html>
<head>
	<style type="text/css">
	.dsv
	{
		 
		 width: 300px;
    height: 100px;    
    padding: 50px;
    border: 1px solid silver;
    background: bisque;
    font-family: Comic Sans MS;
    color:deeppink;

	}
	.asd
	{
    width: 400px;
    height: 300px;    
    padding: 50px;
    border: 1px solid papayawhip;
    background: silver;

			}
			.agentdesks
			{
				width: 500px;
				background: palevioletred;
				border-radius: 6px;
				height:30px;

			}
			center
			{
				font-size: 20px;
			}
			.hi
			{
				font-size: 33px;
				color:#CC3333;
			}
	</style>
</head>
<body>
<div class="agentdesks">
<center> Agentdesks</center>
    
     </div>
     <div class="asd">
       <div class="hi">
        Hey,

       </div>
	<div class="dsv">
		To reset your password, complete this form: {{ URL::to('password_change') }}.<br/>
	    <br>This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
		
	</div>
</div>
</body>
</html