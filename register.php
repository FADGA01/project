<?php
$host="localhost";
$user="root";
$pword="";
$dbname="register";
$connection=mysqli_connect($host,$user,$pword,$dbname);
if($connection){
	echo "connected";
}
else{
	echo "not connected";
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"href="assets/vendor/bootstrap/css/bootstrap.min.css">

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"href="assets/css/mutwale.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<body>
	<form action="#"method="POST">
	<div class="container anit">
		<label>Usernames</label><div><input type="text"placeholder="usernames"class="form-control kri" name="usernames"required></div>
		<label>Phone number</label><div><input type="number"placeholder="Phonenumber"class="form-control kri" name="phonenumber"required></div>
		<label>Email</label><div><input type="text"placeholder="Email"class="form-control kri" name="email"required></div>
		<label>Password</label><div><input type="password"placeholder="enteryourpassword"class="form-control kri" name="password"required></div>
		<label class="rap" name="country">Choose your country</label>
		<select class="rio">
			<option>Rwanda</option>
			<option>Kenya</option>
			<option>Uganda</option>
			<option>Burundi</option>
			<option>Tanzania</option>
			
		</select>
		<div>
			male<input type="radio" name="sex"checked="male"class="reg">&nbsp;
			female<input type="radio" name="sex"class="rej">

		</div>
		<div id="rut">
		<div><input type="submit" name="save"class="wao"value="submit"></div>or
		<div><button><a href="login.html"class="wao">Login</a></button></div>
		</div>
		
	</div>
	</form>
	</body>
		<?php
		if(isset($_POST['save'])){
			$usernames=$_POST['usernames'];
			$phonenumber=$_POST['phonenumber'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$country=$_POST['country'];
			$sex=$_POST['sex'];
			$insert=" INSERT INTO registerer(usernames,phonenumber,email,password,country,sex) VALUES('$usernames', '$phonenumber', '$email', '$password', '$country', '$sex')";
			$runinsert=mysqli_query($connection,$insert);
			if($runinsert){
				echo "inserted";
			}
			else{
				echo "not inserted";
			}
		}
		
		
		?>