<?php 

function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "form";

    $conn = new mysqli($host, $user, $pass, $db_name, 3307);
    return $conn;
}


?>