<?php 
    session_start();

    $eventID = $_GET['event'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Event Details</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <style>
            a{
                color: #ffffff;
            }
            a:hover{
                color: #84beff;
            }

            .event-header{
                background: url("https://miro.medium.com/v2/resize:fit:7540/1*P7OE0mqUGAgo0-6RKMPbfg.jpeg");
                height: 65vh;
                overflow-y: auto;
                
            }

            .container {
                justify-content: center;
                background: #ffffff50; /* primary-500 */
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
                width: 100%; 
                height: 85px; 
                background: #DEE1E6FF; /* neutral-300 */
                border-radius: 4px; /* border-m */
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }
            .body-content{
                background-image: url("../../Assets/Image/Org Event Background Image.jpg");
                background-size: cover;
                font-family: 'Epilogue'
            }

            button {
                font-family: 'Epilogue';
                width: 15vw; 
                height: 46px;  
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #00BDD6FF; /* primary-500 */
                opacity: 1; 
                gap: 3%;
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
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

            <div style = "overflow-y: auto">

                <div class = "event-header" style = "padding-top: 0.5%; padding-left: 2%; overflow-x: hidden;">
                    <div style = "display: flex; align-items: center; padding-bottom: 1%; gap: 1%">
                        <a href="User Event.php" class="back-link">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                        <p class="header-text" style = "font-weight: bold; color: white">Event Details</p>
                    </div>

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
                </div>

                <div style="display: flex">
                    
                    <div class="group" style="top: 82%; left: 6.67%; padding: 2%">
                        <h3 style="padding-left: 2%; text-align: left; font-family: Epilogue; font-size: 25px; margin: 0;">Timing and Location</h3>
                        
                        <div style = "padding-left: 2%; padding-top: 1%; display: flex;">
                            <div style = "display: flex; gap: 2%;  width: 20vw">
                                <div style = "background-color: #9a9fe4; width: 5vw; height: 5vw; border-radius: 4px; display: flex; justify-content: center; align-items: center; padding: 3% ">
                                    <i class="fa-regular fa-calendar" style = "font-size: 35px"></i>
                                </div>
                                <div>
                                    <p style = "padding-top: 1%; font-weight: bold">Date and Time</p>
                                    <p style = "padding-top: 1%;">Date and Time</p>
                                </div>

                            </div>

                            <div style = "display: flex; gap: 2%;  width: 20vw">
                                <div style = "background-color: #9a9fe4; width: 5vw; height: 5vw; border-radius: 4px; display: flex; justify-content: center; align-items: center; padding: 3% ">
                                    <i class="fa-solid fa-location-dot" style = "font-size: 35px"></i>
                                </div>
                                <div>
                                    <p style = "padding-top: 1%; font-weight: bold">Place</p>
                                    <p style = "padding-top: 1%;">Place</p>
                                </div>

                            </div>
                        </div>


                        <h3 style="padding-top: 5%; padding-left: 2%; text-align: left; font-family: Epilogue; font-size: 25px; margin: 0;">About Event</h3>
                        
                        <div style = "padding-left: 2%; padding-top: 1%; display: flex;">
                            <div style = "display: flex; gap: 2%;  width: 20vw">
                                <div style = "background-color: #9a9fe4; width: 5vw; height: 5vw; border-radius: 4px; display: flex; justify-content: center; align-items: center; padding: 3% ">
                                    <i class="fa-regular fa-clock" style = "font-size: 35px"></i>
                                </div>
                                <div>
                                    <p style = "padding-top: 1%; font-weight: bold">Duration</p>
                                    <p style = "padding-top: 1%;">5 hours</p>
                                </div>

                            </div>
                        </div>


                        <p style="line-height: 1.5; text-align: justify;">Rock Revolt: A Fusion of Power and Passion" is an electrifying rock music
                        event that brings together a diverse lineup of talented rock bands and
                        artists</p>

                    </div>







                    <div class="group" style="display: block; top: 82%; padding: 2%;">
                        <div class="group-small" style="background-color: #b8bef5; padding: 2%">
                            <center><p style = "padding-top: 1%; font-weight: bold">128 participants joined the event!</p></center>
                            
                            <div class="button" id="openEditPassword">
                                <button type="button" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s; width: 100%;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">
                                    Join Now!
                                </button>
                            </div>
                            
                        </div>
                        
                            
                    </div>

                </div>

                


            </div>



        </div>

    </body>
    <script>

    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>