<?php

	session_start();

	if(!isset($_SESSION["LoginUser"]))
	{
		
	}

 ?>



<html>

	<head>
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
		
	</head>
	
	<body  style="background-image:url(../storage/room_image/hotel.jpg);background-repeat: no-repeat;background-size: cover; background-size: 100% 100%; color: black; opacity: 0.7;font-weight: 700;">
		<div class="text-center">
		
			<h1 class="header"><i> MANAGEMENT-PANEL </i></h1>
			
		</div>
		
		
		
				<!--menu starts-->
		
		
		<div class="text-center">
		
			<a href="manager_dashboard.php" class="btn btn-primary">Dashboard</a>
			
			<a href="manager_AllEmployeeInfo.php" class="btn btn-info">All EMPLOYEE Information</a>
			<a href="manager_AddEmployee.php" class="btn btn-success">Add EMPLOYEE</a>
			
			<a href="manager_AllCustomerInfo.php" class="btn btn-info">All CUSTOMER Information</a>
			<a href="manager_AddCustomer.php" class="btn btn-success">Add CUSTOMER</a>
			
			<a href="manager_AllRoomInfo.php" class="btn btn-info">All ROOM Information</a>
			<a href="manager_AddRoom.php" class="btn btn-success">Add ROOM</a>
			
			<a href="manager_BookRoom.php" class="btn btn-warning">Book ROOM</a>
			
			<a href="index.php" class="btn btn-danger">Logout</a>	
			
		</div>
		
<br/>
<br/>
<br/>
<br/>
<br/>



				<!--menu ends-->


