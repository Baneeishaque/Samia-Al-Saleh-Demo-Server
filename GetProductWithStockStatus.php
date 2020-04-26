<!-- ADMIN 11.1 -->
<?php
if (empty($_GET['products'])) {
    echo"didn't get products";
}else{
    if (empty($_GET['stockstatus'])) {
        echo"didn't get stock status";
    }else{
        echo" product_name:stock_status";
    }
}

?>
