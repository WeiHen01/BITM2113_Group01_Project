<!--=====================================================
    Organization Home Page
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
        /* Big Container */
        .container {
            position: absolute; 
            width: 50%; 
            height: 80%; 
            background: #FFFFFFFF; /* white */
            border-radius: 4px; /* border-m */
            border-width: 1px; 
            border-color: #565E6CFF; /* neutral-600 */
            border-style: solid; 
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            padding: 2%;
            cursor: pointer;
        }

        /* Group 2 */
        .group {
            width: 94%; 
            height: 90%; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Image 36 */
        .image {
            width: 100%; 
            height: 70%; 
            top: 60%;
            border-radius: 8px; /* border-xl */
            box-shadow: 0px 8px 17px #171a1f, 0px 0px 2px #171a1f; /* shadow-l */
            background-color: #ccc; /* Placeholder for the image */
        }

                /* Image 60 */
        .sub-image {
            position: absolute; 
            top: 40px; 
            left: 32px; 
            width: 240px; 
            height: 218px; 
            border-radius: 20px; 
        }

        .text {
            font-family: 'Epilogue'; 
            font-size: 1.5em; 
            line-height: 1.5em; 
            font-weight: 700; 
            color: #171A1FFF; /* neutral-900 */
            text-align: center;
            margin-top: 2%;
        }

        .sub-text {
            font-family: 'Epilogue'; 
            font-size: 14px; 
            line-height: 22px; 
            font-weight: 400; 
            top: 279px; 
            width: 184px; 
            height: 25px; 
            text-align: center;
            color: #FFFFFFFF; /* white */
        }

        /* Container 47 */
        .sub-container {
            width: 100%; 
            height: 15%; 
            background: #DEE1E6FF; /* neutral-300 */
            border-radius: 4px; /* border-m */
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2%;
            font-family: 'Epilogue'; 
        }

        /* Rectangle 16 */
        .rectangle {
            position: absolute; 
            top: 15%; 
            /*left: 5%;*/ 
            width: 304px; 
            height: 400px; 
            background: #4069E5DE; /* tertiary1-500 */
            border-radius: 20px; 
        }

        .sub-container-text {
            font-family: 'Epilogue'; 
            font-size: 1.2em; 
            line-height: 1.2em; 
            font-weight: 500; 
            color: #171A1FFF; /* neutral-900 */
        }

        /* Home 1 */
        .icon {
            position: absolute; 
            top: 120px; 
            left: 38px; 
            width: 24px; 
            height: 24px; 
            fill: #9095A0FF; /* neutral-500 */
        }

          /* Popup container */
        .popup-container {
            display: none; /* Hidden by default */
            position: absolute; 
            top: 15%; 
            left: 214px; 
            width: 70%; 
            height: 80%; 
            background: #DEE1E6FF; /* neutral-300 */
            border-radius: 15px; /* border-xl */
            box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
            z-index: 1000;
        }

        /* Group 26 inside Popup container */
        .popup-group {
            position: absolute; 
            width: 25%; 
            height: 70%; 
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Epilogue'; 
        }

        /* Button inside Popup container */
        .popup-button {
            margin-top: 20px;
            padding: 10px 20px;
            width: 138px; 
            height: 41px; 
            background-color: #FFFFFFFF;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Epilogue'; 
        }

        /* Overlay */
        .overlay {
            position: fixed; 
            top: 0px; 
            left: 0px; 
            width: 100%; 
            height: 100%; 
            background: #171A1F66; /* neutral-900 */
            border-radius: 0px; 
            z-index: 999; /* Ensure it's above other elements */
        }


    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>Org | Home</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Organization/Org Component Style.css">
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

        </div>
        <!-- Navigation bar -->
        <div class="navigation-bar" style="top: 10%; left: 5%">
            <div class="icon" onclick="">
                <!-- Add your icon here -->
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>

        <!-- Big Container 1-->
        <div class="container" style=" top: 15%; 
            left: 5%;" >
            <!-- Group 2 -->
            <div class="group"  onclick="showPopup()">
                <div class="image">
                    <!-- Image content -->
                    <img src="../../Assets/Image/org event.png" alt="Event Image">
                </div>
                <div class="text">
                Upcoming Events
                </div>
                <div class="sub-container">
                    <div class="sub-container-text">
                        Additional Information
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-text">
                        Additional Information
                    </div>
                </div>
            </div>
        </div>

       

        

        <!-- Overlay -->
        <div class="overlay" id="overlay" style="display:none" onclick="hidePopup()"></div>
        <!-- Popup container -->
        <div class="popup-container" id="popupContainer">
            <!-- Row 1 -->
            <div class="rectangle" style="left: 5%" >
                <div class="sub-image">
                        <!-- Image content -->
                        <img src="../../Assets/Image/Org Water Droplets.png" alt="Image">
                    </div>
                <div class="popup-group" style="top: 65%; left: 35%">
                    <div class="sub-text" style="padding-top: 10px;">Have new event to launch?</div>
                    <button class="popup-button">Add New Event</button>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="rectangle" style="left: 35%" >
                <div class="sub-image">
                        <!-- Image content -->
                        <img src="../../Assets/Image/Org Elemental.png" alt="Image">
                    </div>
                <div class="popup-group" style="top: 65%; left: 35%">
                    <div class="sub-text" style="padding-top: 10px;">Update and edit your event here!</div>
                    <button class="popup-button">Edit Event</button>
                </div>
            </div>
            <!-- Row 3 -->
            <div class="rectangle"  style="left: 65%">
                <div class="sub-image">
                        <!-- Image content -->
                        <img src="../../Assets/Image/Org View.png" alt="Image">
                    </div>
                <div class="popup-group" style="top: 65%; left: 35%">
                    <div class="sub-text" style="padding-top: 10px;">View all your event here!</div>
                    <button class="popup-button">Event Calender</button>
                </div>
            </div>
    </body>
        <script>
            // Function to show the popup container and overlay
            function showPopup() {
                // Display the popup container
                document.getElementById("popupContainer").style.display = "block";
                // Display the overlay
                document.getElementById("overlay").style.display = "block";
            }
            // Function to hide the popup container and overlay
            function hidePopup() {
                // Hide the popup container
                document.getElementById("popupContainer").style.display = "none";
                // Hide the overlay
                document.getElementById("overlay").style.display = "none";
            }
        </script>
        <script src="../General Components & Widget/User/User Component Script.js"></script>

</html>
