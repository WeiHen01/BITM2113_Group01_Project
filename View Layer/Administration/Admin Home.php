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
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .overview-item {
            flex: 1;
            margin: 0 10px;
            text-align: center;
            padding: 20px;
            background: #F0F4F8;
            border-radius: 6px;
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f;
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
            <div style="padding: 2%">

                <div class="overview-container">
                    <div class="overview-item">
                        <p>Organization Registration</p>
                    </div>
                    <div class="overview-item">
                        <p>User Registration</p>
                    </div>
                    <div class="overview-item">
                        <p>User Complaint Issues</p>
                    </div>
                    <div class="overview-item">
                        <p>Organization Event Created</p>
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