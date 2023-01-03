<?php 
    $conn = new mysqli('localhost', 'root',
    '', 'pessoal');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>