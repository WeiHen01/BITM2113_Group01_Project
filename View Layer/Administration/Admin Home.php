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
        body {
            font-family: 'Epilogue', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        #contentArea {
            flex: 1;
            background: #E5E4E2;
        }

        .container {
            padding: 1%;
            background: #FFFFFF;
            border-radius: 6px;
            border: 1px solid #DEE1E6;
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f;
            margin-bottom: 20px;
        }

        .overview-container {
            padding: 1%;
            display: flex;
            background: #FFFFFF;
            justify-content: space-between;
            border-radius: 0.5em;
        }

        .overview-item {
            flex: 1;
            margin: 0 10px;
            text-align: center;
            padding: 5.0px;
            background: #F1F4FDFF; /* tertiary1-100 */
            border-radius: 4px; /* border-m */
            border-width: 1px; 
            border-color: #C5D1F7FF; /* tertiary1-200 */
            border-style: solid; 
        }

        .main-content {
            display: flex;
            justify-content: space-between;
        }

        .main-content > div {
            flex: 1;
            margin: 0 10px;
        }

        .chart-container {
            height: 300px;
        }

        .pie-chart-container {
            height: 300px;
        }

        .section-title {
            margin-top: 2%;
            margin-left: 10px;
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>

    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>Admin | Home</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Administration/Admin_Component Style.css">
    </head>


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

            <!-- Overview Section -->
            <p style="padding-left: 2%"><b>Home</b></p>
            <div style="padding-left: 2%">
        
                <div class="overview-container">
                    <div class="overview-item">
                    <i class="fa-solid fa-building" style="color: white"></i>
                    <i class="fa-solid fa-circle" style="margin-top: 2%; color: blue; font-size: 32px;"></i> 
                    <p style="color:blue; font-size:24px;"><b>17</b></p>
                    <p><b>Organization Registration</b></p>
                    </div>
                    <div class="overview-item">
                        <p style="color:blue; font-size:24px;"><b>20</b></p>
                        <p><b>User Registration</b></p>
                    </div>
                    <div class="overview-item">
                        <p style="color:blue; font-size:24px;"><b>23</b></p>
                        <p><b>User Complaint Issues</b></p>
                    </div>
                    <div class="overview-item">
                        <p style="color:blue; font-size:24px;"><b>07</b></p>
                        <p><b>Organization Event Created</b></p>
                    </div>
                </div>

                <!-- Report by this month Section -->
                <div class="section-title">Report by this month</div>
                    <div class="main-content">
                        <div class="container">
                            <p><b>Resolved and Unresolved Water Pollution Complaint</b></p>
                            <div class="chart-container">
                                <!-- Insert your chart here -->
                            </div>
                        </div>
                        <div class="container">
                            <p><b>Active Events</b></p>
                            <div class="pie-chart-container">
                                <!-- Insert your pie chart here -->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        
        </div>
    </body>


    <script src="../General Components & Widget/Administration/Admin_Component Script.js"></script>


</html>