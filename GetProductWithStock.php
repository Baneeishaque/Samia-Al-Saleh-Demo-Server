<!-- ADMIN 10.1 -->
<?php
if (empty($_GET['products'])) {
    echo"didn't get products";
}else{
    if (empty($_GET['stockinfo'])) {
        echo"didn't get stock information";
    }else{
        echo" product_name:number_of_stock";
    }
}

?>