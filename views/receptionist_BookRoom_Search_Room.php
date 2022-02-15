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
			SELECT * FROM room_information 
			WHERE customer_name LIKE '%$key%'
			OR customer_id LIKE '%$key%' 
			OR payment_status LIKE '%$key%' 
			OR room_no LIKE '%$key%' 
			OR size LIKE '%$key%'
			OR num_of_bed LIKE '%$key%'
			OR rent_price LIKE '%$key%'
			OR room_status LIKE '%$key%'
			OR room_type LIKE '%$key%'
	
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


	<table class="table table-striped" >
	
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Room No. </u></th>
			<th><u> Room_Size(in Square) </u></th>
			<th><u> Number of Bed </u></th>
			<th><u> Room Type </u></th>
			<th><u> Rent_Price(per Day) </u></th>
			<th><u> Room Status	</u></th>
			<th><u> Customer ID </u></th>
			<th><u> Customer Name </u></th>
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
									
									echo "<td>".$row["room_no"]."</td>";
									echo "<td>".$row["size"]."</td>";
									echo "<td>".$row["num_of_bed"]."</td>";
									echo "<td>".$row["room_type"]."</td>";
									echo "<td>".$row["rent_price"]."</td>";
									echo "<td>".$row["room_status"]."</td>";
									echo "<td>".$row["customer_id"]."</td>";
									echo "<td>".$row["customer_name"]."</td>";
									echo "<td>".$row["payment_status"]."</td>";
									
								echo "<td>"."</td>";
								
			//**************************************************************************************************												
									echo '<td><a href="receptionist_ViewRoomInfo.php?room_no='.$row["room_no"].'" class="btn btn-primary">View</a></td>';
									
														
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
