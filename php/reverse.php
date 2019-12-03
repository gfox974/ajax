<?php
//echo "OK";
//echo var_dump($_POST);
if(!empty($_POST["data"])){
    echo strrev($_POST["data"]);
}

if(!empty($_POST["trime"])){
    $incText = $_POST["trime"];
    echo str_replace('e','',$incText);
}
?>