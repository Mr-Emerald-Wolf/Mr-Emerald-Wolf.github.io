<!DOCTYPE html>
<?php
?>
<html lang="en">

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

  <body>

    <?php echo file_get_contents("navbar.html"); ?>
    <!--This calls the code for the navbar-->

<div class="container-fluid min-100 d-flex flex-column">
  <!-- This container divides the site into different sections or gives max height -->
  <div class="row flex-grow-1">
    <div class="container">
      <div class="jumbotron display-4 mt-4">
        <br>
        <p class="text-center">Think YourSelf Now</p>
      </div>
      <h5 id="Header-subtext" class="text-center font-weight-light line_space">This world is the most beautiful creation. We live in it and we love it as well, but we don't feel it. There are a lot of things to learn, lot of challenges to face and a lot of atrocities to rebel. So let's start this amazing journey together and explore...</h5>
    </div>
  </div><!-- Main display page -->
</div>
<div class="container-fluid min-100 d-flex flex-column">
  <!-- New or Featured posts in our site from forum (express yourself) -->
  <div class="container mt-4 ">
    <div class="row mt-2">
      <div class="col-sm">
        <div class="container bg-dark">


        </div>
      </div>
      <div class="col-sm">
        <p class="text-center display-4">Intro</p>
        <p></p>
      </div>
    </div>
  </div>
</div>
<div class="container-fliud min-100 d-flex flex-column">
  <!-- New or Featured posts in our site from forum (express yourself) -->
  <div class="container mt-4 ">
    <h1 class="text-center">Posts</h1>
    <div class="row mt-4">
      <div class="col-sm">
        <?php
            require_once('post_config.php');
                $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 1 "; 
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                    echo "<p class='text-center'>". $row['name']. "</p>";
                    echo "<p class='text-center'>". $row['sub_heading']. "</p>";
                
        ?>
      </div>
      <div class="col-sm">
       <?php
                $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 1,1 "; 
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                    echo "<p class='text-center'>". $row['name']. "</p>";
                    echo "<p class='text-center'>". $row['sub_heading']. "</p>";
          
        ?>      </div>
      <div class="col-sm">
        <?php
            require_once('post_config.php');
                $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT 2,1 "; 
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                    echo "<p class='text-center'>". $row['name']. "</p>";
                    echo "<p class='text-center'>". $row['sub_heading']. "</p>";
        ?>      </div>
    </div>
  </div>
</div>
</body>

</html>

