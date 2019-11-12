<?php

    require_once('post_config.php');
    require_once('templateEngine.php');

    $x = $_GET['q'];
    
    for ($a = 0; $a <= $x; $a++) {
                
        $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT ". $a. ",1"; 
                
                
            if (mysqli_query($conn, $sql)) {
                
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                              
            } else {
                
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                
                }  
        
        $post = new Template("posts.tpl");
        $post->set("img1", $row['img1']);
        $post->set("name", $row['name']);
        $post->set("sub_heading", $row['sub_heading']);
        $post->set("path", $row['path']);
                
                echo $post->output();
    }
    ?>