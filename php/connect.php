<?php
    // Display all of error
    error_reporting(E_ALL);
    // ใช้งานในเครื่อง
    $conn = new mysqli('localhost', 'root', 'root', 'blog');
    // $conn = new mysqli('localhost', 'surinstu_blog', 'kKZS0Jj0Lg', 'surinstu_blog');

    $conn->set_charset('utf8');
    if($conn->connect_errno){
        echo "Connectd error: ".$conn->connect_error;
        exit();
    }

    // Set prefix
    $base_path_blog = 'assets/images/blog/';

    // Set timezone
    date_default_timezone_set('Asia/Bangkok');
?>