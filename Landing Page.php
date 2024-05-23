<!--=====================================================
    Default Landing Page by Shao Cantikkkksss
=======================================================-->
<!DOCTYPE html>

    <!-- Embedded CSS style -->
    <style>

        /* Button 1 */
        .button-1 {
            position: absolute; 
            width: 87px; 
            height: 40px; 
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
            top: 19px; 
            left: 1269px; 
            width: 148px; 
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

        <button class="button-1" onclick="window.location.href='./Login.php'", style=" top: 19px; left: 83%;">Login</button>
        <button class="button-2" onclick="window.location.href='./Register.php'", style="top: 19px; left: 89%; ">Get Started!</button>

        <!--=============
               Title
           ==============-->
           <div class="text" style=" top: 60px; left: 118px; font-size: 56px; ">Pure Waters, Brighter Futures</div>
           <div class="text" style=" top: 110px; left: 118px; font-size: 56px; ">Partner with Us for Clean Water Solutions!</div>
    </body>

</html>
