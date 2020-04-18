<?php
session_start();
$nameErr= $passwordErr= "";
 if(isset($_POST['login'])){
	 if ($_SERVER["REQUEST_METHOD"] == "POST"){
		 if(empty($_POST['username'])){
			 $nameErr= "username souldn't be empty";
		 }
		 if(empty($_POST['password'])){
			 $passwordErr= "password is missimg";
		 }
		
		}

	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$x="SELECT * FROM client WHERE username='$username' AND password='$password'";
	$res= mysqli_query($con,$x);
		if(mysqli_num_rows($res)==0){
			echo "login failed";
		}
    }
		
?>