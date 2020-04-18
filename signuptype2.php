<?php
$emailErr= $passcodeErr= "";
if (isset($_POST['signup'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
	
		 if(empty($_POST['email'])){
			$emailErr= "email is required";
		 }else{
			  if(!filter_var($email, FILTER_VALIDATE-EMAIL)){
				$emailErr ="invalid email format"
			 }
		 }
		  if(empty($_POST['passcode'])){
			$passcodeErr "passcode is required";
		 }
	}	


	
	$email=$_POST['email'];
	$passcode=$_POST['passcode'];
	mysqli_query($dbconn,"INSERT INTO client(`email`,`passcode`) VALUES('$email','$passcode');");
}

?>