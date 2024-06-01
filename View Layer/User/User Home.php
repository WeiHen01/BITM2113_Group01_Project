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

            <p style="padding-left: 2%; font-size: 25px"><b>Home</b></p>
            <!-- make it in same row -->
            <!-- First container group -->
            <div style = "margin-bottom: 2%">
                <!-- First container group -->
                <div style="display: flex;">
                    <!-- Inner flex container for the first two containers -->
                    <div style="display: flex; flex-direction: column; width: 50%; gap: 10px">
                        <div class="container">
                            <p style="padding-left: 1.5%"><b>Location</b></p>
                            <iframe
                                src="https://embed.waze.com/iframe?zoom=14&lat=40.730610&lon=-73.935242"
                                allowfullscreen
                                style="border: none;">
                            </iframe>
                        </div>
                        <div class="container" >
                            <p style="padding-left: 1.5%"><b>Latest Complaint submitted</b></p>
                            <?php 
                                require("../../Database Layer/db_connection.php");

                                $sql = "SELECT * FROM complain WHERE UserId IN(
                                    SELECT UserId FROM user WHERE Email = '$loggedUserEmail'
                                ) ORDER BY DateTime DESC LIMIT 1";
        
                                $result = mysqli_query($con, $sql);

                                // Check if the query returned any results
                                if ($result && mysqli_num_rows($result) > 0) {
                                
                                    $row = mysqli_fetch_assoc($result);

                                    
                            
                            ?>

                            <div class ="event" style = "cursor: pointer" onClick="window.location.href='User Complaint Details.php?complaint=<?php echo $row['ComplainId']; ?>'">
                                
                                <strong style ="font-size: 25px"><?php echo $row["Title"] ?></strong>
                                <p><?php echo $row["Description"] ?></p>
                                <p><b>Submitted By:</b> <?php echo $row['DateTime']?></p>
                                
                                <?php 
                                    }  
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Third container -->
                    <div class="container-2" style="width: 50%; overflow-y: auto">
                        <p style="padding-left: 1%"><b>Upcoming Events</b></p>
                        <?php 
                            require("../../Database Layer/db_connection.php");

                            $sql = "SELECT * FROM participation WHERE UserId IN(
                                SELECT UserId FROM user WHERE Email = '$loggedUserEmail'
                            ) AND ParticipationStatus = 'Joined'";
    
                            $result = mysqli_query($con, $sql);

                            // Check if the query returned any results
                            if ($result && mysqli_num_rows($result) > 0) {

                                while($row = mysqli_fetch_assoc($result)){

                                    $event = $row['EventId'];

                                    $sql_2 = "SELECT * FROM event WHERE EventId = $event ";

                                    $result_2 = mysqli_query($con, $sql_2);

                                    if ($result_2 && mysqli_num_rows($result_2) > 0) {
                                        while ($row_2 = mysqli_fetch_assoc($result_2)) {
                            

                        ?>

                        <div>

                            <div style = "background: #a899fb; cursor: pointer; margin-bottom: 20px; padding: 2%;" onClick="window.location.href='User Event Details.php?event=<?php echo $row_2['EventId']; ?>'">
                                
                                <strong style ="font-size: 25px"><?php echo $row_2["Name"] ?></strong>
                                <p><?php echo $row_2["Description"] ?></p>
                                <p><b>Participated By:</b> <?php echo $row_2['DateTime']?>
                               
                            </div>


                        </div>
                        <?php 
                                            }
                                        }
                                    }
                                }
                        ?>
                        


                    </div>
                </div>
            </div>



            <!-- Content ends -->



            
        </div>
        

        

        
        

    </body>


    <script src="../General Components & Widget/User/User Component Script.js"></script>
    

</html>