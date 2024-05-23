<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

?>

<!--========================================================
    User Home.php: User Home page after successful login
==========================================================-->

<!--
    Features provided in this page:
    1. Vertical drawer
    2. Horizontal Navigation bar
    3. Notification using Javascript integration
    4. Page Navigation
-->

<!DOCTYPE html>

    <!-- Import CSS References Stylesheets using URL Link-->



    <!-- Embedded CSS style -->
    <style>

    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>User | Home</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">


        <style>
            /* Container 23 */
            .container {
                margin-left: 4%;
                width: 95%; 
                height: 35vh; 
                background: #FFFFFFFF; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            .container-2 {
                margin-left: 1%;
                margin-right: 2%;
                width: 95%; 
                height: 71vh; 
                background: #FFFFFFFF; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }
        </style>
    </head>


    <!-- Body of the webpage -->
    <body>
        
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <!-- Body --> 

        <div id="contentArea">
            
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>

            <!-- Content here -->

            <p style="padding-left: 2%"><b>Home</b></p>
            <!-- make it in same row -->
            <!-- First container group -->
            <div>
                <!-- First container group -->
                <div style="display: flex;">
                    <!-- Inner flex container for the first two containers -->
                    <div style="display: flex; flex-direction: column; width: 50%;">
                        <div class="container" style="margin-bottom: 1%">
                            <p style="padding-left: 1.5%"><b>Location</b></p>
                        </div>
                        <div class="container" >
                            <p style="padding-left: 1.5%"><b>Latest Complaint submitted</b></p>
                        </div>
                    </div>
                    <!-- Third container -->
                    <div class="container-2" style="width: 50%;">
                        <p style="padding-left: 1.5%"><b>Upcoming Events</b></p>
                    </div>
                </div>
            </div>



            
        </div>
        

        

        
        

    </body>


    <script src="../General Components & Widget/User/User Component Script.js"></script>


</html>