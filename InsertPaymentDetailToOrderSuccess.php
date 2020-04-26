<!-- 10.3.1.2 -->
<?php
if (empty($_POST['cartdata'])) {

		 echo "didn't get cart data";

} else {

	if (empty($_POST['paymentdata'])) {

			echo "didn't get payment data";
		
	} else {
		if (empty($_POST['userdetail'])) {

			echo "didn't get user detais";
			
		} else{
				$_POST['cartdata'];
				$_POST['paymentdata'];
				$_POST['userdetail'];
				
		  		echo "Success....purchase confirmation message send to registred mobile number"; 
		}
	}
}
?>		