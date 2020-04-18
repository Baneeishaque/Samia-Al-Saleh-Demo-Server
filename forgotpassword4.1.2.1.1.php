<?php  



 if(empty($_POST['email'])){
	echo "email is required";
 }
 else
 {
 if(!filter_var($email, FILTER_VALIDATE-EMAIL)){
	echo ="invalid email format";
 }
 }
 else
 {
	if(empty($_POST['mobile'])){
	 echo "mobile is required";
	}
 else
	{
		$validnum=filter_var($_POST['mobile'],FILTER_SANITIZE_NUMBER_INT);
		$validnum=str_replace("-","",$validnum);
		if(strlen($validnum)<10 || strlen($validnum)>14){
			echo "invalid mobile number"
		}
	}
 else
 {
	echo " <p>succcess..user found, New password send to Registered Mobile number</p>";
 }	

?>