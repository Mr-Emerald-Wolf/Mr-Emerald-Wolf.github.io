<?php
    session_start();
    include_once('../post_config.php');
    $addVal = $_GET['val'];
    $postId = $_GET['id'];
    $date = $_GET['date'];
    $user = $_SESSION['user'];
    #Connect users here with cookies

    $sql = "INSERT INTO comments (user,postId, charVal, date) VALUES ('$user',$postId,'$addVal','$date')";

    if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert"> Comment Was Added Succesfully!  
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button></div>';
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }   
?>