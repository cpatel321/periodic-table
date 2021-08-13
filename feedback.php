<?php

$conn = mysqli_connect("fdb18.biz.nf" ,  "3399456_newdb" , "l5iRPu8vDuWLo" , "3399456_newdb" );

if($conn){
?><script>alert("connected to the Database.");</script><?php
}
else{
?><script>alert(" not connected.Server is not responding. Try again later.");</script><?php
}

if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

$query = "INSERT INTO feedback (name, email, message) VALUES ('" . $name. "', '" . $email. "','" . $message. "')";
mysqli_query($conn, $query);
	$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
	 ?><script>  alert( "Your contact information is saved successfully.You may send feedbacks as many times you want.");</script>
	  <?php
	}
}
include "form.html";
//header('location:http://myexperiments.c1.biz/index.html');
?>