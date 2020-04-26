<!-- 2.1.1 -->
<?php

if (empty($_POST['username'])) {

	echo "username shouldn't be empty";
} else {
	if(empty($_POST['password'])){
		echo "password is missing";
	} else {
		echo 'sign in success';
	}
}


    

?>
