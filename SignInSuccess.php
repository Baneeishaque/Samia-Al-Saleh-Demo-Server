<!-- 2.1.1 -->
<?php

if (empty($_POST['username'])) {

	echo "username souldn't be empty";
} else {
	if(empty($_POST['password'])){
		echo "password is missimg";
	} else {
		echo 'signin success';
	}
}


    

?>