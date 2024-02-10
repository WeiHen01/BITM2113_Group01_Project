<!--========================================================================
    db_connection_MySQLI ObjectOriented.php: 
     -- Used to establish connection between HTML documents / webpage 
        to MySQL Database in XAMPP phpMyAdmin through php language 

    Connection Type 1: MySQLi Object Oriented - Using preparedStatements
=========================================================================-->

<?php
    
    // localhost
    $servername = "localhost";
    
    $username = "root";
    
    $password = "";
    
    //name of database
    $dbname = "bitm2113_project";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    echo "Connected to database $dbname successfully"; 
?> 