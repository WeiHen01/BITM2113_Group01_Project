<?php 
    session_start();
    include ("Database Layer/db_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title of the tab -->
    <title>BITM2113 | H20 Harmony - Clean Water Initiatives</title>

    <!-- External CSS style -->
    <link href="./output.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    <!-- FavIcon on the browser tab-->
    <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">

    <!-- Embedded CSS -->
    <style>
        html {
            font-family: 'Epilogue', sans-serif;
            box-sizing: border-box;
            font-size: 16px; /* Base font size for rem units */
        }

        *, *::before, *::after {
            box-sizing: inherit;
        }

        body {
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* General Styles */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #f8f9fa;
        }

        #logo {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        #logo img {
            width: 50px;
        }

        .header-menu {
            display: flex;
            gap: 2rem;
        }

        .header-menu-item {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
            line-height: 1.8rem;
            font-weight: 400;
            color: #565E6C;
            background: transparent;
            border-radius: 0.25rem;
            cursor: pointer;
            white-space: nowrap;
        }

        .header-menu-item.selected {
            font-weight: 700;
            color: #00BDD6;
        }

        .header-menu-item:hover {
            color: #00BDD6;
        }

        .button-group {
            
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .button-1, .button-2 {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 1.25rem;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            line-height: 1.75rem;
            font-weight: 400;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .button-1 {
            color: #00BDD6;
            background: transparent;
            border: 1px solid #00BDD6;
            cursor: pointer;
        }

        .button-2 {
            color: #FFFFFF;
            background: #00BDD6;
            border: 1px solid #00BDD6;
            cursor: pointer;
        }

        
        .button-1:hover{
            color: #FFFFFF;
            background: #00BDD6;
        }
        .button-2:hover{
            background: #FFFFFF;
            color: #00BDD6;
        }

        .text {
            font-family: 'Epilogue', sans-serif;
            line-height: 4.875rem;
            font-weight: 700;
            color: #171A1F;
        }

        .text-body {
            font-family: 'Inter', sans-serif;
            line-height: 1.875rem;
            color: #9095A0;
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
            border-radius: 1.875rem;
        }

        .container {
            display: flex;
            align-items: center;
            width: 100%;
            background: #FFFFFF;
        }

        .section {
            margin-bottom: 3.125rem;
        }
        
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header-container">
        <div id="logo">
            <img src="Assets/Image/H20 Harmony Logo.png" alt="Logo">
            <p style="font-size: 0.9375rem;"><b>H2O Harmony</b></p>
        </div>

        <div class="header-menu">
            <div class="header-menu-item">Home</div>
            <div class="header-menu-item selected">Events</div>
            <div class="header-menu-item">About Us</div>
            <div class="header-menu-item">Learn More</div>
        </div>

        <div class="button-group">
            <button class="button-1" onclick="window.location.href='./Login.php'">Login</button>
            <button class="button-2" onclick="window.location.href='./Register.php'">Get Started!</button>
        </div>
    </div>

    <!-- Title -->
    <div class="section"></div> 
    <div class="text" style="font-size: 3.5rem; text-align: center;">Pure Waters, Brighter Futures</div>
    <div class="text" style="font-size: 3.5rem;  text-align: center;">Partner with Us for Clean Water Solutions!</div>
    <div class="text-body" style="font-size: 1.25rem; font-weight: 400;   text-align: center;">Empowering Communities through Innovative and Sustainable Water Solutions,<br> Ensuring Access to Clean Water for a Healthier and Brighter Future for All</div>

    <!-- Upper-Body Content -->
    <div class="image-container" style="height: 80vh;">
        <img src="Assets/Image/ocean.png" style="width: 100%; max-width: 81.75rem; border-radius: 1.875rem;" alt="Event Image">
    </div>

    <div class="section"></div>
    <div class="text-body" style="font-size: 1.875rem; font-weight: 600;  text-align: center;">Trusted by</div>
    <div class="section"></div>

    <div class="image-container">
        <img src="Assets/Image/water org.png" alt="Water Org Image">
        <img src="Assets/Image/uniceff.png" alt="Unicef Image">
        <img src="Assets/Image/whoo.png" alt="Who Image">
        <img src="Assets/Image/gwcc.png" alt="GWCC Image">
        <img src="Assets/Image/puree.png" alt="Puree Image">
    </div>

    <!-- More -->
    <div class="section"></div>
    <div class="container" style="padding: 2.5%;">
        <div class="image-container" style="flex: 1;">
            <img src="Assets/Image/volunteer.png" style="width: 80%; max-width: 25rem; border-radius: 1.875rem;" alt="Event Image">
        </div>
        <div class="text-section" style="flex: 1; padding-right: 1.25rem;">
            <div class="text" style="font-size: 2.1875rem; margin-bottom: 1.25rem;  text-align: justify;">Seamless Engagement</div>
            <div class="text-body" style="font-size: 1.25rem; font-weight: 400; margin-bottom: 1.25rem; text-align: justify;">
                Explore and Participate in Organizational<br> Events Effortlessly!
            </div>
            <div class="button-group"  style="flex: 1;">
                <button class="button-1" onclick="window.location.href=''" style="color: #00bcd4; width: 9.375rem; height: 2.5rem;">Learn more</button>
                <button class="button-2" onclick="window.location.href=''" style="margin-right: 0.625rem; width: 9.375rem; height: 2.5rem; ">Try now</button>
            </div>
        </div>
    </div>
    <div class="section"></div>
    <div class="container" style="padding: 2.5%;">
        <div class="image-container" style="flex: 1;">
            <img src="Assets/Image/Org3.png" style="width: 80%; max-width: 25rem; border-radius: 1.875rem;" alt="Event Image">
        </div>
        <div class="text-section" style="flex: 1; padding-right: 1.25rem;">
            <div class="text" style="font-size: 2.1875rem; margin-bottom: 1.25rem;  text-align: justify;">Empowered Communities</div>
            <div class="text-body" style="font-size: 1.25rem; font-weight: 400; margin-bottom: 1.25rem; text-align: justify;">
                Witness the Transformation of Communities<br> through Our Initiatives!
            </div>
            
            <div class="button-group"  style="flex: 1;">
                <button class="button-1" onclick="window.location.href=''" style="color: #00bcd4; width: 9.375rem; height: 2.5rem;">Learn more</button>
                <button class="button-2" onclick="window.location.href=''" style="margin-right: 0.625rem; width: 9.375rem; height: 2.5rem; ">Try now</button>
            </div>

        </div>
    </div>


    <div class="section"></div>
</body>

</html>
