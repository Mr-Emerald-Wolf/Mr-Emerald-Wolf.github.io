<?php
    $servername = "localhost";
    $username = "pi";
    $password = "mysqlpass";
    $dbname = "Think_BlogPosts";

    // Create connection
    try {
        $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
