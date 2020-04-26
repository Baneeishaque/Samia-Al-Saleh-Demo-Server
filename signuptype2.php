<!-- 3.1 -->
<?php
 if (empty($_POST['email'])) {

		echo "email is required";

} else {
    if(!filter_var($_POST['email'], FILTER_VALIDATE-EMAIL)){

			echo"invalid email format";

	} else {

		if(empty($_POST['passcode'])){

			   echo "passcode is required";
	    } else {

		  echo "SignUp success full";

	 	}
	} 
}	 
?>	  
	


	
	

?>
