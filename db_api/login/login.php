<?php
require '../dbconnection.php';

 $db = mysqli_connect('localhost','root','root','userdata');
 $username = $_POST['username'];
 $password = $_POST['password'];
 $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
 $result = mysqli_query($db,$sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
 	echo json_encode("Success");
 } 
 else{
 	echo json_encode("Error");
 }
?>