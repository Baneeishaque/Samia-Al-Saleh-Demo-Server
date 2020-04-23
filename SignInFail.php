<!-- 2.1.1 -->
<?php
if (empty($_POST['username'])) {

		 echo "username souldn't be empty";
} else {
	 if (empty($_POST['password'])) {

		   $passwordErr= "password is missimg";
			
		} else {
		   echo "signin failed";
		}
	}	
?>