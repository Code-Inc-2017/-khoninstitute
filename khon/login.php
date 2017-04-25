<?php 
 
	
    include("includes/connection.php");
	
    if(isset($_POST['login'])) {
	
	$id = mysqli_real_escape_string($con,$_POST['id']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	
	
     $get_user = "select * from register where id='$id' AND password='$password'";
	     
	 $run_user = mysqli_query($con,$get_user);
	   
     $check = mysqli_num_rows($run_user);
		 
	 if($check==1) {
			 
		$_SESSION['id']=$id;
        echo "<script>window.open('home.php','_self')</script>";	
			 
	}
	else {
	echo "<script>alert('Password or email is not correct!')</script>";	
	}	 
	
	}
  
?>