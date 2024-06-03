<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the tab -->
    <title>Admin |Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">
    <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../General Components & Widget/Administration/Admin_Component Style.css">
    <style>
        /* Basic styling for the body */
        body {
            font-family: 'Epilogue', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* Styling for the main content area */
        #contentArea {
            flex: 1;
            background: #E5E4E2;
        }

        /* Container styling */
        .container {
            border-radius: 6px;/* tertiary1-100 */ 
            background: #F1F4FDFF;
            border-color: #C5D1F7FF; 
            border-radius: 8px; /* border-m */
            border-width: 1px; 
            border-color: #C5D1F7FF;
            border-style: solid; 
        }

        .bg-container {
            border-radius: 6px;/* tertiary1-100 */ 
            background: #F1F4FDFF;
            border-radius: 8px; /* border-m */
            border-width: 1px; 
            border-color: #C5D1F7FF;
            border-style: solid; 
        }

        /* Styling for the overview section container */
        .overview-container {
            padding: 1%;
            display: flex;
            background: #FFFFFF;
            justify-content: space-between;
            border-radius: 0.5em;
        }

        /* Styling for individual overview items */
        .overview-item {
            flex: 1;
            margin: 0 10px;
            text-align: center;
            padding: 20px;
            background: #F1F4FDFF; /* tertiary1-100 */
            border-radius: 8px; /* border-m */
            border-width: 1px; 
            border-color: #C5D1F7FF; /* tertiary1-200 */
            border-style: solid; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Styling for the building icon */
        .overview-item i.fa-building {
            background-color: #0066ff;
            color: white;
            border-radius: 50%;
            padding: 10px; /* Reduced padding to make the circle smaller */
            font-size: 24px; /* Reduced font size to make the icon smaller */
            margin-bottom: 10px;
        }

        .overview-item i.fa-address-book {
            background-color: #0066ff;
            color: white;
            border-radius: 50%;
            padding: 10px; /* Reduced padding to make the circle smaller */
            font-size: 24px; /* Reduced font size to make the icon smaller */
            margin-bottom: 10px;
        }

        .overview-item i.fa-calendar-days {
            background-color: #0066ff;
            color: white;
            border-radius: 50%;
            padding: 10px; /* Reduced padding to make the circle smaller */
            font-size: 24px; /* Reduced font size to make the icon smaller */
            margin-bottom: 10px;
        }

        .overview-item i.fa-calendar-check {
            background-color: #0066ff;
            color: white;
            border-radius: 50%;
            padding: 10px; /* Reduced padding to make the circle smaller */
            font-size: 24px; /* Reduced font size to make the icon smaller */
            margin-bottom: 10px;
        }

        /* General paragraph styling */
        .overview-item p {
            margin: 0;
        }

        /* Styling for the number in overview items */
        .overview-item .number {
            color: blue;
            font-size: 24px;
            margin: 10px 0;
        }

        /* Styling for the title in overview items */
        .overview-item .title {
            font-size: 16px;
            font-weight: bold;
        }

        /* Styling for the main content area */
        .main-content {
            display: flex;
            justify-content: space-between;
        }

        /* Flexbox styling for main content's children */
        .main-content > div {
            flex: 1;
            margin: 0 10px;
        }

        /* Placeholder for chart container */
        .chart-container {
            height: 300px;
        }

        /* Placeholder for pie chart container */
        .pie-chart-container {
            height: 300px;
        }

        /* Styling for section titles */
        .section-title {
            margin-top: 2%;
            margin-left: 10px;
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

    <!-- Main content area -->
    <div id="contentArea">
    <!-- Body of the webpage -->
    <body>
        
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/Administration/Admin_Sidebar.php");
        ?>

        <!-- Body -->
        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/Administration/Admin_Header.php");
            ?>

            <!-- Content Here -->
            <p style="padding-left: 2%"><b>Dashboard</b></p>
            <div style="padding-left: 2%">
        
                <div class="overview-container">
                    <div class="overview-item">
                        <i class="fa-solid fa-building"></i>
                        <p style="color:blue; font-size:24px;">
                            <?php
                                require("../../Database Layer/db_connection.php");

                                $sql = "SELECT COUNT(*) AS orgCount FROM organization";

                                $result = mysqli_query($con, $sql);

                                if($result == true){
                                    $row = mysqli_fetch_assoc($result);
                                }
                            ?>
                            <b><?php echo $row["orgCount"] ?></b>
                        </p>
                        <p><b>Organization Registration</b></p>
                    </div>
                    <div class="overview-item">
                        <i class="fa-regular fa-address-book"></i>
                        <p style="color:blue; font-size:24px;">
                            <?php
                                    require("../../Database Layer/db_connection.php");

                                    $sql = "SELECT COUNT(*) AS userCount FROM user";

                                    $result = mysqli_query($con, $sql);

                                    if($result == true){
                                        $row = mysqli_fetch_assoc($result);
                                    }
                                ?>
                            <b><?php echo $row["userCount"] ?></b>
                        </p>                            
                        <b>User Registration</b></p>
                    </div>
                    <div class="overview-item">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p style="color:blue; font-size:24px;">
                            <?php
                                    require("../../Database Layer/db_connection.php");

                                    $sql = "SELECT COUNT(*) AS eventCreated 
                                    FROM `event` 
                                    WHERE DateTime BETWEEN '2024-06-01' AND '2024-06-30';";
                                    $result = mysqli_query($con, $sql);

                                    $result = mysqli_query($con, $sql);

                                    if($result == true){
                                        $row = mysqli_fetch_assoc($result);
                                    }
                                ?>
                            <b><?php echo $row["eventCreated"] ?></b>
                        </p>               
                        <p><b>Organization Event Created</b></p>
                    </div>
                    <div class="overview-item">
                        <i class="fa-regular fa-calendar-check"></i>
                        <p style="color:blue; font-size:24px;">
                            <?php
                                    require("../../Database Layer/db_connection.php");

                                    $sql = "SELECT COUNT(*) AS complainCountbymonth 
                                    FROM `complain` 
                                    WHERE DateTime BETWEEN '2024-06-01' AND '2024-06-30';";
                                    $result = mysqli_query($con, $sql);

                                    if($result == true){
                                        $row = mysqli_fetch_assoc($result);
                                    }
                                ?>
                            <b><?php echo $row["complainCountbymonth"] ?></b>
                        </p>
                        <p><b>User Complaint Issues</b></p>
                    </div>
                </div>

                <!-- Report by this month section -->
                <div class="section-title" style="margin-top: 2%">Report by this month</div>
                <div class="main-content">
                    <div class="bg-container">
                        <div class="container">
                            <p style= "padding: 1%;"><b>Resolved and Unresolved Water Pollution Complaint</b></p>
                            <div class="chart-container">
                                <!-- Insert your chart here -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-container">
                        <div class="container">
                            <p style= "padding: 1%;"><b>Active Events</b></p>
                            <div class="pie-chart-container">
                                <!-- Insert your pie chart here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../General Components & Widget/Administration/Admin_Component Script.js"></script>
    </body>
</html>
