<?php
    $servername = "localhost";
    $username = "pi";
    $password = "mysqlpass";
    $dbname = "Think_BlogPosts";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>