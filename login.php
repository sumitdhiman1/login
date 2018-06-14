<?php 

session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="" method="post">
		<table align="center" width="500">
			<tr>
				<td align="right">Email:</td>
				<td><input type="text" name="email" required></td>
			</tr>

			<tr>
				<td align="right">password:</td>
				<td><input type="password" name="password" required></td>
			</tr>

			<tr ><td colspan="2" align="center"><input type="submit" name="button" value="Login"></td></tr>


			
			
		</table>
		



	</form>

</body>
</html>

<?php
$con = mysqli_connect("localhost","root","","sumit");



if (isset($_POST['button'])) {
	$email = $_POST['email'];
$password = $_POST['password'];
	$get = "select * from user where email = '$email' AND password = '$password'";

	$run = mysqli_query($con,$get);

	 $check_user = mysqli_num_rows($run); 

	 if ($check_user ==1) {
	 	
	 	$_SESSION['user_email']=$email; 
	 	echo "<script>window.open('work.php','_self')</script>";
	 	echo "logged in";
	 }
	 	else{
	 		echo "wrong email and password";
	 	}
	 }
	





 ?>