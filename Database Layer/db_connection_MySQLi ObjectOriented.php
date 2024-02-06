<!--========================================================================
    db_connection_MySQLI ObjectOriented.php: 
     -- Used to establish connection between HTML documents / webpage 
        to MySQL Database in XAMPP phpMyAdmin through php language 

    Connection Type 1: MySQLi Object Oriented - Using preparedStatements
=========================================================================-->

<?php
    
    $servername = "localhost";
    $username = "username";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    echo "Connected successfully"; 
?> 