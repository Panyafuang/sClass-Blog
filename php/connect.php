<?php
    // Display all of error
    error_reporting(E_ALL);

    $conn = new mysqli('localhost', 'root', 'root', 'blog');

    $conn->set_charset('UTF-8');

    if($conn->connect_errno){
        echo "Connectd error: ".$conn->connect_error;
        exit();
    }


?>