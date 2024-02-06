<!--========================================================================
    db_connection_MySQLI Procedural.php: 
     -- Used to establish connection between HTML documents / webpage 
        to MySQL Database in XAMPP phpMyAdmin through php language 

    Connection Type 2: MySQLi Procedural
=========================================================================-->

<?php

    $servername = "localhost";
    $username = "username";
    $password = "";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    echo "Connected successfully"; 
?> 