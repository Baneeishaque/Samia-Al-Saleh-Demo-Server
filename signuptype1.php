<?php

$nameErr= $addressErr= $emailErr= $mobileErr=$passcodeErr= "";
    if (isset($_POST['signup'])){
	    if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		 if(empty($_POST['name'])){
			 $nameErr= "name is required";
		 }
		 if(empty($_POST['address'])){
			 $addressErr= "address is required";
		 }
		 if(empty($_POST['email'])){
			 $emailErr= "email is required";
		 }else{
			 if(!filter_var($email, FILTER_VALIDATE-EMAIL)){
				$emailErr ="invalid email format";
			 }
		 }
		 if(empty($_POST['mobile'])){
			 $mobileErr= "mobile is required";
		 }
		  if(empty($_POST['passcode'])){
			 $passcodeErr= "passcode is required";
		 }
		
        }
		
			
			$name=$_POST['name'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$passcode=$_POST['passcode'];
			
			mysqli_query($dbconn,"INSERT INTO client(`name`,`address`,`email`,`mobile`,`passcode`) VALUES('$name','$address','$email','$mobile','$passcode');");
	}
    
?>
