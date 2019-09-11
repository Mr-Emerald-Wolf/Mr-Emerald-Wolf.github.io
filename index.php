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
      <!-- Intro to our site (express yourself) -->
      <div class="container mt-3 ">
        <div class="row row-eq-height mt-2">
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
        <h1 class="text-center display-4 mb-4">Posts</h1><br>
        <div class="container">
          <div class="row w-100 mt-4 mx-auto">
<?php 
    for ($x = 0; $x <= 5; $x++) {
        
        require_once('post_config.php');
            $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT ". $x. ",1"; 
            
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        $path = $row['path'];
        echo '  <div class="col-md-4 mt-3 mb-3">';
        if ($x >= 3) {
            echo '<div class="collapse multi-collapse" id="multiCollapseExample1">';
        }
        echo '      <div class="card h-100">';
        echo '<a href="post.php?id='. $path. ' " class="stretched-link"></a>';
        
    echo "<img src=' " .$row['img1'] . "' class='card-img-top rounded' alt='Responsive image'>";                 
                  echo '<div class="card-body">';
                  echo '<h5 class="card-title">'. $row['name']. '</h5>';
                  echo '<p class="card-text truncate">'. $row['sub_heading']. '</p>';
                  echo '</div>';

        echo '      </div>';
        if ($x >=3) {
            echo '  </div>';
        }
        echo '</div>';
} 
?>  
              <div class="col text-center">                
                  <button class="btn btn-light p-4 px-4 bg-white border" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Load More</button>
              </div>

    </div>
        </div>
      </div>
    </div>
    <div class="container-fliud min-100 d-flex flex-column">
    <div class="row mx-auto h-50">    
        <div class="container-fliud">
            
           <div class="row mx-auto"></div>
                 <h1 class="display-4 text-center mb-3">Youtube</h1>
            <div class="container">
                <!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed-default-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
<!-- The Javascript can be moved to the end of the html page before the </body> tag -->
<script type="text/javascript">
/* curator-feed-default-layout */
(function(){
var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
i.src = "https://cdn.curator.io/published/fcf75152-3d36-48b4-abc1-9e3018f0c8be.js";
e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
})();
</script>
            </div>
            </div>
        
    </div>
    <div class="row mx-auto h-50">
           <div class="container">
                 <h1 class="display-4 text-center mb-3">Instagram</h1>
               </div>
            <div class="container">
              <!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed-instagram-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
<!-- The Javascript can be moved to the end of the html page before the </body> tag -->
<script type="text/javascript">
/* curator-feed-instagram-layout */
(function(){
var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
i.src = "https://cdn.curator.io/published/85ba7ecc-b744-4986-a9f0-3319d4053024.js";
e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
})();
</script>
            </div>
            
            
    </div>
    <div class="container-fluid">
        <h1 class="display-4 text-left">Contact Us</h1>
        
    </div>
     
      </div>
  </body>

</html>

