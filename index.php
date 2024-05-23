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
    <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
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
            body{
                font-family: 'Epilogue';
            }
             /* Button 1 */
            .button-1 {
                font-family: 'Epilogue';
                position: absolute; 
                width: 87px; 
                height: 40px; 
                padding: 0 20px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
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
                font-family: 'Epilogue';
                position: absolute; 
                top: 19px; 
                left: 1269px; 
                width: 148px; 
                height: 40px; 
                padding: 0 20px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-size: 15px; 
                line-height: 28px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #00BDD6FF; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 8px; /* border-xl */
            }
            .header-menu {
                font-family: 'Epilogue';
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
                font-family: 'Epilogue';
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

            .header-menu .header-menu-item:nth-child(1):hover {
                color: #00BDD6FF; /* primary-500 */
                background: transparent; 
            }
            .header-menu .header-menu-item:nth-child(2):hover {
                color: #00BDD6FF; /* primary-500 */
                background: transparent; 
            }
            .header-menu .header-menu-item:nth-child(3):hover {
                color: #00BDD6FF; /* primary-500 */
                background: transparent; 
            }
            .header-menu .header-menu-item:nth-child(4):hover {
                color: #00BDD6FF; /* primary-500 */
                background: transparent; 
            }
            .header-menu .header-menu-item.selected:hover:active {
                color: #00BDD6FF; /* primary-500 */
                background: transparent; 
            }
            .header-menu .header-menu-item:nth-child(1) {
            
            font-size: 15px; 
            line-height: 1.8%; 
            font-weight: 400; 
            color: #565E6CFF; /* neutral-600 */
            }
            .header-menu .header-menu-item:nth-child(2) {
            
            font-size: 15px; 
            line-height: 1.8%; 
            font-weight: 400; 
            color: #565E6CFF; /* neutral-600 */
            }
            .header-menu .header-menu-item:nth-child(3) {
                
                font-size: 15px; 
                line-height: 1.8%; 
                font-weight: 400; 
                color: #565E6CFF; /* neutral-600 */
            }
            .header-menu .header-menu-item:nth-child(4) {
            
                font-size: 15px; 
                line-height: 1.8%; 
                font-weight: 400; 
                color: #565E6CFF; /* neutral-600 */
            }

            .text {
                font-family: Epilogue; /* Heading */
                line-height: 78px; 
                font-weight: 700; 
                color: #171A1FFF; /* neutral-900 */
                text-align: center;
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
            
        <!-- Sidebar / Vertical Drawer -->


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

        <button class="button-1" onclick="window.location.href='./Login.php'", style=" top: 19px; left: 80%; margin-right: 1%" onmouseover="this.style.backgroundColor='#00BDD6FF'; this.style.color = '#ffffff'; this.style.cursor = 'pointer'" onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#00BDD6FF'">Login</button>
        
        <button class="button-2" onclick="window.location.href='./Register.php'", style="top: 19px; left: 86%; margin-left: 1%;" onmouseover="this.style.backgroundColor='#ffffff'; this.style.color = '#00BDD6FF'; this.style.borderColor='#00BDD6FF'; this.style.cursor = 'pointer'" onmouseout="this.style.backgroundColor='#00BDD6FF'; this.style.color='#ffffff'; ">Get Started!</button>

        <!--=============
               Title
           ==============-->
           <div class="text" style=" top: 60px; left: 118px; font-size: 56px; ">Pure Waters, Brighter Futures</div>
           <div class="text" style=" top: 110px; left: 118px; font-size: 56px; ">Partner with Us for Clean Water Solutions!</div>
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