<?php
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $db = "icalculatormathai";

    $connection = mysqli_connect($host,$username,$passwd,$db);
    if($connection == false){
        header("location: /");
    }
?>