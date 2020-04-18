<?php  
$emailErr= $mobileErr= "";
if(isset($_POST['submit'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
		
		}
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
$check = "SELECT email FROM client WHERE email = '$email' And mobile='$mobile'"; 
$res=mysqli_query($dbconn,$check);
	if(mysqli_num_rows($res)==1){
		echo " <p>succcess..user found, New password send to Registered Mobile number</p>";
		header('location:login.php');
		
	}
}
?>