<?php
    $a = "test ";
    $b = "the php";
    echo "<h1>". $a . $b . "7". "</h1>" ;
    var_dump($a);
    echo strlen($a) . "<br>";
    $c = 1;
    if ($c == 1) {
        echo "Succesful". "<br>";
    }
    $color = "red";
    switch ($color) {
        case "red":
            echo "Red";
            break;
        case "blue":
            echo "Blue";
            break;    
    }
    require_once "config.php";
    echo "Your name is " . $_POST["name"]; 
?>
