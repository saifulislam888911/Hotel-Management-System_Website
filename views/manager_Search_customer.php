<?php
	
	$s = "localhost";
	$u = "root";
	$p = "";
	$d = "hotel_taj";
	
	$conn = mysqli_connect($s,$u,$p,$d);

if(isset($_GET["sk"]))
{	
	$key = mysqli_real_escape_string($conn,$_GET["sk"]);
	$query="
			SELECT * FROM customer_information 
			WHERE customer_name LIKE '%$key%'
			OR customer_id LIKE '%$key%' 
			OR customer_address LIKE '%$key%' 
			OR email_address LIKE '%$key%' 
			OR contact_no LIKE '%$key%'
	
			";
}
else{
		
		 echo  "<h3><u><i> write Search key words...  </i></u></h3>";
	}
	
	
	
//	$output = '';
	
//	$query="SELECT name FROM products WHERE customer_name LIKE '%$key%'";
	
	$result = mysqli_query($conn,$query) ;

?>


<!--********************************************-->
<div>


	<table class="table table-striped">
		
		
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Customer ID </u></th>
			<th><u> Customer Name </u></th>
			<th><u> Customer Address </u></th>
			<th><u> Email Address </u></th>
			<th><u> Contact No. </u></th>
			<th><u> Booked Room_No. </u></th>
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>	
			<th></th>
			
		</thead>
		
		<tbody>
			<?php
			
				if(mysqli_num_rows($result) > 0)
				{
			
					while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
								
								echo "<td>"."</td>";
								echo "<td>"."</td>";
									
									echo "<td>".$row["customer_id"]."</td>";
									echo "<td>".$row["customer_name"]."</td>";
									echo "<td>".$row["customer_address"]."</td>";
									echo "<td>".$row["email_address"]."</td>";
									echo "<td>".$row["contact_no"]."</td>";
									echo "<td>".$row["booked_room_no"]."</td>";
									echo "<td>".$row["payment_status"]."</td>";
									
								echo "<td>"."</td>";
								
		//**************************************************************************************************	
									echo '<td><a href="manager_ViewCustomerInfo.php?customer_id='.$row["customer_id"].'" class="btn btn-primary">View</a></td>';
									
									echo '<td><a href="manager_EditCustomer.php?customer_id='.$row["customer_id"].'" class="btn btn-success">Edit</a></td>';
								
									echo '<td><a href="manager_DeleteCustomer.php?customer_id='.$row["customer_id"].'" class="btn btn-danger">Delete</a></td>';

								
							echo "</tr>";
					
						}
						
				}


				else
					{
						 echo "<h3><u><i> ........ Search Data Not Found ........ </i></u></h3>" ;
					}
				
				
						
			?>
					
				</tbody>
				
			</table>
			
</div>
