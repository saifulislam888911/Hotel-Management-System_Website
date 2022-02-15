<?php

	require_once '../models/database.php';
		
		
	if(isset($_POST["book_Room"]))						// used in AddCustomer.php
	{
	
		$conn = mysqli_connect($serverName, $userName,  $password, $dbName);

		$customer_id=$_POST["customer_id"];
		
		$customer_name=$_POST["customer_name"];
		$email_address=$_POST["email_address"];
		$booked_room_no=$_POST["booked_room_no"];		
		$payment_status=$_POST["payment_status"];
		
		$room_status=$_POST["room_status"];
		$room_no=$_POST["room_no"];
		
		$query="UPDATE customer_information SET booked_room_no='$booked_room_no',payment_status='$payment_status' WHERE customer_id=$customer_id ";
		
		$result= mysqli_query($conn,$query);
		
		if($result)
		{
		$query2="UPDATE room_information SET customer_id='$customer_id',customer_name='$customer_name',payment_status='$payment_status',room_status='$room_status' WHERE room_no=$room_no";
		
			$result2= mysqli_query($conn,$query2);
			
		}
		else
		{
			echo "DB error";
		}

		
		
		//header("Location:../views/login.php");
		echo"
				<script>
				alert(' Thank you ,Your Booking is Successfull ');
			
				window.location.href='../views/manager_dashboard.php';
				</script>
				";
		
	}
	
?>
