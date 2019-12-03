<?php
//$logged = false;
if (!empty($_POST['login'])){ // plutot que submit, serialize vire l'indice submit
    if($_POST['login'] == "admin" && $_POST['password'] == "123"){
//        $logged = true;
        echo "LOG GRANTED";
    } else {
        echo "LOG REFUSED";
    }
}
?>