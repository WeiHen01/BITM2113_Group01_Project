<!--========================================================================
    db_connection.php: 
     -- Used to establish connection between HTML documents / webpage 
        to MySQL Database in XAMPP phpMyAdmin through php language 
=========================================================================-->

<?php

    date_default_timezone_set("Asia/Kuala_Lumpur");

    // localhost of store database location
    $host = "127.0.0.1";

    // A standard use for myPHP admin MySQL
    $port = 3306;

    // the extend for port if the ip in the port is full
    $socket = "";

    // database username
    $user = "root";

    // Most of the time empty
    $password = "";

    // Database name
    $dbname = "";

    // Connection mysqli carry all define above variable to phpadmin
    // die - php immediately stop the function
    
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server.'.mysqli_connect_error());

?>
