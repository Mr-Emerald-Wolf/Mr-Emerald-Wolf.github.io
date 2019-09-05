<?php
    require_once('post_config.php');
    $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 1"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<html>
<head>
    <title>Home | ThinkYourSelfNow </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<div class="col-sm shadow-sm p-3 mb-5 bg-white rounded mr-2 card">
        <?php
            require_once('post_config.php');
                $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 1 "; 
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                    echo "<img src=' " .$row['img1'] . "' class='card-img-top rounded' alt='Responsive image''>";
                    echo "<h3 class='text-center'>". $row['name']. "</h3>";
                    echo "<p class='text-center'>". $row['sub_heading']. "</p>";
        
        ?>
      </div>
      <div class="col-sm shadow-sm p-3 mb-5 bg-white rounded mr-2 ml-2 card">
       <?php
                $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 1,1 "; 
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                    echo "<img src=' " .$row['img1'] . "' class='img-fluid' alt='Responsive image''>";
                    echo "<p class='text-center'>". $row['name']. "</p>";
                    echo "<p class='text-center'>". $row['sub_heading']. "</p>";
                    
        ?>      </div>
      <div class="col-sm shadow-sm p-3 mb-5 bg-white rounded ml-2 card">
        <?php
            require_once('post_config.php');
                $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 1 "; 
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                    echo "<img src=' " .$row['img1'] . "' class='img-fluid' alt='Responsive image''>";
                    echo "<p class='text-center'>". $row['name']. "</p>";
                    echo "<p class='text-center'>". $row['sub_heading']. "</p>";
          
        ?>      </div>
</html>
