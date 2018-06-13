<?php 
	
	 $con = mysqli_connect("localhost","root","","sumit");
	if(isset($_GET['delete_record'])){
	
	$delete_id = $_GET['delete_record'];
	
	$delete_pro = "delete from user where id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_pro); 
	
	if($run_delete){
	
	echo "record deleted";
	
	}
	else{echo "error";}
	}





?>