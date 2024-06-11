<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");

    // Retrieve data for Overview section
    $sql = "SELECT 
                (SELECT COUNT(*) FROM event WHERE Status='Completed') AS TotalCompletedEvent,
                (SELECT COUNT(*) FROM event WHERE Status='Upcoming') AS TotalUpcomingEvent,
                (SELECT COUNT(*) FROM event WHERE Status='Cancelled') AS TotalCancelledEvent,
                (SELECT COUNT(*) FROM event WHERE Status='Postponed') AS TotaPostponedEvent";

    $result = mysqli_query($con, $sql);

    if($result === false){
        // Handle error
        die(mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($result);
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
        <title>Org | Dashboard</title>
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

            <?php 
                require("../../Database Layer/db_connection.php");

                // Retrieve data for Overview section
                $sql = "SELECT 
                            (SELECT COUNT(*) FROM event WHERE Status='Completed') AS TotalCompletedEvent,
                            (SELECT COUNT(*) FROM event WHERE Status='Upcoming') AS TotalUpcomingEvent,
                            (SELECT COUNT(*) FROM event WHERE Status='Cancelled') AS TotalCancelledEvent,
                            (SELECT COUNT(*) FROM event WHERE Status='Postponed') AS TotaPostponedEvent";

                $result = mysqli_query($con, $sql);

                if($result === false){
                    // Handle error
                    die(mysqli_error($con));
                }

                $row = mysqli_fetch_assoc($result);
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
                            <b><?php echo $row["TotalCompletedEvent"] ?></b>
                        </p>

                    </div>
                    <div class="overview-item">
                        <div style="display: flex;">
                            <i class="fa-solid fa-spinner" style="font-size: 24px; margin-bottom: 10px; padding-left: 5%; font-size: x-large;"></i>
                            <div style="width: 20%;"></div>
                            <p><b>Upcoming Event</b></p>
                        </div>
                        <p style="color:blue; font-size:24px;">
                            <b><?php echo $row["TotalUpcomingEvent"] ?></b>
                        </p>                          
                     
                    </div>
                    <div class="overview-item">
                        <div style="display: flex;">
                            <i class="fa-regular fa-clock" style="font-size: 24px; margin-bottom: 10px; padding-left: 5%; font-size: x-large;"></i>
                            <div style="width: 20%;"></div>
                            <p><b>Cancelled Event</b></p>
                        </div>
                        <p style="color:blue; font-size:24px;">
                            <b><?php echo $row["TotalCancelledEvent"] ?></b>
                        </p>  
                    </div>
                    <div class="overview-item">
                        <div style="display: flex;">
                            <i class="fa-solid fa-list" style="font-size: 24px; margin-bottom: 10px; padding-left: 5%; font-size: x-large;"></i>
                            <div style="width: 20%;"></div>
                            <p><b>Postponed Event</b></p>
                        </div>
                        <p style="color:blue; font-size:24px;">
                            <b><?php echo $row["TotaPostponedEvent"] ?></b>
                        </p>  
                    </div>
                </div>
            </div>
            <p style="padding-left: 2%; font-size: 20px; font-weight: 700;"><b>Detailed Reports</b></p>
            <div style="display: flex;">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                <canvas id="pieChart" style="width:50%;max-width:450px"></canvas>
                <canvas id="barChart" style="padding-left: 5%; width:150%; max-width:850px"></canvas>
            </div>
            
        </div>
        

        

        
        

    </body>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>    
    <script>
        <?php
        // Create arrays to store monthly data for each event status
        $completedEventData = array_fill(0, 12, 0);
        $upcomingEventData = array_fill(0, 12, 0);
        $cancelledEventData = array_fill(0, 12, 0);
        $postponedEventData = array_fill(0, 12, 0);

        // Fetch monthly data for each event status
        $sql = "SELECT MONTH(DateTime) AS Month, 
                    SUM(CASE WHEN Status = 'Completed' THEN 1 ELSE 0 END) AS TotalCompletedEvent,
                    SUM(CASE WHEN Status = 'Upcoming' THEN 1 ELSE 0 END) AS TotalUpcomingEvent,
                    SUM(CASE WHEN Status = 'Cancelled' THEN 1 ELSE 0 END) AS TotalCancelledEvent,
                    SUM(CASE WHEN Status = 'Postponed' THEN 1 ELSE 0 END) AS TotalPostponedEvent
                FROM event
                GROUP BY MONTH(DateTime)";

        $result = mysqli_query($con, $sql);

        // Populate the arrays with the fetched data
        while ($row = mysqli_fetch_assoc($result)) {
            $month = intval($row['Month']) - 1; // Adjust month to array index (0-based)
            $completedEventData[$month] = $row['TotalCompletedEvent'];
            $upcomingEventData[$month] = $row['TotalUpcomingEvent'];
            $cancelledEventData[$month] = $row['TotalCancelledEvent'];
            $postponedEventData[$month] = $row['TotalPostponedEvent'];
        }
        ?>

        var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

        // Use PHP arrays to populate the dataset arrays
        var dataset1 = <?php echo json_encode($completedEventData); ?>;
        var dataset2 = <?php echo json_encode($upcomingEventData); ?>;
        var dataset3 = <?php echo json_encode($cancelledEventData); ?>;
        var dataset4 = <?php echo json_encode($postponedEventData); ?>;

        var barColors = ["blue", "green", "yellow", "pink"];

        new Chart("barChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [
                {
                    label: "Completed Events",
                    backgroundColor: barColors[0],
                    data: dataset1
                },
                {
                    label: "Upcoming Events",
                    backgroundColor: barColors[1],
                    data: dataset2
                },
                {
                    label: "Cancelled Events",
                    backgroundColor: barColors[2],
                    data: dataset3
                },
                {
                    label: "Postponed Events",
                    backgroundColor: barColors[3],
                    data: dataset4
                }
            ]
        },
        options: {
            legend: { display: true },
            title: {
                display: true,
                text: "Monthly Events Overview"
            },
            scales: {
                xAxes: [{ stacked: true }],
                yAxes: [{ stacked: true }]
            }
        }
    });
    </script>
    <script>
        var xValues = ["Completed", "Upcoming", "Cancelled"];
        var yValues = [
            <?php echo $row["TotalCompletedEvent"] ?>,
            <?php echo $row["TotalUpcomingEvent"] ?>,
            <?php echo $row["TotalCancelledEvent"] ?>
        ];
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