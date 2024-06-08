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

    <!-- Import CSS References Stylesheets using URL Link-->



    <!-- Embedded CSS style -->
    <style>
        .overview-container {
            padding: 1%;
            display: flex;
            background: #FFFFFF;
            justify-content: space-between;
            border-radius: 0.5em;
        }
        .overview-item {
            width: 25%;
            margin: 0 10px;
            text-align: center;
            padding-top:  10px;
            padding-bottom:  10px;
            background: #F1F4FDFF; /* tertiary1-100 */
            border-radius: 8px; /* border-m */
            border-width: 1px; 
            border-color: #C5D1F7FF; /* tertiary1-200 */
            border-style: solid; 
            display: flex;
            flex-direction: column;
        }
        .overview-item p {
            margin: 0;
        }
        .overview-item .number {
            color: blue;
            font-size: 24px;
            margin: 10px 0;
        }
        .overview-item .title {
            font-size: 16px;
            font-weight: bold;
        }
        /* Container 322 */
        .container {
            position: absolute; 
            top: 372px; 
            left: 1164px; 
            width: 228px; 
            height: 484px; 
            background: #FFFFFFFF; /* white */
            border-radius: 6px; /* border-l */
            border-width: 1px; 
            border-color: #DEE1E6FF; /* neutral-300 */
            border-style: solid; 
        }
    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>User | Dashboard</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Organization/Org Component Style.css">
    </head>


    <!-- Body of the webpage -->
    <body>
        
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/Organization/Org Sidebar.php");
        ?>

        <!-- Body --> 

        <div id="contentArea">
            
            <!-- Header -->
            <?php 
                include("../General Components & Widget/Organization/Org Header.php");
            ?>

            <!-- Content here -->
            <p style="padding-left: 2%; font-size: 20px; font-weight: 700;"><b>Overview</b></p>
            <div style="padding-left: 2%">
                <div class="overview-container">
                    <div class="overview-item">
                        <div style="display: flex;">
                            <i class="fa-solid fa-check-double" style="font-size: 24px; margin-bottom: 10px; padding-left: 5%; font-size: x-large;"></i>
                            <div style="width: 20%;"></div>
                            <p><b>Completed Event</b></p>
                        </div>
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
                        
                    </div>
                    <div class="overview-item">
                        <div style="display: flex;">
                            <i class="fa-solid fa-spinner" style="font-size: 24px; margin-bottom: 10px; padding-left: 5%; font-size: x-large;"></i>
                            <div style="width: 20%;"></div>
                            <p><b>Upcoming Event</b></p>
                        </div>
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
                     
                    </div>
                    <div class="overview-item">
                        <div style="display: flex;">
                            <i class="fa-regular fa-clock" style="font-size: 24px; margin-bottom: 10px; padding-left: 5%; font-size: x-large;"></i>
                            <div style="width: 20%;"></div>
                            <p><b>Cancelled Event</b></p>
                        </div>
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
                    </div>
                    <div class="overview-item">
                        <div style="display: flex;">
                            <i class="fa-solid fa-list" style="font-size: 24px; margin-bottom: 10px; padding-left: 5%; font-size: x-large;"></i>
                            <div style="width: 20%;"></div>
                            <p><b>Postponed Event</b></p>
                        </div>
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
                    </div>
                </div>
            </div>
            <p style="padding-left: 2%; font-size: 20px; font-weight: 700;"><b>Detailed Reports</b></p>
            <div style="display: flex;">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                <canvas id="barChart" style="padding-left: 5%; width:150%;max-width:900px"></canvas>
                <canvas id="pieChart" style="width:50%;max-width:450px"></canvas>
            </div>
        </div>
        

        

        
        

    </body>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>    
    <script>
        var xValues = ["Jan", "Feb", "Mac", "April", "May", "June","July", "Aug", "Sept", "Oct", "Nov", "Dec"];
        var yValues = [50, 40, 35, 20, 0];
        var barColors = ["blue", "green","yellow"];
        var dataset1 = [50, 40, 35, 20, 10, 30, 45, 25, 15, 50, 35, 20];
        var dataset2 = [30, 20, 25, 15, 5, 25, 35, 20, 10, 40, 25, 15];
        var dataset3 = [20, 10, 15, 10, 0, 20, 25, 15, 5, 30, 20, 10];
        var barColors1 = "blue";
        var barColors2 = "green";
        var barColors3 = "yellow";

        new Chart("barChart", {
        type: "bar",
        data: {
        labels: xValues,
        datasets: [
                    {
                        label: "Dataset 1",
                        backgroundColor: barColors1,
                        data: dataset1
                    },
                    {
                        label: "Dataset 2",
                        backgroundColor: barColors2,
                        data: dataset2
                    },
                    {
                        label: "Dataset 3",
                        backgroundColor: barColors3,
                        data: dataset3
                    }
                ]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: "Yearly Reports"
            }
        }
        });
    </script>
    <script>
        var xValues = ["Completed", "Upcoming", "Cancelled"];
        var yValues = [ 44, 24, 15];
        var barColors = [
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
        ];

        new Chart("pieChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: "Last 30 days performance"
            }
        }
        });
    </script>

</html>