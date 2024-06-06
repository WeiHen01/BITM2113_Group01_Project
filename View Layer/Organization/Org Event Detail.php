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
            
            #header{
                background: url("../../Assets/Image/event_details.jpg");
                background-size: cover; 
                width: 100%;
            }
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
            .button {
                top: 1494px; 
                left: 395px; 
                width: 203px; 
                height: 36px; 
                padding: 0 12px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #379AE6CC; /* info-500 */
                opacity: 1; 
                border: none; 
                border-radius: 4px; /* border-m */
            }
            .button:hover {
                color: #FFFFFFFF; /* white */
                background: #379AE6CC; /* info-500 */
            }
            .button:hover:active {
                color: #FFFFFFFF; /* white */
                background: #379AE6CC; /* info-500 */
            }
            .button:disabled {
            opacity: 0.4; 
            }
            .text {
                top: 9px; 
                left: 117px;  
                height: 28px; 
                font-family: Epilogue;
            }
            .popup-container {
                display: none; 
                position: fixed; 
                top: 50%; 
                left: 50%; 
                transform: translate(-50%, -50%);
                width: 55%; 
                height: 80%; 
                background: #FFFFFF; 
                border-radius: 15px;
                box-shadow: 0px 17px 35px rgba(23, 26, 31, 0.5), 0px 0px 2px rgba(23, 26, 31, 0.5);
                z-index: 1000;
                overflow-y: auto;
            }
            .overlay {
                display: none; 
                position: fixed; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                background: rgba(0, 0, 0, 0.5); 
                z-index: 999;
            }
            .popup-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem;
                background: #DEE1E6;
                border-bottom: 1px solid #CCC;
            }
            .popup-header h2 {
                margin: 0;
                font-family: 'Epilogue', sans-serif;
                font-size: 24px;
            }
            .close-button {
                background: none;
                border: none;
                font-size: 1.5rem;
                cursor: pointer;
            }
            .popup-content {
                padding: 1rem;
            }
            .participant {
                display: flex;
                align-items: center;
                padding: 0.5rem 0;
                border-bottom: 1px solid #CCC;
            }
            .participant img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                margin-right: 1rem;
            }
            .participant-info div {
                margin: 0.25rem 0;
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
                <div id = "header">
                    <h2 style="text-align: left; font-family: Epilogue; font-size: 50px;  padding: 2%; margin: 0;">About Event</h2>
                    <div class = "container" style="margin-left: 10%; margin-right: 10%; padding-bottom: 2%;">
                        <h3 style=" font-family: 'Epilogue'; text-align: center; font-size: 14; line-height: 56px; font-weight: 500; color: #171A1FFF;">May 27</h3>
                        <h1 style=" font-family: 'Epilogue'; text-align: center; font-size: 40px; line-height: 30px; font-weight: 800; color: #171A1FFF;">Ripple Effect: Unveiling Water Pollution</h1>
                        <h3 style=" font-family: 'Epilogue'; text-align: center; font-size: 14; line-height: 20px; font-weight: 300; color: #171A1FFF;">
                        Rock Revolt: A Fusion of Power and Passion" is an electrifying rock music
                        event that brings together a diverse lineup of talented rock bands and
                        artists</h3>
                    </div>
                </div>



                <div style="display: flex">
                    <div class="group" style="top: 82%; left: 6.67%; padding: 2%">
                        <h3 style="text-align: left; font-family: Epilogue; font-size: 35px; margin: 0;">Description</h3>
                        <h3 style=" font-family: 'Epilogue'; text-align: justify; font-size: 25; line-height: 38px; font-weight: 300; color: #171A1FFF;"> 
                        "Ripple Effect: Unveiling Water Pollution" is an engaging and 
                        informative event dedicated to raising awareness about the 
                        critical issue of water pollution and its significant impacts on 
                        our environment and communities. Through a series of
                        insightful discussions, interactive workshops, and collaborative activities,
                        this event aims to empower participants to
                        become agents of change in the fight to preserve
                        our planet's most precious resource: clean water.
                    </div>

                    <div class="group" style="display: block; top: 82%; padding: 2%;">
                        <div class="group-small" style="display: flex;">
                                <div style="left: 30vw;"> 
                                    <h3 style="font-size: 16px; font-weight: 600; color: #171A1FFF;">DURATION</h3>
                                    <h3 style="font-size: 14px; font-weight: 400; color: #6E7787FF;">5 hours</h3>
                                </div>
                        </div>
                        <div class="group-small" style="display: flex;">
                                <div > 
                                    <h3 style="font-size: 16px; font-weight: 600; color: #171A1FFF;">DATE AND TIME</h3>
                                    <h3 style="font-size: 14px; font-weight: 400; color: #6E7787FF;">Saturday, February 20</h3>
                                    <h3 style="font-size: 14px; font-weight: 400; color: #6E7787FF;">08:00 PM</h3>
                                </div>
                        </div>
                        <div class="group-small" style="display: flex;">
                                <div > 
                                    <h3 style="font-size: 16px; font-weight: 600; color: #171A1FFF;">PLACE</h3>
                                    <h3 style="font-size: 14px; font-weight: 400; color: #6E7787FF;">Central Park, New York, NY 10022 United States</h3>
                                </div>
                        </div>
                            
                    </div>

                </div>

                <div class="group" style="padding: 2%;left: 6.67%;">
                    <h3 style="text-align: left; font-family: Epilogue; font-size: 35px; margin: 0;">Participation</h3>
                    <div style="padding-bottom: 2%;">
                        <div class="container-1" style="padding-left: 10%;">
                            <div style="display: flex" >
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div>
                                <div style="width: 55%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">joined 30 minutes ago..</div>
                            </div>
                            <div style="height: 30%"></div>
                            <div style="display: flex">
                                <i class="fa-solid fa-phone" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">+1234567890</div><div style="width: 20%"></div>
                                <i class="fa-regular fa-envelope" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; ">emilybrown@yahoo.com</div>
                            </div>                           
                        </div>                       
                    </div>
                    <div style="padding-bottom: 2%;">
                        <div class="container-1" style="padding-left: 10%;">
                            <div style="display: flex" >
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div>
                                <div style="width: 55%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">joined 30 minutes ago..</div>
                            </div>
                            <div style="height: 30%"></div>
                            <div style="display: flex">
                                <i class="fa-solid fa-phone" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">+1234567890</div><div style="width: 20%"></div>
                                <i class="fa-regular fa-envelope" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; ">emilybrown@yahoo.com</div>
                            </div>                           
                        </div>                       
                    </div>
                    <div style="padding-bottom: 2%;">
                        <div class="container-1" style="padding-left: 10%;">
                            <div style="display: flex" >
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div>
                                <div style="width: 55%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">joined 30 minutes ago..</div>
                            </div>
                            <div style="height: 30%"></div>
                            <div style="display: flex">
                                <i class="fa-solid fa-phone" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">+1234567890</div><div style="width: 20%"></div>
                                <i class="fa-regular fa-envelope" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; ">emilybrown@yahoo.com</div>
                            </div>                           
                        </div>                       
                    </div>
                    <div style="padding-bottom: 2%;">
                        <div class="container-1" style="padding-left: 10%;">
                            <div style="display: flex" >
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div>
                                <div style="width: 55%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">joined 30 minutes ago..</div>
                            </div>
                            <div style="height: 30%"></div>
                            <div style="display: flex">
                                <i class="fa-solid fa-phone" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">+1234567890</div><div style="width: 20%"></div>
                                <i class="fa-regular fa-envelope" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; ">emilybrown@yahoo.com</div>
                            </div>                           
                        </div>                       
                    </div>

                    <div class="group-small" style="display: flex; justify-content: center">
                        <button class="button" onclick="showList()">View Participation List</button>
                        <div style="width: 3%;"></div>
                        <button class="button">Generate Report</button>
                    </div>

                </div>
                
                <div class="overlay" id="overlay" onclick="hidePopup()"></div>

                <div class="popup-container" id="popupContainer">
                    <div class="popup-header">
                        <h2>Participation List</h2>
                        <button class="close-button" onclick="hidePopup()">X</button>
                    </div>
                    <div class="popup-content">
                        <div class="participant">
                            <img src="path/to/image.jpg" alt="Participant Image">
                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;">+1234567890</div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%">emilybrown@yahoo.com</div>
                            </div> 
                        </div>
                        <div class="participant">
                            <img src="path/to/image.jpg" alt="Participant Image">
                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;">+1234567890</div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%">emilybrown@yahoo.com</div>
                            </div> 
                        </div>
                        <div class="participant">
                            <img src="path/to/image.jpg" alt="Participant Image">
                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;">+1234567890</div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%">emilybrown@yahoo.com</div>
                            </div> 
                        </div>
                        <div class="participant">
                            <img src="path/to/image.jpg" alt="Participant Image">
                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;">+1234567890</div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%">emilybrown@yahoo.com</div>
                            </div> 
                        </div>
                        <div class="participant">
                            <img src="path/to/image.jpg" alt="Participant Image">
                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;">+1234567890</div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%">emilybrown@yahoo.com</div>
                            </div> 
                        </div>
                        <div class="participant">
                            <img src="path/to/image.jpg" alt="Participant Image">
                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;">+1234567890</div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%">emilybrown@yahoo.com</div>
                            </div> 
                        </div>
                        <div class="participant">
                            <img src="path/to/image.jpg" alt="Participant Image">
                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; ">John Smith</div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;">+1234567890</div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%">emilybrown@yahoo.com</div>
                            </div> 
                        </div>
                        <!-- Add more participant divs as needed -->
                    </div>
                </div>
                
            </div>



            
        </div>
        

        

        
        

    </body>

    <script>
        function showList() {
            document.getElementById('popupContainer').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function hidePopup() {
            document.getElementById('popupContainer').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>

    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>


</html>