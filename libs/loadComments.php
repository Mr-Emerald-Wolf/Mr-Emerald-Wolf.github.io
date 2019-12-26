<?php 
        require_once('../post_config.php');
        require_once('../TemplateEngine/templateEngine.php');
        $x = $_GET['q'];
        $postId = $_GET['id'];
    
        #Connect users here with cookies
        
        $sql = "SELECT COUNT(id) FROM comments";
        
        if (mysqli_query($conn, $sql)) {
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $y = $row['COUNT(id)'];
            
        ;
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
        
        
        
        if ($y >= 4) {
            
            $y = 4;
        } 
        if ($y < 4){
            $x = $y;
        }
 
        if ($x >= $y) {
            for ($a = 0; $a <= $x; $a++) {
                
                $sql = "SELECT * FROM comments WHERE postId = '$postId' ORDER BY `comments`.`id` DESC LIMIT ". $a. ",1"; 
                
                
                if (mysqli_query($conn, $sql)) {
                
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    
                    $charVal = $row['charVal'];
                    $date = $row['date'];
                    $user = $row['user'];
                } else {
                
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }   
                $post = new Template("../TemplateEngine/Templates/comments.tpl");
                $post->set("a", $a);
                $post->set("charVal", $charVal);
                $post->set("date", $date);
                $post->set("user", $user);
                    echo $post->output();
            }
        }
        
                ?>