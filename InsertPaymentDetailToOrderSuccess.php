<!-- 10.3.1.2 -->
<?php
if (empty($_POST['cartdata'])) {

		 echo "didn't get cart data";

} else {

	if (empty($_POST['paymentdata'])) {

			echo "didn't get payment data";
		
	} else {
		if (empty($_POST['userdetail'])) {

			echo "didn't get user details";
			
		} else{
			
				
		  		echo "Success....purchase confirmation message send to registered mobile number";
		}
	}
}
?>		
