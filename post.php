<!DOCTYPE html>
<?php
        
    function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
    if(isset($_GET['id'])){
        $path = clean(trim($_GET['id']));
        require_once('post_config.php');
        $sql = "SELECT * FROM `express-posts` WHERE '$path' = path ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); 
        $postId = $row['postId'];
        
} else {
  echo "failed";
}
        ?>
<html lang="en">
<head>
<?php echo "<title>". $row['name']. " | ThinkYourSelfNow </title>"; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <div id="dom-target" style="display: none;">
</div>
<script>
var postId = <?php echo $postId; ?>;

function getComments() {

  var xhttp1 = new XMLHttpRequest();

  xhttp1.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById("commentsForm").innerHTML = this.responseText;
    }
  };
  xhttp1.open("GET", "getComments.php?q=" + postId, true);
  xhttp1.send();
}

function addComments() {
  var xhttp = new XMLHttpRequest();
  var str = document.getElementById("commentBox").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("alert").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "addComments.php?val=" + str + "&id="+ postId, true);
  xhttp.send();
}

getComments();

                    
    
</script>
  </head>
 <body>
        
        
        
    
        
        
<?php 
    echo file_get_contents("navbar.html");  
        ?>

     <!-- Page Content -->
  <div class="container mt-4 pt-4">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $row['name']; ?></h1>
        
        <!-- Sub Heading -->
        <p class="text-left lead mt-2 pt-2">
        <?php echo $row['sub_heading']; ?>
        </p>

        <!-- Author -->
        <p class="text-right text-muted lead">
          by
          <a class="text-reset" href="#"><?php echo $row['author']; ?></a>
        </p>


        <!-- Date/Time -->
        <p><?php echo $row['date']; ?></p>

        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo $row['img1']; ?>" alt="">

     

        <!-- Post Content -->
        <p class="lead"><?php echo $row['post_content']; 
            $postId = $row['postId']; ?></p>
    
        <hr>
        <div>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
              <div class="form-group">
                <textarea id="commentBox" class="form-control mb-2" rows="3"></textarea>
              </div>
              <button onclick="addComments(),getComments()" type="submit" class="btn btn-primary mt-2">Submit</button>
          </div>
        </div>
        <div class="mt-3 container" id="alert">
        </div>
        <div id="commentsForm"></div>
        <!-- Single Comment -->
        

        
      </div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
    </body>
</html>