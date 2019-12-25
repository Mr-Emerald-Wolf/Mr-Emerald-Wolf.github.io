<?php 
        // Initialize the session
        session_start();    
        require_once("../post_config.php");        
         

         $user=$_POST['user'];
         $pass=$_POST['pass'];

         $sql="select * from users where username='$user'";

        if (mysqli_query($conn, $sql)) {
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
             
            if (password_verify($pass, $row['password'])) {
                echo '1';
                $_SESSION['user']=$user;
            } else {
                echo 'Email Or Password Do Not Match';
            }
         } 
?>