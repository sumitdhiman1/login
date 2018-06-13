<!DOCTYPE html>
<html>
<head>
	<title>view records</title>
</head>
<body>
	<table border="2">
		<tr><td colspan="11" align="center">View records here</td></tr>
		<tr>
			<td>S.NO</td>
			<td>Name</td>
			<td>Email</td>
			<td>password</td>
			<td>Image</td>
			<td>Gender</td>
			<td>Checkbox</td>
			<td>Country</td>
			<td>Address</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>

		<?php 
         $con = mysqli_connect("localhost","root","","sumit");

         $get = "select * from user";
         $run = mysqli_query($con,$get);

         $i = 0;

         while ($row = mysqli_fetch_array($run)) {
         	$id = $row['id'];
         	$name = $row['name'];
         	$email = $row['email'];
         	$password = $row['Password'];
         	$image = $row['image'];
         	$gender = $row['gender'];
         	$hobbies = $row['hobbies'];
         	$country = $row['country'];
         	$address = $row['address'];
         	$i++;

         

		?>

		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $name ;?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $password ;?></td>
			<td><img src="images/<?php echo $image;?>" width="60" height="60"/></td>
			<td><?php echo $gender;?></td>
			<td><?php echo $hobbies ?></td>
			<td><?php echo $country ?></td>
			<td><?php echo $address?></td>
			<td><a href="edit_record.php?edit_record=<?php echo $id; ?>">Edit</a></td>
		<td><a href="delete_record.php?delete_record=<?php echo $id;?>">Delete</a></td>

		</tr>
		<?php } ?>

	</table>

</body>
</html>