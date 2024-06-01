<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Dashboard</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <script src="https://www.waze.com/widgets/map-embed/init.js"></script>

        <style>
            /* Container 23 */
            .container {
                margin-left: 2%;
                width: 25%; 
                height: 20vh; 
                background: url("../../Assets/Image/User_dashboard_bg.png"); /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            .container-2 {
                margin-left: 2%;
                margin-right:  2%;
                width: 94vw; 
                height: 60vh; 
                background: #FFFFFFFF; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            
        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>

            <div style="overflow-y: auto">
                <p style="padding-left:2%; "><b>Dashboard</b></p>

                <div style="display: flex;">
                    <div class="container" style = "display: flex; justify-content: space-evenly"> 
                        <div>
                            <p style="padding-left:2%; ">Total Polluted Areas</p> 
                            
                            <?php 
                                require("../../Database Layer/db_connection.php");
                                
                                try {
                                    $sql = "SELECT COUNT(DISTINCT CONCAT(City, ',', State, ',', Country)) AS UniqueLocations
                                            FROM complain";

                                    // Fetch the result
                                    // Execute the query
                                    $result = $con->query($sql);
                                    
                                    // Check if result exists
                                    if ($result) {
                                        // Fetch the result as an associative array
                                        $row = $result->fetch_assoc();
                                        
                                        // Check if the result is not empty
                                        if ($row && isset($row['UniqueLocations'])) {
                                            // Output the result
                                        // Output the result
                                            echo '<p style="font-weight: bold; font-size: 40px; padding-left:2%; ">' . $row['UniqueLocations'] . '</p>';
                                        } else {
                                            echo '<p style="font-weight: bold; font-size: 40px; padding-left:2%; "> 0</p>'; // No unique locations found
                                        }
                                    } else {
                                        echo '<p style="font-weight: bold">0</p>'; // No result found
                                    }
                            
                                    
                                    
                                } catch(Exception $e) {
                                    // Handle errors
                                    echo "Error: " . $e->getMessage();
                                }
                            ?>
                        </div>
                        <!-- <i class="fa-solid fa-map-location-dot"></i> -->
                    </div>

                    <div class="container" style = "margin-bottom: 2%; display: flex;">
                        <div>
                            <p style="padding-left:2%; ">Total Complaints in This week</p>

                            <?php 
                                require("../../Database Layer/db_connection.php");
                                
                                try {
                                    // Get the current date
                                    $currentDate = date('Y-m-d');
                                
                                    // Calculate the start date of the current week (assuming Monday is the start of the week)
                                    $startDate = date('Y-m-d', strtotime('last monday', strtotime($currentDate)));
                                
                                    // Calculate the end date of the current week (assuming Sunday is the end of the week)
                                    $endDate = date('Y-m-d', strtotime('next sunday', strtotime($currentDate)));
                                
                                    // SQL query to count records within the current week
                                    $sql = "SELECT COUNT(*) AS TotalRecords FROM complain WHERE DateTime >= ? AND DateTime <= ?";
                                    
                                    // Prepare the statement
                                    $statement = $con->prepare($sql);
                                    
                                    // Bind parameters
                                    $statement->bind_param('ss', $startDate, $endDate);
                                    
                                    // Execute the query
                                    $statement->execute();
                                    
                                    // Bind the result
                                    $statement->bind_result($totalRecords);
                                    
                                    // Fetch the result
                                    $statement->fetch();
                                    
                                    // Output the total records for this week
                                    echo '<p style="font-weight: bold; font-size: 40px; padding-left:2%; ">' . $totalRecords . '</p>';
                                    
                                    // Close the statement
                                    $statement->close();
                                } catch(Exception $e) {
                                    // Handle errors
                                    echo "Error: " . $e->getMessage();
                                }
                            ?>
                        </div>
                        
                    </div>
                </div>

                <div class = "container-2" style="margin-bottom: 2%"></div>

            </div>

            


        </div>


    </body>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>