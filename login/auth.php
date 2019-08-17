<?php
$servername = "localhost";
$username = "pi";
$password = "TDR4fury";
$DATABASE_NAME = 'Think_BlogPosts';
// Create connection
$conn = new mysqli($servername, $username, $password, $DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password'],) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}