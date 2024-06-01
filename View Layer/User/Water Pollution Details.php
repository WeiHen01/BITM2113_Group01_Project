<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];


    if(isset($_GET['country'])){
        $country = $_GET['country'];
    }
    if(isset($_GET['city'])){
        $city = $_GET['city'];
    }
    if(isset($_GET['state'])){
        $state = $_GET['state'];
    }
    

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
                height: 60vh; 
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
                    <a href="#" class="back-link" onclick="window.location.href='User Home.php'">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <p class="header-text" style = "font-weight: bold">Water Pollution Details</p>
                </div>

                <p style = "margin-left: 2%;">
                    <a style = "text-decoration: none" href="?country=<?php echo isset($_GET['country']) ? $_GET['country'] : '' ?>">
                        <?php echo isset($_GET['country']) ? $_GET['country']: '' ?>
                    </a> 

                    <a style = "text-decoration: none" href="?country=<?php echo isset($_GET['country']) ? $_GET['country'] : '' ?>&state=<?php echo isset($_GET['state']) ? $_GET['state'] : '' ?>">
                        <?php echo isset($_GET['state']) ? '> '. $_GET['state'] : '' ?>
                    </a>

                    <?php if (isset($_GET['city'])): ?>
                        <a style = "text-decoration: none" href="?country=<?php echo $_GET['country'] ?>&state=<?php echo $_GET['state'] ?>&city=<?php echo $_GET['city'] ?>">
                            <?php echo isset($_GET['city']) ? '> '. $_GET['city'] : '' ?>
                        </a> 
                    <?php endif; ?>

                </p>

                <div style = "margin-bottom: 2%">
                    <!-- First container group -->
                    <div style="display: flex;">
                        <!-- Inner flex container for the first two containers -->
                        <div style="display: flex; flex-direction: column; width: 50%; gap: 20px">
                            
                            <div class="container" >
                                <p style="padding-left: 1.5%"><b>Location: </b>
                                    <?php if (isset($_GET['city'])): ?>
                                    <?php echo isset($_GET['city']) ? $_GET['city']. ', ' : '' ?>
                                    <?php endif; ?>
                                    <?php echo isset($_GET['state']) ? $_GET['state']. ', ' : '' ?>
                                    <?php echo isset($_GET['country']) ? $_GET['country']: '' ?>
                                </p>
                                <?php
                                    require("../../Database Layer/db_connection.php");

                                    $country = $_GET['country'];

                                    $sql = "SELECT COUNT(*) AS Number FROM complain WHERE Country = '$country' ";

                                    if(isset($_GET['state'])){
                                        $state = $_GET['state'];
                                        $sql .= "AND State = '$state' ";
                                    }

                                    if(isset($_GET['city'])){
                                        $city = $_GET['city'];
                                        $sql .= "AND City = '$city' ";
                                    }
    
                                    $result = mysqli_query($con, $sql);

                                    if($result == true){
                                        $row = mysqli_fetch_assoc($result);
                                        $count = $row['Number'];
                                        $display = '';
                                        if($count < 2){
                                            $display = $count . " complaint ";
                                        }
                                        else {
                                            $display = $count . " complaints ";
                                        }
                                    }

                                    
                                ?>
                                <p style="padding-left: 1.5%"><b><?php echo $display ?></b>
                                <?php echo $count < 2 ? "has been " : "have been " ?>made about this location.</p>
                                
                            </div>
                        </div>
                        <!-- Third container -->
                        <div class="container-2" style="width: 50%; overflow-y: auto">
                            <p style="padding-left: 1%"><b>Complaints related to this area</b></p>
                            

                            <div>
                                <?php
                                    require("../../Database Layer/db_connection.php");

                                    $country = $_GET['country'];

                                    $sql = "SELECT * FROM complain WHERE Country = '$country' ";

                                    if(isset($_GET['state'])){
                                        $state = $_GET['state'];
                                        $sql .= "AND State = '$state' ";
                                    }

                                    if(isset($_GET['city'])){
                                        $city = $_GET['city'];
                                        $sql .= "AND City = '$city' ";
                                    }

                                    $result = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){

                                    
                                ?>
                                <div style = "background: #a899fb; cursor: pointer; margin-bottom: 20px; padding: 2%;" onClick="window.location.href='User Complaint Details.php?complaint=<?php echo $row['ComplainId']; ?>'">
                                    
                                    <strong style ="font-size: 25px"><?php echo $row['Title'] ?></strong>
                                    <p><?php echo $row['Description'] ?></p>
                                    <p>Submitted by: <?php echo $row['DateTime'] ?></p>
                                
                                </div>
                                <?php 
                                        }
                                    }
                                ?>


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