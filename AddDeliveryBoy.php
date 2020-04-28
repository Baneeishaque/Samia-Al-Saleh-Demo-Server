<?php
if (empty($_POST['name'])) {

    echo "name is required";
} else {
    if (empty($_POST['mobile number'])) {
        echo "mobile number is required";

    } else {
        $validnum = filter_var($_POST['mobile'], FILTER_SANITIZE_NUMBER_INT);
        $validnum = str_replace("-", "", $validnum);
        if (strlen($validnum) < 10 || strlen($validnum) > 14) {
            echo "invalid mobile number";

        } else {
        }
        echo "Delivery Boy Added Successfully ";
    }
}
