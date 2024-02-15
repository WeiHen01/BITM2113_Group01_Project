<!--========================================================================
    db_connection.php: 
     -- Used to establish connection between HTML documents / webpage 
        to MySQL Database in XAMPP phpMyAdmin through php language 
=========================================================================-->

<?php

    date_default_timezone_set("Asia/Kuala_Lumpur");

    // Localhost IP Address to Store database location 
    $host = "127.0.0.1";

    // A standard port number to use for pHpMyAdmin MySQL database in XAMPP
    $port = 3306;

    // the extend for port if the ip in the port is full
    $socket = "";

    // database username
    $user = "root";

    // Most of the time the password is empty
    $password = "";

    // Database name
    $dbname = "bitm2113_project";

    // Connection mysqli carry all define above variable to phpMyadmin
    // die - php immediately stop the function
    
    // type of connection: MySQLi object-oriented
    // $con: a database connection variable
    $con=new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die (
        'Could not connect to the database server.'.mysqli_connect_error()
    );

    
?>
