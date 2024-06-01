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

            table {
                border: 1px solid #dededf;
                height: 100%;
                width: 100%;
                table-layout: fixed;
                border-collapse: collapse;
                border-spacing: 1px;
                text-align: left;
            }

            th {
                border: 1px solid #dededf;
                background-color: #eceff1;
                color: #000000;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 10px;
                padding-right: 10px;
            }

            td {
                border: 1px solid #dededf;
                background-color: #ffffff;
                color: #000000;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 10px;
                padding-right: 10px;
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

            <p style="padding-left: 2%; font-size: 25px"><b>Home</b></p>
            <!-- make it in same row -->
            <!-- First container group -->
            <div style = "margin-bottom: 2%">
                <!-- First container group -->
                <div style="display: flex;">
                    <!-- Inner flex container for the first two containers -->
                    <div style="display: flex; flex-direction: column; width: 50%; gap: 20px">
                        <div class="container" style =" overflow-y: auto">
                            <p style="padding-left: 1.5%"><b>Pollution Areas</b></p>
                            <?php 
                                require("../../Database Layer/db_connection.php");

                                $sql = "SELECT DISTINCT City, State, Country FROM complain ORDER BY Country, State, City";

                                $result = mysqli_query($con, $sql);

                                $current_country = ''; // Variable to store the current country
                                $current_state = '';   // Variable to store the current state

                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){

                                        // Check if the country has changed
                                        if ($row['Country'] !== $current_country) {
                                            // If country has changed, start a new table for the country
                                            if ($current_country !== '') {
                                                // Close the previous table if it's not the first one
                                                echo "</tbody></table>";
                                            }
                                            // Start a new table for the current country
                                            echo "<div style='padding: 1%;'>";
                                            echo "<table>";
                                            echo "<thead>
                                                    <tr>
                                                        <th colspan='2' style='background: #5088e7; color: #ffffff; cursor: pointer' onclick=\"window.location.href='Water Pollution Details.php?country=".$row['Country']."'\" onmouseover=\"this.style.background='#5059e7'\" onmouseout=\"this.style.background='#5088e7'\"> ".$row['Country']." </th>
                                                    </tr>
                                                </thead>";

                                            echo "<tbody>";
                                            $current_country = $row['Country']; // Update the current country
                                            $current_state = ''; // Reset current state when changing country
                                        }

                                        // Check if the state has changed within the same country
                                        if ($row['State'] !== $current_state) {
                                            echo "<tr><th colspan='2' onmouseover=\"this.style.background='#7a7a7a'\" onmouseout=\"this.style.background='#dededf'\" onclick=\"window.location.href='Water Pollution Details.php?country=".$row['Country']."&state=".$row['State']."'\">".$row['State']."</th></tr>";
                                            $current_state = $row['State']; // Update the current state
                                        }

                                        // Display City information
                                        echo "<tr><td>".$row['City']."</td><td><a href='Water Pollution Details.php?country=".$row['Country']."&state=".$row['State']."&city=".$row['City']."' style = 'text-decoration: none'>View</a></td></tr>";
                                    }
                                    // Close the last table
                                    echo "</tbody></table></div>";
                                }
                            ?>


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

                            <div style = "background: #9cbfe7; cursor: pointer; margin-bottom: 20px; padding: 2%;" onClick="window.location.href='User Event Details.php?event=<?php echo $row_2['EventId']; ?>'">
                                
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