<!-- DELBOY1 -->
<?php
if (empty($_POST['username'])) {

    echo "username shouldn't be empty";
} else {
    if (empty($_POST['password'])) {

        $passwordErr= "password is missing";

    } else {
        echo "sign in success";
    }
}
?>
