<?php
    $servername= "sis-teach-01.sis.pitt.edu";
    $username= "mjb220";
    $password= "";
    $dbname = "mjb220";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if($connection -> connect_error){
        die("Connection failed: ".$connection -> connect_error);
    }


    $user= $_POST["username"];
    $pw= $_POST["password"];

    header("Location: index.php");

