<?php 

	include 'guest_Header.php';
	
	include '../controllers/guest_RoomController.php';
	
	$room_information= getAllRoomInfo();
	
?>



				<!-- All room_information starts -->



<div >

	<h2  style="color:red" class="text"><b><u> All Rooms' Information of HOTEL TAJ : </u></b></h2>
	
<br/>
<br/>
<br/>	




				<!-- Search	-->



<!--******************************************************************************-->
	<script>		
		
		function searchRoom()
			{
				http = new XMLHttpRequest();
				
				var search_word = document.getElementById("search_input").value;
				
				http.onreadystatechange = function()
				{
					if(http.readyState==4 && http.status== 200)
					{
						document.getElementById("search_result").innerHTML=http.responseText;
					}
					
				}
				
				http.open("GET","guest_Search_room.php?sk="+search_word,true);
				http.send();
				
			}
		
		
		</script>

			<div  class="center">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text"  id="search_input" onkeyup="searchRoom()" placeholder="Search by ROOM Details" class="form-control" />
				</div>
			</div>
				
			<div id="search_result">
			</div>
<!--******************************************************************************-->


	
	
	
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
		
			<th></th>
			
			<th></th>		
			<th></th>
					
		</thead>
		
		<tbody>
		
			<?php
				foreach($room_information as $room)
				{
					echo "<tr>";
						
					echo "<td>"."</td>";
					echo "<td>"."</td>";
						
						echo "<td>".$room["room_no"]."</td>";
						echo "<td>".$room["size"]."</td>";
						echo "<td>".$room["num_of_bed"]."</td>";
						echo "<td>".$room["room_type"]."</td>";
						echo "<td>".$room["rent_price"]."</td>";
						echo "<td>".$room["room_status"]."</td>";
						echo "<td>".$room["customer_id"]."</td>";
						echo "<td>".$room["customer_name"]."</td>";
						
					echo "<td>"."</td>";
					
//**************************************************************************************************												
						echo '<td><a href="guest_ViewRoomInfo.php?room_no='.$room["room_no"].'" class="btn btn-primary">View</a></td>';
					
					echo "</tr>";
				}
			?>
			
		</tbody>
		
	</table>
	
</div>



				<!-- All room_information ends -->



<?php include 'guest_Footer.php';?>


