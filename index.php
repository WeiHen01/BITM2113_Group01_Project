<?php 
    session_start();

    include ("Database Layer/db_connection.php");
?>

<!--=================================================================================
    index.php: Default / Initial page of the website once accessing through browser,
               it is also the landing page of the website.

    ** To access the webpage, type "localhost/xampp"
==================================================================================-->


<!------------------------------
    FRONT-END OF THE WEBPAGE
------------------------------->

<!--Telling browser using latest version of HTML documents - HTML5 -->
<!DOCTYPE html>

    <!-- External CSS style -->
    <link href="./output.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Import Javascript / JQuery References -->


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- FavIcon on the browser tab-->
    <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">

    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>BITM2113 | H20 Harmony - Clean Water Initiatives</title>

        <!-- Embedded CSS -->
        <style>
            html{
                font-family: 'Epilogue';
            }
        </style>
        
    </head>


    <!-- Body of the webpage -->
    <body>
            
        <!-- Sidebar / Vertical Drawer -->


        <!-- Content -->
        <p>Welcome to H20 Harmony!</p>

        <button onclick="window.location.href='./Login.php'">Login</button>
                   
    </body>


    <!-- Javascript implementation -->
    <script>

    </script>


</html>


<!-- Outside Javascript implementation -->
<script>

</script>

<!-- Import Javascript / JQuery References -->


<!-- Import CSS References Stylesheets using URL Link-->