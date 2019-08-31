<?php
    require_once('post_config.php');
    $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 1"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
