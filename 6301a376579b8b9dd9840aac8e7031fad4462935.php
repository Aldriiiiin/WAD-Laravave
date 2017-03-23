<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
		    border-collapse: collapse;
		    width: 70%;
		    margin: 0 auto;
		}
		th, td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: #4CAF50;
		    color: white;
		}
		.del{
			border: 1px solid ;
			text-align: center;
			width: 60%;
			background-color: #ff9966;
			border-radius: 3px;
		}
		.del a{
			text-decoration: none;
			color: black;
			font-family: Lucida Calligraphy;
		}
		.edit{
			border: 1px solid ;
			text-align: center;
			width: 60%;
			background-color: lightblue;
			border-radius: 3px;
		}
		.edit a{
			text-decoration: none;
			color: black;
			font-family: Lucida Calligraphy;
		}
		.dels a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>

	<table>
		<tr>
	    	<th>ID</th>
	    	<th>Full Name</th>
	    	<th>Email</th>
	    	<th>Username</th>
	    	<th>
	    	<div class="dels">
	    		<a href="/index"> Add </a>
	    	</div>
	    	</th>	
	  	</tr>
		<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  	<tr>
			<td> 1500-00<?php echo e($stud->id); ?>	</td>
			<td> <?php echo e($stud->full_name); ?>	</td>
			<td> <?php echo e($stud->email_add); ?>	</td>
			<td> <?php echo e($stud->user_name); ?>	</td>
			
			<td id="botun"> 
				<div class="del">
					<a href="/delete/ <?php echo e($stud->id); ?>"> Delete </a>
				</div>	
				<div class="edit">
					<a href="/edit/ <?php echo e($stud->id); ?>"> Edit </a>
				</div>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
	</table>
</body>
</html>