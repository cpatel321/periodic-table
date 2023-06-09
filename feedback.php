<?php

// $conn = mysqli_connect("fdb18.biz.nf" ,  "3399456_newdb" , "l5iRPu8vDuWLo" , "3399456_newdb" );

$conn = mysqli_connect("fdb18.biz.nf" ,  "3399456_newdb" , "l5iRPu8vDuWLo" , "3399456_newdb" );


if($conn){

}
else{
?><script>alert("Error connecting to database, Please try again later.");</script><?php
}

if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

$query = "INSERT INTO feedback (name, email, message) VALUES ('" . $name. "', '" . $email. "','" . $message. "')";
mysqli_query($conn, $query);
	$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
	 ?><script>  alert( "Thanks for your Feedback");</script>
	  <?php
	}
}
include "form.html";
//header('location:http://myexperiments.c1.biz/index.html');
?>