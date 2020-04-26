<!-- 3.1 -->
<?php

if (empty($_POST['name'])) {

	   echo "name is required";

} else {

	if (empty($_POST['address'])) {

		echo "address is required";
	 
	} else {

	   if (empty($_POST['email'])) { 

			echo "email is required";
		}  else {

		   if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				echo "invalid email format";
		    } else {
				if(empty($_POST['mobile'])){
					echo "mobile is required";
				}else{
					$validnum=filter_var($_POST['mobile'],FILTER_SANITIZE_NUMBER_INT);
					$validnum=str_replace("-","",$validnum);
					if(strlen($validnum)<10 || strlen($validnum)>14){
						echo "invalid mobile number";
					} else {
						if(empty($_POST['passcode'])){
							echo "passcode is required";
						}else{
							echo "SignUp success full ";
						}
					}
				}
			}
		}
	}
}

?>
