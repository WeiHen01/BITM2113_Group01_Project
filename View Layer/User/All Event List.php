<?php 
    session_start();
?>

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
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <style>
            a{
                color: #4069E552;
            }
            a:hover{
                color: #0056b3;
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

            <div style = "padding-top: 0.5%; padding-left: 2%">
                <div style = "display: flex; align-items: center; padding-bottom: 1%; gap: 1%">
                    <a href="User Event.php" class="back-link">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <p class="header-text" style = "font-weight: bold">Complaint Details</p>
                </div>
            </div>


        </div>
    </body>
    <script>

    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>