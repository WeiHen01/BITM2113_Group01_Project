<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Complaint</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <style>
            /* Container 23 */
            .container {
                margin-left: 2%;
                width: calc(90%/3); 
                height: 70vh; 
                background: #d1d1d1; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
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

            <p style="padding-left:2%"><b>Complaint</b></p>

            <div style = "display: flex">

                <div class = "container"></div>

                <div class = "container"></div>

                <div class = "container"></div>

            </div>
        </div>


    </body>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>