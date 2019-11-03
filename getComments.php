<!DOCTYPE html>
<html>
    
    <head>
    <?php echo "<title>". $row['name']. " | ThinkYourSelfNow </title>"; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <?php require_once('post_config.php'); ?>
    </head>
<?php
    for ($x = 0; $x <= 5; $x++) {
        
        require_once('post_config.php');
        $postId = $_GET['q'];
        $sql = "SELECT * FROM `comments` WHERE postId = $postId ORDER BY `comments`.`id` DESC LIMIT ". $x. ",1"; 
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $user = $row['user'];
        $charVal = $row['charVal'];
        echo "<div class='media mb-4'>        
                <div class='media-body'>
                    <h5 class='mt-0'>$user</h5>
                    <p>$charVal</p>
                </div>
              </div>";
    }
?>
    
</html>