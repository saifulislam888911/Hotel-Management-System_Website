<?php

	require_once '../models/database.php';
	
	if(isset($_POST["add_Room"]))					// used in AddRoom.php
		{
			insertRoom();
		}
	else if(isset($_POST["edit_Room"]))				// used in EditRoom.php
		{
			editRoom();
		}
		
	function getAllRoomInfo()						// used in AllRoomInfo.php
	{

		$query="SELECT * FROM room_information";
		
		$room_information=get($query);
		
		return $room_information;
		
	}
	
	function getRoom($room_no)              	    // used in EditRoom.php
	{
		
		$query = " SELECT * FROM room_information WHERE room_no=$room_no ";
		
//(prob)down**************************************************************************************		
		$room=get($query);
		
		return $room[0];
		
	}



//***********************************************************************************************	
	function deleteRoom($room_no)                // used in DeleteRoom.php
	{  
	
		$query="DELETE FROM room_information WHERE room_no=$room_no";
				
		$room=get($query);
			
		echo $query;
		
		execute($query);
			
		//header("Location:../views/guest_AllRoomInfo.php");
		echo"
				<script>
				alert(' Data is Successfully  Deleted ');
				window.location.href='../views/guest_AllRoomInfo.php';
				</script>
				";
		
	}
	
	
	
	function insertRoom()                        // used in AddRoom.php
	{
		
		$size=$_POST["size"];
		$num_of_bed=$_POST["num_of_bed"];
		$room_type=$_POST["room_type"];
		$rent_price=$_POST["rent_price"];	
		$room_status=$_POST["room_status"];

		
//file upload	 
//*************************************************************************************************		 
		$target_dir="../storage/Room_Image/";
		
        $target_file = $target_dir . basename($_FILES["room_image"]["name"]);
		
        $uploadOk = 1;
		
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
        move_uploaded_file($_FILES["room_image"]["tmp_name"], $target_file);
		
		//echo $target_file;		
//*************************************************************************************************

				
		$customer_id=$_POST["customer_id"];
		$customer_name=$_POST["customer_name"];
		$payment_status=$_POST["payment_status"];
		
		$query="INSERT INTO room_information VALUES(NULL,'$size','$num_of_bed','$room_type','$rent_price','$room_status','$target_file','$customer_id','$customer_name','$payment_status')";
		
		execute($query);
		
		//header('Location:../views/guest_AllRoomInfo.php');
		echo"
				<script>
				alert(' Data is Successfully  Added ');
				window.location.href='../views/guest_AllRoomInfo.php';
				</script>
				";
		
	}
	
	function editRoom()                          // used in EditRoom.php
	{	
	
		$room_no=$_POST["room_no"];
		$size=$_POST["size"];
		$num_of_bed=$_POST["num_of_bed"];
		$room_type=$_POST["room_type"];
		$rent_price=$_POST["rent_price"];
		$room_status=$_POST["room_status"];
		
		$target_file=$_POST["prev_image"];

//edit file upload	 
//*************************************************************************************************			
		if(file_exists($_FILES['room_image']['tmp_name']) || is_uploaded_file($_FILES['room_image']['tmp_name'])) 
		{
			$target_dir="../storage/Room_Image/";
			
			$target_file = $target_dir . basename($_FILES["room_image"]["name"]);
			
			$uploadOk = 1;
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			move_uploaded_file($_FILES["room_image"]["tmp_name"], $target_file);
			
			//echo 'No upload';
		}
//*************************************************************************************************

		
		$customer_id=$_POST["customer_id"];
		$customer_name=$_POST["customer_name"];
		$payment_status=$_POST["payment_status"];
		
//***********************************************************************************************	
		$query="UPDATE room_information SET size='$size',num_of_bed='$num_of_bed',room_type='$room_type',rent_price='$rent_price',room_status='$room_status',room_image='$target_file',customer_id='$customer_id',customer_name='$customer_name',payment_status='$payment_status' WHERE room_no=$room_no";

//************************************************************************************************
		echo $query;
		
		execute($query);
		
		//header('Location:../views/guest_AllRoomInfo.php');
		echo"
				<script>
				alert(' Data is Successfully  Edited ');
				window.location.href='../views/guest_AllRoomInfo.php';
				</script>
				";
		
	}
	
?>