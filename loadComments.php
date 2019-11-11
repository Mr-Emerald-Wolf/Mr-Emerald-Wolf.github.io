<?php 
        require_once('post_config.php');
        
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
                
                $sql = "SELECT * FROM comments WHERE postId = '$postId' ORDER BY `comments`.`id` DESC LIMIT ". $a. ",1"; ;
                
                
                if (mysqli_query($conn, $sql)) {
                
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    
                    $charVal = $row['charVal'];
                    $date = $row['date'];
                } else {
                
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }   
                
                
                echo '<div class="media mt-2 p ">
                            <p class="font-weight-bold">User '. $a. '</p>
                            ' . $charVal . '
                            <p class = "font-weight-light">' .$date . '</p>
                        </div>
                    </div>';
            }
        }
        
                ?>