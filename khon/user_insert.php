<?php
include ("includes/connection.php");

if (isset($_POST['sign_up'])){
		
		$name= mysqli_real_escape_string($con,$_POST['u_name']);
		$email=mysqli_real_escape_string($con,$_POST['u_email']);
		$aid=mysqli_real_escape_string($con,$_POST['u_aid']);
		
		$address=mysqli_real_escape_string($con,$_POST['u_address']);
		$cell=mysqli_real_escape_string($con,$_POST['u_cell']);
		$id=mysqli_real_escape_string($con,$_POST['u_id']);
		
		$pass=mysqli_real_escape_string($con,$_POST['u_pass']);
		$status="unverified";
		$posts= "No";
		
		$get_email = "select * from register where id='$id'";
		$run_email= mysqli_query($con,$get_email);
		$check= mysqli_num_rows($run_email);
		
		if ($check==1){
			echo "<h2>This id is already registered!</h2>";
			exit();
			}
			if (strlen($pass)<6){
				echo "<script>alert('Password should be minimum 6 characters!')</script>";
				exit();	
			}
			else {
				$insert = "insert into register
				(id,name,email,cell,address,medical_aid,password) values ('$id','$name','$email','$cell','$address','$aid','$pass')";
				$run_insert = mysqli_query($con,$insert);
				
				if ($run_insert){
				$_SESSION['id']=$id;
				echo "<script>alert('Registration Successful!')</script>";
				echo "<script>window.open('home.php','_self')</script>";
				}
			}
	  }
?>