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

    <!-- Import Javascript / JQuery References -->


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- FavIcon on the browser tab-->
    <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">

        <!-- Embedded CSS -->
        <style>
            html{
                font-family: 'Epilogue';
            }
             /* Button 1 */
            .button-1 {
                position: absolute; 
                padding: 0 20px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 15px; 
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
            /* Button 2 */
            .button-2 {
                position: absolute; 
                width: 130px; 
                height: 40px; 
                padding: 0 20px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 15px; 
                line-height: 28px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #00BDD6FF; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 8px; /* border-xl */
            }
            .button {
                position: absolute; 
                width: 175px; 
                height: 50px; 
                padding: 0 20px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 18px; 
                line-height: 28px; 
                font-weight: 400; 
                color: #171A1FFF; /* neutral-900 */
                background: #FFFFFFFF; /* white */
                opacity: 1; 
                border: none; 
                border-radius: 4px; /* border-m */
                gap: 8px; 
            }
            .header-menu {
            position: absolute; 
            top: 3%; 
            left: 50%; 
            transform: translateX(-50%);
            width: 25%; 
            height: 6%; 
            display: flex; 
            align-items: center; 
            font-family: Inter; /* Body */
            font-size: 1.1%; 
            line-height: 1.8%; 
            font-weight: 400; 
            opacity: 1; 
            }
            .header-menu .header-menu-item {
            padding: 2% 5%; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            color: #565E6CFF; /* neutral-600 */
            background: transparent; 
            border-radius: 4px; /* border-m */
            cursor: pointer; 
            white-space: nowrap; 
            }
            .header-menu .header-menu-item.selected {
            position: relative; 
            font-weight: 700; 
            color: #00BDD6FF; /* primary-500 */
            background: transparent; 
            }
            .header-menu .header-menu-item.selected:hover:active {
            color: #00BDD6FF; /* primary-500 */
            background: transparent; 
            }
            .header-menu .header-menu-item:nth-child(1) {
            font-family: Inter; 
            font-size: 15px; 
            line-height: 1.8%; 
            font-weight: 400; 
            color: #565E6CFF; /* neutral-600 */
            }
            .header-menu .header-menu-item:nth-child(2) {
            font-family: Inter; 
            font-size: 15px; 
            line-height: 1.8%; 
            font-weight: 400; 
            color: #565E6CFF; /* neutral-600 */
            }
            .header-menu .header-menu-item:nth-child(3) {
            font-family: Inter; 
            font-size: 15px; 
            line-height: 1.8%; 
            font-weight: 400; 
            color: #565E6CFF; /* neutral-600 */
            }
            .header-menu .header-menu-item:nth-child(4) {
            font-family: Inter; 
            font-size: 15px; 
            line-height: 1.8%; 
            font-weight: 400; 
            color: #565E6CFF; /* neutral-600 */
            }

             /* Heading Title */
            .text {
                font-family: Epilogue; /* Heading */
                line-height: 78px; 
                font-weight: 700; 
                color: #171A1FFF; /* neutral-900 */
            }
            /* Body Title */
            .text-body {
                font-family: Inter; /* Body */
                line-height: 30px; 
                color: #9095A0FF; /* neutral-500 */
            }
            /* Normal Text */
            .text-normal {
                position: absolute; 
                top: 212px; 
                left: 290px; 
                width: 880px; 
                font-family: Inter; /* Body */
                font-size: 32px; 
                line-height: 30px; 
                font-weight: 400; 
                color: #171A1FFF; /* neutral-900 */
            }

            .image-container {
                display: flex;
                justify-content: center; 
                align-items: center; 
                gap: 7%; 
                height: 20vh; 
            }
            .image-container img {
                width: 10%;
                max-width: 15%; 
                height: auto;
                border-radius: 30px; 
            }

            /* Container  */
            .container {
                align-items: center;
                left: 1px; 
                width: 1440px; 
                height: 50px; 
                background: #FFFFFFFF; /* white */
                border-radius: 0px; 
            }
        /* Added spacing for sections */
        .section {
            margin-bottom: 50px; /* Adjust the value as needed for spacing */
        }

        </style>

    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>BITM2113 | H20 Harmony - Clean Water Initiatives</title>

        <!-- Title of the tab -->
        <title>H20 Harmony</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Organization/Org Component Style.css">

        
    </head>

    <!-- Body of the webpage -->
    <body>

         <!--=============
               Header
           ==============-->
        <div id="logo" style="display: flex; align-items: center; cursor: pointer; justify-content: left;">
            <img src="Assets/Image/H20 Harmony Logo.png" alt="Logo" width="50">
            <p style="font-size: 15px;"><b>H2O Harmony</b></p>
        </div>

        <div class="header-menu">
            <div class="header-menu-item">Home</div>
            <div class="header-menu-item selected">Events</div>
            <div class="header-menu-item">About Us</div>
            <div class="header-menu-item">Learn More</div>
        </div>

        <button class="button-1" onclick="window.location.href='./Login.php'", style=" top: 5%; left: 83%; width: 87px; height: 40px; ">Login</button>
        <button class="button-2" onclick="window.location.href='./Register.php'", style="top: 5%; left: 90%; ">Get Started!</button>

        <!--=============
               Title
           ==============-->
           <!-- Add spacing -->
            <div class="section"></div> 
           <div class="text" style=" top: 100px; left: 118px; font-size: 56px; text-align: center;">Pure Waters, Brighter Futures</div>
           <div class="text" style=" top: 140px; left: 118px; font-size: 56px; text-align: center; ">Partner with Us for Clean Water Solutions!</div>
           <div class="text-body" style=" top: 200px; left: 200px; font-size: 20px; font-weight: 400; text-align: center;">Empowering Communities through Innovative 
           and Sustainable Water Solutions, <br>
           Ensuring Access to Clean Water for a 
           Healthier and Brighter Future for All</div>

        <!--=====================
            Upper-Body Content
        =========================-->
            <!-- Image content -->
            <div class="image-container" style="display: flex; justify-content: center; align-items: center; height: 80vh;">
                <img src="Assets/Image/ocean.png" style="width: 100%; max-width: 1308px; height: auto; border-radius: 30px;" alt="Event Image">
            </div>
           <!-- Add spacing -->
           <div class="section"></div>
            <div class="text-body" style=" top: 20%; left: 200px; font-size: 30px; font-weight: 600; text-align: center;">Trusted by</div>
           <!-- Add spacing -->
           <div class="section"></div>
            <div class="image-container">
                <img src="Assets/Image/water org.png" alt="Water Org Image">
                <img src="Assets/Image/uniceff.png" alt="Unicef Image">
                <img src="Assets/Image/whoo.png" alt="Unicef Image">
                <img src="Assets/Image/gwcc.png" alt="Unicef Image">
                <img src="Assets/Image/puree.png" alt="Unicef Image">
            </div>

        <!--=======
            More
        ==========-->                  
        <div class="section"></div>
        <div class="container" style="display: flex; flex-direction: row; align-items: center; padding: 10%;">
            <div class="image-container" style="flex: 1; display: flex; align-items: center; justify-content: center;">
                    <img src="Assets/Image/volunteer.png" style="width: 80%; max-width: 400px; height: auto; border-radius: 30px;" alt="Event Image">
                </div>
                <div class="text-section" style="flex: 1; padding-right: 20px;">
                    <div class="text" style="font-size: 35px; margin-bottom: 20px;">Seamless Engagement</div>
                    <div class="text-body" style="font-size: 20px; font-weight: 400; margin-bottom: 20px;">
                        Explore and Participate in Organizational<br> Events Effortlessly!
                    </div>
                    
                    <button class="button-1" onclick="window.location.href=''" style="background: none; color: #00bcd4;left: 70%; width: 150px; height: 40px;">Learn more</button>
                    <button class="button-2" onclick="window.location.href=''" style="margin-right: 10px;">Try now</button>
                </div>
            </div>
        </div>
        <div class="section"></div>
        <div class="container" style="display: flex; flex-direction: row; align-items: center; padding: 10%;">
            <div class="image-container" style="flex: 1; display: flex; align-items: center; justify-content: center;">
                    <img src="Assets/Image/Org3.png" style="width: 80%; max-width: 400px; height: auto; border-radius: 30px;" alt="Event Image">
                </div>
                <div class="text-section" style="flex: 1; padding-right: 20px;">
                    <div class="text" style="font-size: 35px; margin-bottom: 20px;">Feature</div>
                    <div class="text-body" style="font-size: 20px; font-weight: 400; margin-bottom: 20px;">
                    Do consectetur proident proident id eiusmod deserunt<br>
                     consequat pariatur ad ex velit do Lorem reprehenderit.<br>
                      id eiusmod deserunt consequat pariatur ad ex velit do<br>
                       Lorem reprehenderit.
                    </div>
                    
                    <button class="button-1" onclick="window.location.href=''" style="background: none; color: #00bcd4;left: 70%; width: 150px; height: 40px;">Learn more</button>
                    <button class="button-2" onclick="window.location.href=''" style="margin-right: 10px;">Try now</button>
                </div>
            </div>
        </div>

        <!--=====================
            Lower-Body Content
        =========================-->
        <div class="section"></div>
        <div class="container" style="display: flex; flex-direction: row; align-items: center; padding: 10%; background: #EBFDFFFF;">
            <div class="text-normal" style="top: 300%; left: 20%; font-size: 40px; text-align: center; font-weight: 700;">Leonardo da Vinci</div>
            <div class="text-normal" style="top: 315%; left: 20%; font-size: 33px; text-align: center;">"Water is the driving force of all nature."</div>
        </div>
    
        <div class="section"></div>
        <div class="container" style=" top: 2769px; margin-left: 10%; width: 1176px; height: 358px; border-radius: 0px 8px 8px; background: #00BDD6FF; display: flex; align-items: center; justify-content: center; ">
            <div class="text-normal" style="top: 350%; left: 20%; width: 460px; font-family: Epilogue; font-size: 48px; line-height: 68px; font-weight: 700; color: #FFFFFFFF;">Get Started!</div>
            <div class="text-normal" style="top: 360%; left: 20%; font-size: 15px; ">Join us to unlock a world of possibilities! With<br>
             exclusive access, you'll discover exciting events,<br>
              impactful initiatives, and personalized insights. Don't <br>
              miss out – sign up now and start your journey!</div>
            <button class="button" style="top: 380%; margin-right: 46%;" onclick="window.location.href='./Register.php'">Get Started ></button>
              <div class="image-container" style="display: flex; flex-direction: row; justify-content: center; align-items: center; height: 80vh;">
                <img src="Assets/Image/Org1.png" style=" width: 90%; max-width: 1308px; height: auto; border-radius: 30px; margin-left: 80%;" alt="Event Image">
            </div>

        </div>
    



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
