<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Event</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <style>
            /* Container 23 */
            .container {
                width: 100%; 
                height: 25vh; 
                background: #4069E5FF; /* tertiary1-500 */
            }

            .container-2{
                margin-left: 1%;
                margin-right: 1%;
                width: 90%; 
                height: 25vh; 
                background: #ffffff; /* tertiary1-500 */
            }


            
        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>


            <div class = "container"></div>

            <div class ="container-2"><p style="padding-left: 1.5%"><b>Upcoming Event</b></p></div>
        </div>


    </body>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>