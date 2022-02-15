<?php



				//database connection for login panel
//**************************************************************************************
		$host ="localhost";
		$name="root";
		$pass="";
		$dbname="hotel_taj";
		$con = mysqli_connect($host,$name,$pass) or die ('Unable to connect Database');
		mysqli_select_db($con,$dbname);
//**************************************************************************************



				//log in validation check
//**************************************************************************************	
    if(isset($_POST['login']))
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
//*******************************************************************
		$query  = "SELECT * FROM `login_panel` WHERE  user_name='$user_name' AND password='$password'" ;
		
		//$m=mysqli_query($con,"SELECT * FROM `login_panel` WHERE  title='manager'");
		//$r=mysqli_query($con,"SELECT * FROM `login_panel` WHERE  title='receptionist'");
		//$c=mysqli_query($con,"SELECT * FROM `login_panel` WHERE  title='customer'");
			
		$result= mysqli_query($con,$query);
		
		
	if($result)
		{
			if(mysqli_num_rows($result) > 0 )
			{
				
				while($row = mysqli_fetch_assoc($result))
					{	
						if($row["title"] == "manager")
						{
							$_SESSION["LoginUser"] = $row["user_name"];
							
						//	header('Location: manager_dashboard.php');
							
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='manager_dashboard.php';
							</script>
							";
						
						}
						
						elseif($row["title"] == "receptionist")
						{
							$_SESSION["LoginUser"] = $row["user_name"];
							
						//	header('Location: receptionist_dashboard.php');
							
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='receptionist_dashboard.php';
							</script>
							";
							
						}
						
						elseif($row["title"] == "customer")
						{	
							$_SESSION["LoginUser"] = $row["user_name"];
						
						//	setcookie("LoginUser" , $row["user_name"] , time()+180);
							
						//	header('Location: guest_profile.php');
						
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='guest_dashboard.php';
							</script>
							";
						}
						
						else
						{
							echo"
							<script>
							alert(' Invalid User ');
							window.location.href='login.php';
							</script>
							";
						
						}
						
					}
					
			}
			
			else
			{
				
				echo"
				<script>
				alert(' UserName or Password Invalid ');
				window.location.href('signup.php');
				</script>
				";
			}
			
			
		}
		else
			{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('login.php');
				</script>
				";
			}
		
		
		
	}
	

	else
	{
	}
//***************************************************************************************************************
?>

</div>


