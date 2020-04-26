<!-- 10.3.1.3.1 -->
<?php
if(empty($_POST['cartdata'])){
		 echo "didn't get cart data";
} else {

	if(empty($_POST['paymentdata'])){
			echo "didn't get payment data";
		
	} else {
		if(empty($_POST['userdetail'])){
			echo "didn't get user detais";
			
		} else{
				$_POST['cartdata'];
				$_POST['paymentdata'];
				$_POST['userdetail'];
		  		echo "Error...failed to process request"; 
		}
	}
}
?>				
			
	
	


?>		