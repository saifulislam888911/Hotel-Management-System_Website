<?php

	require_once '../models/database.php';
	
	if(isset($_POST["add_Customer"]))						// used in AddCustomer.php
	{
		insertCustomer();
	}
	else if(isset($_POST["edit_Customer"]))					// used in EditCustomer.php
	{
		editCustomer();
	}
	 
	
	function getAllCustomerInfo()							// used in AllCustomerInfo.php
	{
		$query ="SELECT * FROM customer_information";
		
		$customer_information = get($query);
		
		return $customer_information;
		
	}
	
	function getCustomer($customer_id)						// used in EditCustomer.php
	{
		
		$query="SELECT * FROM customer_information WHERE customer_id=$customer_id";

//***********************************************************************************************		
		$customer=get($query);
		
		return $customer[0];
		
	}
	
	
	
//***********************************************************************************************	
	function deleteCustomer($customer_id)					// used in DeleteCustomer.php
	{  
	
		$query="DELETE FROM customer_information WHERE customer_id=$customer_id";
				
		$customer=get($query);
			
		echo $query;
		
		execute($query);
			
		//header("Location:../views/manager_AllCustomerInfo.php");
		echo"
				<script>
				alert(' Data is Successfully  Deleted ');
				window.location.href='../views/manager_AllCustomerInfo.php';
				</script>
				";
		
	}
	
	
	
//***********************************************************************************************	
	function insertCustomer()								// used in AddCustomer.php
	{	
	
		$customer_name=$_POST["customer_name"];
		$customer_address=$_POST["customer_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$booked_room_no=$_POST["booked_room_no"];		
		$payment_status=$_POST["payment_status"];


//file upload	 
//*************************************************************************************************		 
		$target_dir="../storage/Customer_Image/";
		
        $target_file = $target_dir . basename($_FILES["customer_image"]["name"]);
		
        $uploadOk = 1;
		
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
        move_uploaded_file($_FILES["customer_image"]["tmp_name"], $target_file);
		
		//echo $target_file;		
//*************************************************************************************************

		
		$query="INSERT INTO customer_information VALUES(NULL,'$customer_name','$customer_address','$email_address','$contact_no','$booked_room_no','$payment_status','$target_file')";
		
		execute($query);
		
		//header("Location:../views/manager_AllCustomerInfo.php");
		echo"
				<script>
				alert(' Data is Successfully  Added ');
				window.location.href='../views/manager_AllCustomerInfo.php';
				</script>
				";
		
	}
	
//************************************************************************************************	
	function editCustomer()									// used in EditCustomer.php
	{
		
		$customer_id=$_POST["customer_id"];
		$customer_name=$_POST["customer_name"];
		$customer_address=$_POST["customer_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$booked_room_no=$_POST["booked_room_no"];		
		$payment_status=$_POST["payment_status"];
		
		$target_file=$_POST["prev_image"];

//file upload	 
//*************************************************************************************************		 
		if(file_exists($_FILES['customer_image']['tmp_name']) || is_uploaded_file($_FILES['customer_image']['tmp_name'])) 
		{
			$target_dir="../storage/Customer_Image/";
			
			$target_file = $target_dir . basename($_FILES["customer_image"]["name"]);
			
			$uploadOk = 1;
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			move_uploaded_file($_FILES["customer_image"]["tmp_name"], $target_file);
			
			//echo 'No upload';
		}
//*************************************************************************************************		

//************************************************************************************************		
		$query="UPDATE customer_information SET customer_name='$customer_name',customer_address='$customer_address',email_address='$email_address',contact_no='$contact_no',booked_room_no='$booked_room_no',payment_status='$payment_status',customer_image='$target_file' WHERE customer_id=$customer_id";

//************************************************************************************************
		echo $query;
		
		execute($query);
		
		//header("Location:../views/manager_AllCustomerInfo.php");
		echo"
				<script>
				alert(' Data is Successfully  Edited ');
				window.location.href='../views/manager_AllCustomerInfo.php';
				</script>
				";
		
	}

?>



		