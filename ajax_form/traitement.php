<?php
if (isset($_POST['login'])){ // plutot que submit, serialize vire l'indice submit
    if($_POST['login'] == "admin" && $_POST['password'] == "123"){
        $logged = true;
        echo "LOG";
        return $logged;
    } else {
        echo "NLOG";
    }
}
?>