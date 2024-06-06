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
        /* Container 284 */
        .container { 
            top: 97px; 
            left: 0px; 
            height: 300px; 
            background: #FFFFFFFF; /* white */
            border-radius: 6px; 
            background-image: url("../../Assets/Image/Org124.jpg");
        }
        /* Container 286 */
        .container-circle {
            position: absolute; 
            top: 40%; 
            left: 5%; 
            width: 155px; 
            height: 155px; 
            background: #F8F9FAFF; /* neutral-150 */
            border-radius: 78px; 
            border-width: 5px; 
            border-color: #FFFFFFFF; /* white */
            border-style: solid; 
        }
        .image {
            position: absolute; /* Changed */
            width: 155px;
            height: 146px;
            border-radius: 6px;
            border-color: #1D2128;
        }
        /* Container 297 */
        .container-2 {
            position: absolute;  
            background: #FFFFFFFF; /* white */
            border-radius: 6px; /* border-l */
            border-width: 3px; 
            border-color: #FFFFFFFF;
            border-style: solid; 
        }
        .text {
            font-family: Epilogue; /* Heading */
            font-size: 20px; 
            line-height: 48px; /* neutral-900 */
        }
</style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>User | Dashboard</title>
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

            <!-- Content here -->
            <div class="container">
                <div class="container-circle">
                    <img class="image" src="../../Assets/Image/H20 Harmony Logo.png" alt="Logo">
                </div>
            </div>
            <div style="display: flex;">
                <div class="container-2" style="top: 65%; left: 5%; width: 40%; height: 261px;">
                    <div class="text" style="color: #171A1FFF; font-weight: 600;">H2O HARMONY</div>
                    <div class="text" style=" color: #9095A0FF; font-weight: 400;">Software development</div>
                    <div style="display: flex;">
                        <i class="fa-solid fa-globe" style="font-size:xx-large;  color: #9095A0FF;"></i>
                        <div style="width:2%;"></div>
                        <div class="text" style="color: #379AE6FF; font-weight: 300;">h20harmony@gmail.com</div>
                        <div style="width:10%;"></div>
                        <i class="fa-regular fa-bookmark" style="font-size:xx-large;  color: #9095A0FF;"></i>
                        <div style="width:2%;"></div>
                        <div class="text" style="color: #9095A0FF; font-weight: 300;">Hybrid</div>
                    </div>
                    <div style="display: flex;">
                        <i class="fa-solid fa-location-pin" style="font-size:xx-large;  color: #9095A0FF;"></i>
                        <div style="width:2%;"></div>
                        <div class="text" style="color: #9095A0FF; font-weight: 300;">Malacca, Malaysia</div>
                        <div style="width:21%;"></div>
                        <i class="fa-solid fa-briefcase" style="font-size:xx-large;  color: #9095A0FF;"></i>
                        <div style="width:2%;"></div>
                        <div class="text" style="color: #9095A0FF; font-weight: 300;">Monday - Friday</div>
                    </div>
                    <div style="display: flex;">
                        <i class="fa-regular fa-user" style="font-size:xx-large;  color: #9095A0FF;"></i>
                        <div style="width:2%;"></div>
                        <div class="text" style="color: #9095A0FF; font-weight: 300;">10-30 employees</div>
                        <div style="width:23%;"></div>
                        <i class="fa-regular fa-clock" style="font-size:xx-large;  color: #9095A0FF;"></i>
                        <div style="width:2%;"></div>
                        <div class="text" style="color: #9095A0FF; font-weight: 300;">No OT</div>
                    </div>
                </div>
                <div class="container-2" style="top: 66%; left: 50%; width: 40%; height: 261px; ">
                    <div class="text" style="color: #171A1FFF; font-weight: 600;">Overall Rating</div>
                    <div style="display: flex;">
                        <div class="text" style="color: #171A1FFF; font-weight: 600;">4.8/5</div>
                        <div style="width:20%;"></div>
                        <i class="fa-solid fa-star" style="font-size:x-large; color:yellow"></i>
                        <i class="fa-solid fa-star" style="font-size:x-large; color:yellow"></i>
                        <i class="fa-solid fa-star" style="font-size:x-large; color:yellow"></i>
                        <i class="fa-solid fa-star" style="font-size:x-large; color:yellow"></i>
                        <i class="fa-regular fa-star-half-stroke" style="font-size:x-large; color:yellow"></i>
                    </div>
                </div>
            </div>

            <div class="container-2" style="top: 110%; left: 5%; width: 85%; height: 261px; padding-bottom: 3%">
                <div style="display: flex;">
                    <div class="text" style="font-weight: 600;">Life at H2O Harmony</div>
                    <div style="width:75%"></div>
                    <i class="fa-regular fa-circle-left" style="font-size:xx-large;  color: #565E6CFF;"></i>
                    <div style="width:2%"></div>
                    <i class="fa-regular fa-circle-right" style="font-size:xx-large;  color: #565E6CFF;"></i>
                </div>               
                <div style="display: flex;">
                    <div style="width:3%"></div>
                    <img src="../../Assets/Image/Org121.png" style = "width:25vw; border-radius:5%;"><div style="width:2%"></div>
                    <img src="../../Assets/Image/Org122.png" style = "width:25vw; border-radius:5%"><div style="width:2%"></div>
                    <img src="../../Assets/Image/Org123.png" style = "width:25vw; border-radius:5%"><div style="width:2%"></div>
                </div>
            </div>
            <div class="container-2" style="top: 160%; left: 5%; width: 85%; height: 290px; ">
                <div class="text" style="font-weight: 600;">Recent event openings</div>
            </div>

            




















        </div>
    </body>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>


</html>