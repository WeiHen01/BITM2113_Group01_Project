<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];


    $city = $_GET['city'];
    $country = $_GET['country'];
    $state = $_GET['state'];

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
        <title>User | Water Pollution Details</title>
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

            .container iframe {
                width: 100%;
                height: 65%;
                border: none;
            }

            .container-2 {
                margin-left: 1%;
                margin-right: 2%;
                width: 95%; 
                height: 72vh; 
                background: #FFFFFFFF; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            .event-details{
                background: #9cbfe7;
                padding: 1%;
                margin-bottom: 1%;
                border-radius: 1%;
            }

            .event{
                background: #9cbfe7;
                padding: 1%;
                margin-bottom: 1%;
                border-radius: 1%;
            }


            
        </style>
    </head>


    <!-- Body of the webpage -->
    <body onload="getLocation()">
        
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

            <div style = "padding-top: 0.5%; padding-left: 2%; margin-bottom: 2%">
                
                <div style = "display: flex; align-items: center; gap: 1%">
                    <a href="#" class="back-link" onclick="window.history.back()">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <p class="header-text" style = "font-weight: bold">Organization Details</p>
                </div>

                <p style = "margin-left: 2%;">Location: <?php echo $state == null ? null : $state ?> > <?php echo $city ?> </p>

                <div style = "margin-bottom: 2%">
                    <!-- First container group -->
                    <div style="display: flex;">
                        <!-- Inner flex container for the first two containers -->
                        <div style="display: flex; flex-direction: column; width: 50%; gap: 20px">
                            
                            <div class="container" >
                                <p style="padding-left: 1.5%"><b>Details</b></p>
                                

                                
                            </div>
                        </div>
                        <!-- Third container -->
                        <div class="container-2" style="width: 50%; overflow-y: auto">
                            <p style="padding-left: 1%"><b>Complaints related to this area</b></p>
                            <?php 
                                

                            ?>

                            <div>

                                <div style = "background: #a899fb; cursor: pointer; margin-bottom: 20px; padding: 2%;" onClick="window.location.href='User Event Details.php?event=<?php echo $row_2['EventId']; ?>'">
                                    
                                    <strong style ="font-size: 25px">Title</strong>
                                    <p>Description</p>
                                    <p></p>
                                
                                </div>


                            </div>
                            
                            


                        </div>
                    </div>
                </div>

            </div>
            


            <!-- Content ends -->



            
        </div>
        

        

        
        

    </body>


    <script src="../General Components & Widget/User/User Component Script.js"></script>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } 
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            // Construct the URL with the latitude and longitude
            var url = "https://embed.waze.com/iframe?zoom=14&lat=" + latitude + "&lon=" + longitude;

            // Update the src attribute of the iframe
            document.getElementById("wazeFrame").src = url;
        }
    </script>

</html>