<?php 

	include 'manager_Header.php';
	
	
	include '../controllers/manager_RoomController.php';
	include '../controllers/manager_CustomerController.php';
	
	$room_information= getAllRoomInfo();
	$customer_information = getAllCustomerInfo();
?>



				<!-- R_BookRoom starts -->
<div >


				<!-- Search	-->



<!--******************************************************************************-->
	<script>		
		
		function searchCustomer()
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
				
				http.open("GET","manager_BookRoom_Search_Customer.php?sk="+search_word,true);
				http.send();
				
			}
		
		
		</script>

			<div  class="center">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text"  id="search_input" onkeyup="searchCustomer()" placeholder="Search by CUSTOMER Details" class="form-control" />
				</div>
			</div>
				
			<div id="search_result">
			</div>
<!--******************************************************************************-->


</div>	



	<div class="center">
	
		<form method="post" action="../controllers/manager_Book_Room_Controller.php" class="form-horizontal form-material">
		
			
			
			
			<div class="form-group">
			
				<h4 class="text"><b>Customer ID :</b></h4> 
				<input type="text" name="customer_id"  class="form-control">
				
			</div>
			
			<div class="form-group">
			
				<h4 class="text"><b>Customer Name :</b></h4> 
				<input type="text" name="customer_name"  class="form-control">
				
			</div>
			
			<div class="form-group">
					
			<h4 class="text"><b>Email :</b></h4> 
			<input type="text" name="email_address" class="form-control" value="@gmail.com" required>
						
			</div>
			
			<div class="form-group">
					
						<h4 class="text"><b>Booked Room_No :</b></h4> 
						<input type="text" name="booked_room_no" class="form-control">
						
			</div>	
					
					
			<div class="form-group">
			
				<h4 class="text"><b>Payment Status :</b></h4> 
				<input type="radio" name="payment_status"  value="Complete" > Complete <br/>
				<input type="radio" name="payment_status"  value="(due)" > (due) <br/>
				<input type="radio" name="payment_status"  value="(partial)" > (partial) <br/>
					
			</div>
			
			<div class="form-group">
			
				<h4 class="text"><b>Room Status :</b></h4> 
				
				<input type="radio" name="room_status" value="***request***" > ***request*** <br/>
				<input type="radio" name="room_status" value="reserved" > reserved <br/>
				<input type="radio" name="room_status" value="booked" > booked <br/>
			</div>
			
			
			<div class="form-group">
			
				<h4 class="text"><b>Confirm Room No :</b></h4> 
				<input type="text" name="room_no"  class="form-control">
				
			</div>
			
<br/>
<br/>
<br/>
					
			<div class="form-group text-center">
		
<!--			<input type="hidden" name="room_no" class="form-control>			-->	
			
<!--*************************************************************************************************	-->					
				<input type="submit" class="btn btn-success" name="book_Room" value=" Book Room " class="form-control">
				
			</div>
			
		</form>
		
	</div>				

<div>


				<!-- Search	-->



<!--******************************************************************************-->
	<script>		
		
		function searchRoom()
			{
				http = new XMLHttpRequest();
				
				var search_word = document.getElementById("searchR_input").value;
				
				http.onreadystatechange = function()
				{
					if(http.readyState==4 && http.status== 200)
					{
						document.getElementById("searchR_result").innerHTML=http.responseText;
					}
					
				}
				
				http.open("GET","manager_BookRoom_Search_Room.php?sk="+search_word,true);
				http.send();
				
			}
		
		
		</script>

			<div  class="center">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text"  id="searchR_input" onkeyup="searchRoom()" placeholder="Search by ROOM Details" class="form-control" />
				</div>
			</div>
				
			<div id="searchR_result">
			</div>
<!--******************************************************************************-->


	


</div >
				<!-- R_BookRoom  ends -->



<?php include 'manager_Footer.php';?>


