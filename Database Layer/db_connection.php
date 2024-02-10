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

    
    
?>

<!-- Display the successful connection text in scrolling text -->
<html>
    <style>
        marquee{
            background-color: blue;
            color: white;
        }
    </style>
    <head>
        <marquee scrollamount=30>
            <?php 

                // Connection mysqli carry all define above variable to phpadmin
                // die - php immediately stop the function
                
                $con=new mysqli($host,$user,$password,$dbname,$port,$socket)
                or die (
                    'Could not connect to the database server.'.mysqli_connect_error()
                );

                $result = "Successful"
                
            ?>

            Connected to database <strong><?php echo $dbname ?></strong> is <?php echo strtolower($result) ?>
        </marquee>
    </head>
</html>
