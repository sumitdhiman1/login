<?php  
session_start();


session_destroy();

echo "<script>window.open('insert.php?logged out = you have logged put','_self')</script>";
 echo "you have logged out";


?>