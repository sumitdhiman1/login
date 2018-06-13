<!DOCTYPE html>

<?php 

$con = mysqli_connect("localhost","root","","sumit");

if (isset($_GET['edit_record'])) {
	$get_id = $_GET['edit_record'];

	$get = "select * from user where id = '$get_id'";

	$run = mysqli_query($con ,$get);

	$i = 0;

	$row=mysqli_fetch_array($run);

		$id = $row['id'];
         	 $name = $row['name'];
         	 $email = $row['email'];
         	$password = $row['Password'];
         	$image = $row['image'];
         	$gender = $row['gender'];
         	$hobbies = $row['hobbies'];
         	$country = $row['country'];
          $address = $row['address'];
}




?>

<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="800" border="2">
			<tr>
				<td colspan="2">
					<h2 align="center">Update  here </h2>
				</td>
			</tr>

			<tr>
				<td align="right"><b>Name:</b></td>
				<td><input type="text" name="name" size="50" value="<?php echo $name;?>" /></td>
			</tr>
			<tr>
				<td align="right"><b>Email:</b></td>
				<td><input type="text" name="email" size="50" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td align="right"><b>Password:</b></td>
				<td><input type="password" name="password" size="50" value="<?php echo $password;?>"></td>
			</tr>

			<tr>
				<td align="right"><b>Image:</b></td>
				<td><input type="file" name="image" size="50"><img src="images/<?php echo $image; ?>" width="60" height="60"/></td>
			</tr>
			<tr>
				<td align="right"><b>Gender:</b></td>
				<td><input type="radio" name="gender" value="<?php echo $gender;?>" >Male <input type="radio" name="gender" value="<?php echo $gender;?>">Female</td>
			</tr>

			<tr>
				<td align="right"><b>Hobbies:</b></td>
				<td><input type="checkbox" name="checkbox[]" value="<?php echo $hobbies;?>" >Cricket <input type="checkbox" name="checkbox[]" value="<?php echo $hobbies;?>">Hokey</td>
			</tr>

			<tr>
				<td align="right"><b>Country:</b></td>
				<td><select name="select"  value="<?php echo $hobbies;?>">
					<option >india</option>
					<option>nepal</option>
					



				</select></td>
			</tr>

			<tr>
				<td align="right"><b>address:</b></td>
				<td><input type="text" name="address" size="50" value="<?php echo $address;?>" required></td>
			</tr>

			<tr>
				
				<td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		

	</form>


</body>
</html>


<?php
$con = mysqli_connect("localhost","root","","sumit");
if (isset($_POST['update'])) {
	$update = $get_id;
	

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


 $update_record = "update user set name='$name',email='$email',password='$password',image='$image',gender='$gender',hobbies='$b', country='$country' ,address = '$address' where id='$update'";

$run = mysqli_query($con,$update_record);
if($run){
  echo "<script>alert('inserted')</script>";
}
else
{
	echo mysql_error();
}
}

?>