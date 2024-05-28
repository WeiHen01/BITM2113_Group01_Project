<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

?>

<!DOCTYPE html>

    <!-- Import CSS References Stylesheets using URL Link-->



    <!-- Embedded CSS style -->
    <style>

    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>Organization | Home</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Organization/Org Component Style.css">

        <style>
            
            .container {
                justify-content: center;
                background: #00BDD66B; /* primary-500 */
                border-radius: 30px; 
                border-width: 1px; 
                border-color: #FFFFFFFF; /* white */
                border-style: solid; 
            }
            .button-red {
                top: 79%; 
                left: 41%;
                width: 8%; 
                height: 45px; 
                padding: 0 12px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #DE3B40FF; /* danger-500 */
                opacity: 1; 
                border: none; 
                border-radius: 23px; 
                box-shadow: 0px 4px 9px #de3b40, 0px 0px 2px #de3b40; /* shadow-m */
                gap: 6px; 
            }
            .button-red .icon {
                width: 16px; 
                height: 16px; 
                fill: #FFFFFFFF; /* white */
            }
            .button-red:hover {
            color: #FFFFFFFF; /* white */
            background: #C12126FF; /* danger-600 */
            }
            .button-red:hover:active {
            color: #FFFFFFFF; /* white */
            background: #AA1D22FF; /* danger-650 */
            }
            .button-red:disabled {
            opacity: 0.4; 
            }
            .button-blue {
                top: 79%; 
                left: 52%; 
                width: 8%; 
                height: 45px; 
                padding: 0 12px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #00BDD6FF; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 23px; 
                box-shadow: 0px 4px 9px #00bdd6, 0px 0px 2px #00bdd6; /* shadow-m */
                gap: 6px; 
            }
            .button-blue .icon {
                width: 16px; 
                height: 16px; 
                fill: #FFFFFFFF; /* white */
            }
            .button-blue:hover {
                color: #FFFFFFFF; /* white */
                background: #00A9C0FF; /* primary-550 */
            }
            .button-blue:hover:active {
                color: #FFFFFFFF; /* white */
                background: #0095A9FF; /* primary-600 */
            }
            .button-blue:disabled {
                opacity: 0.4; 
            }
            .group {
                width: 50%; 
                height: 45%;
            }
            .container-1 {
                margin-top: 3%;
                width: 723px; 
                height: 87px; 
                background: #DEE1E6FF; /* neutral-300 */
                border-radius: 4px; /* border-m */
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }
            .body-content{
                background-image: url("../../Assets/Image/Org Event Background Image.jpg");
                background-size: cover;
                font-family: 'Epilogue'
            }

                        
        </style>
    </head>


    <!-- Body of the webpage -->
    <body>
        
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/Organization/Org Sidebar.php");
        ?>

        <!-- Body --> 

        <div id="contentArea">
            
            <!-- Header -->
            <?php 
                include("../General Components & Widget/Organization/Org Header.php");
            ?>

            <!-- Content here -->

            <div class = "body-content">
                <h2 style="text-align: left; font-family: Epilogue; font-size: 50px;  padding: 2%; margin: 0;">About Event</h2>


                <div class = "container" style="margin-left: 10%; margin-right: 10%; padding-bottom: 2%;">
                    <h3 style=" font-family: 'Epilogue'; text-align: center; font-size: 14; line-height: 56px; font-weight: 500; color: #171A1FFF;">May 27</h3>
                    <h1 style=" font-family: 'Epilogue'; text-align: center; font-size: 40px; line-height: 30px; font-weight: 800; color: #171A1FFF;">Ripple Effect: Unveiling Water Pollution</h1>
                    <h3 style=" font-family: 'Epilogue'; text-align: center; font-size: 14; line-height: 20px; font-weight: 300; color: #171A1FFF;">
                    Rock Revolt: A Fusion of Power and Passion" is an electrifying rock music
                    event that brings together a diverse lineup of talented rock bands and
                    artists</h3>
                    <div style = "display: flex; justify-content: center">
                        <button class="button-red" onclick="" >
                            <i class="fa-regular fa-heart"></i>
                            345
                        </button>
                        <div style = "width: 2%"></div>
                        <button class="button-blue" onclick="">
                            <i class="fa-solid fa-share-nodes"></i>
                            124
                        </button>
                    </div>
                </div>


                <div style="display: flex">
                    <div class="group" style="top: 82%; left: 6.67%; padding: 2%">
                        <h3 style="text-align: left; font-family: Epilogue; font-size: 35px; margin: 0;">Description</h3>
                        <h3 style=" font-family: 'Epilogue'; text-align: left; font-size: 25; line-height: 38px; font-weight: 300; color: #171A1FFF;"> 
                        "Ripple Effect: Unveiling Water Pollution" is an engaging and 
                        informative event dedicated to raising awareness about the 
                        critical issue of water pollution and its significant impacts on 
                        our environment and communities. Through a series of
                        insightful discussions, interactive workshops, and collaborative activities,
                        this event aims to empower participants to
                        become agents of change in the fight to preserve
                        our planet's most precious resource: clean water.
                    </div>

                    <div class="group" style="padding: 2%">
                        <h3 style="text-align: left; font-family: Epilogue; font-size: 35px; margin: 0;">Participation</h3>
                        <div class="container-1">

                        </div>
                        <div class="container-1">

                        </div>
                        <div class="container-1">

                        </div>

                    </div>

                </div>




                <div class="group" style="padding: 2%">
                    <h3 style="text-align: left; font-family: Epilogue; font-size: 35px; margin: 0;">Participation</h3>
                    <div class="container-1">

                    </div>
                    <div class="container-1">

                    </div>
                    <div class="container-1">

                    </div>

                </div>
            </div>

            
        </div>
        

        

        
        

    </body>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>


</html>