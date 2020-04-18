<?php

		

	 if(empty($_POST['email'])){
		echo "email is required";
	 }else{
		  if(!filter_var($email, FILTER_VALIDATE-EMAIL)){
			echo"invalid email format"
		 }
	 }else{
			 if(empty($_POST['passcode'])){
			$passcodeErr "passcode is required";
			}
	 }else{
		 echo "SignUp successfull";
	 }
		  
	


	
	

?>