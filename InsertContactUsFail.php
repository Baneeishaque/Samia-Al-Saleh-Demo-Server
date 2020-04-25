    <!--18.2-->
<?php
if (empty($_POST['name'])) {
    
    echo "name is required";

} else {

    if (!filter_var($_POST['email'], FILTER_VALIDATE - EMAIL)) {

        echo "invalid email format";

    } else {

        if (empty($_POST['description'])) {

            echo "description required";

        } else {

            echo "Error...can't process request";
        }
    }
}
?>