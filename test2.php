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
    
    <body>
        
        <?php 
        
        $postId = 12345678;
        $addVal = $_GET['q'];
        
        #Connect users here with cookies
        
        $sql = "INSERT INTO comments (postId, charVal) VALUES ($postId,'$addVal')";
        
        if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert"> Comment Was Added Succesfully!  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>';
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
        
        ?>   
                
    </body>
    
</html>