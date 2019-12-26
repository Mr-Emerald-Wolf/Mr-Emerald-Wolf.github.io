<?php
$servername = "localhost";
$username = "pi";
$password = "mysqlpass";
$dbname = "Think_BlogPosts";

    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
?>