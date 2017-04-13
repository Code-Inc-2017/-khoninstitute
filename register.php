<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	header("Location: home.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$nationality = mysqli_real_escape_string($con, $_POST['nationality']);
	$medical_id_number = mysqli_real_escape_string($con, $_POST['medical_id_number']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	$phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		$pass =  md5($password);
		if(mysqli_query($con, "INSERT INTO `users`(`name`,`nationality`,`medical_id_number`,`age`,`phoneNumber`,`email`,`password`) VALUES('$name', '$nationality', '$medical_id_number', '$age' ,'$phoneNumber','$email','$pass')")) {
			$successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Script</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="login.php">#Khon Institute</a>
		</div>
		<!-- menu items -->

	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>Sign Up</legend>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Nationality</label>
						<input type="text" name="nationality" placeholder="Nationality" required value="<?php if($error) echo $nationality; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($nationality_error)) echo $nationality_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Medical ID Number</label>
						<input type="integer" name="medical_id_number" placeholder="Medical ID Number" required value="<?php if($error) echo $medical_id_number; ?>" class="form-control" />
						<span class="integer-danger"><?php if (isset($medical_id_number_error)) echo $medical_id_number_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Age</label>
						<input type="integer" name="age" placeholder="Age" required value="<?php if($error) echo $age; ?>" class="form-control" />
						<span class="integer-danger"><?php if (isset($age_error)) echo $age_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Phone Number</label>
						<input type="integer" name="phoneNumber" placeholder="Phone Number" required value="<?php if($error) echo $phoneNumber; ?>" class="form-control" />
						<span class="integer-danger"><?php if (isset($phoneNumber_error)) echo $phoneNumber_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Confirm Password</label>
						<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
					</div>

					<div class="form-group">
						<input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
