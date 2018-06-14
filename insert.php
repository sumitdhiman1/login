<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="800" border="2">
			<tr>
				<td colspan="2">
					<h2 align="center">insert here </h2>
				</td>
			</tr>

			<tr>
				<td align="right"><b>Name:</b></td>
				<td><input type="text" name="name" size="50" required></td>
			</tr>
			<tr>
				<td align="right"><b>Email:</b></td>
				<td><input type="text" name="email" size="50" required></td>
			</tr>
			<tr>
				<td align="right"><b>Password:</b></td>
				<td><input type="password" name="password" size="50" required></td>
			</tr>

			<tr>
				<td align="right"><b>Image:</b></td>
				<td><input type="file" name="image" size="50" required></td>
			</tr>
			<tr>
				<td align="right"><b>Gender:</b></td>
				<td><input type="radio" name="gender" value="male" >Male <input type="radio" name="gender" value="female">Female</td>
			</tr>

			<tr>
				<td align="right"><b>Hobbies:</b></td>
				<td><input type="checkbox" name="checkbox[]" value="Cricket" >Cricket <input type="checkbox" name="checkbox[]" value="hockey">Hokey</td>
			</tr>

			<tr>
				<td align="right"><b>Country:</b></td>
				<td><select name="select"  required>
					<option >india</option>
					<option>nepal</option>
					



				</select></td>
			</tr>

			<tr>
				<td align="right"><b>address:</b></td>
				<td><input type="text" name="address" size="50" required></td>
			</tr>

			<tr>
				
				<td colspan="2" align="center"><input type="submit" name="button" value="save"></td>
			</tr>
		</table>


		<h2>For viewing all records <a href="view.php"> click here</a></h2>
		

	</form>

</body>
</html>

<?php
$con = mysqli_connect("localhost","root","","sumit");
if (isset($_POST['button'])) {
	

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp, "images/$image");
$gender = $_POST['gender'];
$checkbox = $_POST['checkbox'];
  $b = implode(",", $checkbox);
$country = $_POST['select'];
$address = $_POST['address'];


 $insert = "insert into user(name,email,password,image,gender,Hobbies,country,address) values('$name','$email','$password','$image','$gender','$b','$country','$address')";

$run = mysqli_query($con,$insert);
if($run){
  echo "<script>alert('inserted')</script>";
}
else
{
	echo mysql_error();
}
}

?>