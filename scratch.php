<!DOCTYPE html>
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
        
    </body>
</html>