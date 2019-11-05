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
    <script>
        var x = 4;
    function loadMore() {

      var xhttp1 = new XMLHttpRequest();
      x += 5;
      var postId = 12345678;

      xhttp1.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("commentsForm").innerHTML = this.responseText;
        }
      };
      xhttp1.open("GET", "test2.php?q=" + x + "&id="+ postId, true);
      xhttp1.send();
    }

    </script>
    </head>
    
    <body>
        <p id="commentsForm"></p>
        <button class="btn btn-primary mt-2" onclick="loadMore()">Load More</button>
        
        <?php 
    
        $x = $_GET['q'];
        
        echo $postId;
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
        
 
        if ($x >= $y) {
            for ($a = 0; $a <= $x; $a++) {
                require_once('post_config.php');
                
                echo $postId;
                $sql = "SELECT * FROM `comments` WHERE postId = '$postId' ORDER BY `comments`.`id` DESC LIMIT ". $a. ",1"; 
                echo $sql;
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $user = $row['user'];
                $charVal = $row['charVal'];
                echo "<div class='media mb-4'>        
                        <div class='media-body'>
                            <h5 class='mt-0'>$a
                            </h5>
                            <p>$charVal</p>
                        </div>
                      </div>";
        }
        }
        
                ?>
        
    </body>
    
</html>