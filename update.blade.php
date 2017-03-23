<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<center>

		<form method="POST" action="/update">
		{{ csrf_field() }}
			<div id="form">
				<div class="reg">
					<center>
					Registration Form
					</center>
				</div>
				@foreach($student as $stud)
					<div class="id">
						<input type="hidden" name="id" value="{{ $stud->id }}" required>
					</div> 
					<div class="name">
						<p> Name</p>
						<input type="text" name="fullname" placeholder="Full Name" value="{{ $stud->full_name }}"required>
					</div> 
					<div class="email">
						<p>Email</p>
						<input type="text" name="email_add" placeholder="Email" value="{{ $stud->email_add }}"required>
					</div>	
					<div class="Username">
						<p>Username</p>
						<input type="text" name="username" placeholder="user name" value="{{ $stud->user_name }}"required>
					</div>
				@endforeach
					<div class="update">
						<button>UPDATE</button>
					</div>
					<hr>
			</div>
		</form>	
	</center>	

</body>
	<style type="text/css">
		body{
			background: gray;
		}
		#form{
			margin-top: 50pt;
			border: 1px;
			border-radius: 5px;
			height: 400pt;
			width: 340pt;
			background: ;
			overflow: hidden;
		}
		.reg{
			font-family: lucida calligraphy;
			background: #696969;
			font-weight: bold;
			height: 35pt;
			font-size: 20pt;
			padding-top: 10pt;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
		.name p{
			color: black;
			font-family: tahoma;
			font-size: 16pt;
			margin-bottom: 3pt;
			margin-top: 10pt;
			text-align: center;
		}
		.name input{
			border-radius: 4pt;
			height: 23pt;
			font-family: tahoma;
			width: 90%;
			color: white;
			font-size: 13pt;
			text-align: center;
			background-color: #696969;
		}	
		.email p{
			color: black;
			font-family: tahoma;
			font-size: 16pt;
			margin-bottom: 3pt;
			margin-top: 10pt;
			text-align: center;
		}
		.email input{
			border-radius: 4pt;
			height: 23pt;
			font-family: tahoma;
			width: 90%;
			color: white;
			font-size: 13pt;
			text-align: center;
			background-color: #696969;
		}
		.Username p{
			color: black;
			font-family: tahoma;
			font-size: 16pt;
			margin-bottom: 3pt;
			margin-top: 10pt;
			text-align: center;
		}
		.Username input{
			border-radius: 4pt;
			height: 23pt;
			font-family: tahoma;
			width: 90%;
			color: white;
			font-size: 13pt;
			text-align: center;
			background-color: #696969;
		}
		.update button{
			height: 23pt;
			width: 60pt;
			border-radius: 3pt;
			font-family: tahoma;
			font-size: 10pt;
			background-color: #0033cc;
			color: white;
			margin-top: 20pt;
			font-weight: bolder;
		}
		hr{
			width: 80%;
			margin-top: 30pt;
		}

	</style>
</html>