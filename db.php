<?php
$db = mysqli_connect('localhost', 'root', '', 'crud');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>