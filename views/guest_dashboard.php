<?php 

	include 'guest_Header.php';
	
//*************************************************************************************	
	require_once ('../controllers/guest_CustomerController.php');
	require_once ('../controllers/guest_RoomController.php');
	
	
//*************************************************************************************	
	$room_information= getAllRoomInfo();
	
	
	$t_customer_information=count(getAllCustomerInfo());
	$t_room_information=count(getAllRoomInfo());
	
?>



				<!-- guest_dashboard starts -->



<div>
	<table  align="center">
		<tr>
			<td>
			
				<div class="card">
				
				<span class="text-white"><u> Total Customers </u><br>
					<?php echo $t_customer_information;?>
				</span>
				
				</div>
				
			</td>
			
			<td>
			
				<div class="card">
				
				<span class="text-white"><u> Total Rooms </u><br>
					<?php echo $t_room_information;?>
				</span>
				
				</div>
				
			</td>
			
			<td>
				<div class="card">
				
				<span class="text-white"><u> Total Booking </u><br>
					11
				</span>
				
				</div>
				
			</td>
			
		</tr>
		
	</table>
	
</div>


<div class="col-md-12">

<br/>
<br/>

	<h2 Style="color:red" class="text"><b><u>  ROOM-Booking-INDEX : </u></b></h2>
	
<br/>
<br/>
<?php
				foreach($room_information as $room)
				{
			?>
				<div class="card-product col-md-4">
					
						<a href="guest_Room_item.php?room_no=<?php echo $room["room_no"];?>">
						
							<img class="card-image" src="<?php echo $room["room_image"];?>"></img>
							<b class="text"> <?php echo $room["size"];?></b>
							
						</a>
						
						<div class="price-label"><span ><?php echo $room["rent_price"];?> </span></div>
						
						<div class="add-to-cart"><span ><a href="guest_Room_item.php?room_no=<?php echo $room["room_no"];?>" class="btn btn-primary" style="width:185px;font-family:consolas;margin-top:5px;"><b>Want to Book !</b></a></span></div>
					
				</div>
			<?php
				}
			?>
		
	
</div>



				<!-- guest_dashboard ends -->




<?php include 'guest_Footer.php'; ?>


