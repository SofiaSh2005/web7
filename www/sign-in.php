<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "Ваше имя:", $name, "Ваша почта", $email;

    }
?>