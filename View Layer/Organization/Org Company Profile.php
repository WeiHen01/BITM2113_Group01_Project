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
            line-height: 35px; /* neutral-900 */
        }
        /* Container 293 */
        .container-3 {
            position: absolute; 
            top: 89px; 
            left: 20px; 
            width: 350px; 
            height: 230%; 
            background: #F8F9FAFF; /* neutral-150 */
            border-radius: 4px; /* border-m */
            border-width: 1px; 
            border-color: #1D2128FF; /* neutral-800 */
            border-style: solid; 
            cursor: pointer;
        }
        /* Button 46 */
        .button {
            position: absolute; 
            top: 743px; 
            left: 403px; 
            width: 150px; 
            height: 41px; 
            padding: 0 12px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-family: Inter; 
            font-size: 18px; 
            line-height: 28px; 
            font-weight: 400; 
            color: #FFFFFFFF; /* white */
            background: #4069E5FF; /* tertiary1-500 */
            opacity: 1; 
            border: none; 
            border-radius: 4px; /* border-m */
            box-shadow: 0px 4px 9px #171a1f, 0px 0px 2px #171a1f; /* shadow-m */
        }
        /* Hover */
        .button:hover {
            color: #FFFFFFFF; /* white */
            background: #2655E1FF; /* tertiary1-550 */
        }
        /* Pressed */
        .button:hover:active {
            color: #FFFFFFFF; /* white */
            background: #1941B8FF; /* tertiary1-650 */
        }
        /* Disabled */
        .button:disabled {
            opacity: 0.4; 
        }
                /* Button 23 */
        .button-1 {
            position: absolute; 
            width: 50%; 
            height: 52px; 
            padding: 0 20px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-family: Inter; 
            font-size: 18px; 
            line-height: 28px; 
            font-weight: 400; 
            color: #00BDD6FF; /* primary-500 */
            background: #00000000; /* transparent */
            opacity: 1; 
            border-radius: 8px; /* border-xl */
            border-width: 1px; 
            border-color: #00BDD6FF; /* primary-500 */
            border-style: solid; 
        }
        /* Hover */
        .button-1:hover {
            color: #00A9C0FF; /* primary-550 */
            background: #00000000; /* transparent */
        }
        /* Pressed */
        .button-1:hover:active {
            color: #0095A9FF; /* primary-600 */
            background: #00000000; /* transparent */
        }
        /* Disabled */
        .button-1:disabled {
            opacity: 0.4; 
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
                    <div style="height: 25%;"></div>
                    <button class="button-1" onclick="window.location.href='./Org Edit Profile.php'" 
                     onmouseover="this.style.background='#00bcd4'; 
                     this.style.color = '#ffffff'" onmouseleave="this.style.color='#00bcd4'; 
                     this.style.background = 'transparent'">Edit Profile
                    </button>
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
            <div class="container-2" style="top: 160%; left: 5%; width: 85%; height: 290px; padding-bottom: 20;">
                <div class="text" style="font-weight: 600;">Recent event openings</div>
                <div style="display: flex;">
                    <div class="container-3" style="left: 5%; width: 40%; padding: 3% ">
                        <div class="text" style="font-weight: 700;">Ripple Effect: Unveiling Water Pollution</div>
                        <img src="../../Assets/Image/Org Riple.jpg" style = "width: 100%; height:60%; border-radius:5%; " alt="Event Image">
                        <div style="height: 1%;"></div>
                        <div class="text" style="font-weight: 500; color: #171A1FFF; text-align: justify">Join us as we shed light on the pressing issue of 
                            water pollution and its far-reaching impacts. Together, 
                            we'll explore solutions and take action to preserve our 
                            planet's most precious resource.
                        </div>
                        <div class="button" style="top: 93%; left:5%">more</div>
                    </div>
                    <div class="container-3" style="left: 55%; width: 40%; padding: 3%">
                        <div class="text" style="font-weight: 700;">Clear Waters, Bright Futures: A Call to Action</div>
                        <img src="../../Assets/Image/Org Bright.jpg" style = "width: 100%; height:60%; border-radius:5%;" alt="Event Image">
                        <div style="height: 1%;"></div>
                        <div class="text" style="font-weight: 500; color: #171A1FFF; text-align: justify">Our event aims to ignite a movement towards
                             cleaner, healthier waterways. Through engaging discussions 
                             and hands-on activities, we'll raise awareness about water
                              pollution and empower individuals to make a positive
                               difference in their communities</div>
                        </div>
                        <div class="button" style="top: 270%; left:58%">more</div>
                    </div>
                </div>
                
            </div>

            




















        </div>
    </body>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>


</html>