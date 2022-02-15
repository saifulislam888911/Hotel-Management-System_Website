<?php 

	include 'main_header.php';
	
?>



				<!--sign up starts -->

<br>
<br>
<br>
<br>
<br>
<br>
<br/>
<br/>

<div class="center-login" style="border: none;hight: 100%;width: 100%;margin-top: 20px;background-image:url(../storage/room_image/hotel.jpg);background-repeat: no-repeat;background-size: cover; background-size: 100% 100%; color: black; opacity: 0.7; font-weight: 700;">

	<h1 class="text text-center"><b><u>Sign Up</b></u></h1>
	
	<form method="post" action="../controllers/SignUpController.php" enctype="multipart/form-data" class="form-horizontal form-material">
	<div style="display: inline-block;border: none;margin-left: 350px;padding: 15px;">
		<div class="form-group">
		
			<h4 class="text"><b>Name :</b></h4> 
			<input type="text" name="customer_name" class="form-control" required>
						
		</div>	
		
		
		
				<!--user name & password will be added to login_panel database -->	



<!--****************************************************** -->	
		<div class="form-group">
			<h4 class="text"><b>Username :<b></h4> 
			<input type="text" name="user_name" class="form-control" required>
		</div>
		
		<div class="form-group">
			<h4 class="text"><b>Password :<b></h4> 
			<input type="password" name="password" class="form-control" required>
		</div>
<!--****************************************************** -->		
		</div>
		<div style="display: inline-block;border: none; padding-left: 20px;padding-right: 15px;">
		<div class="form-group">
					
			<h4 class="text"><b>Home Address :</b></h4> 
			<input type="text" name="customer_address" class="form-control" required>
						
		</div>

		<div class="form-group">
					
			<h4 class="text"><b>Email :</b></h4> 
			<input type="text" name="email_address" class="form-control" value="@gmail.com" required>
						
		</div>
					
		<div class="form-group">
					
			<h4 class="text"><b>Contact No :</b></h4> 
			<input type="text" name="contact_no" class="form-control" value="+880-1" required>
				
		</div>
			</div>
			<div >
		<div class="form-group text-center" >
			
			<input type="submit" class="btn btn-success" name="sign_up" value="Sign Up" class="form-control" style=" border: 2px solid black;margin: 10px 0px;display: inline-block;">
			
		</div>
		</div>
		
	
	</form>	
	

	
</div>

<br/>
<br/>
<br/>
<br/>
<br/>

<!--sign up ends -->

<?php include 'main_footer.php';?>



