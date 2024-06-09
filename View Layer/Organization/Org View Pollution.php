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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- Embedded CSS style -->
    <style>
        .container-1 {
            top: 133px; 
            left: 53px; 
            width: 361px; 
            height: 162px; 
            background: #FFFFFFFF; /* white */
            background-image: url('../../Assets/Image/Org Pollution Area 1.png'); /* Background image */
            border-radius: 8px; /* border-xl */
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
        }
        .container-2 {
            top: 332px; 
            left: 50px; 
            width: 800px; 
            height: 350px; 
            background: #FFFFFFFF; /* white */
            border-radius: 6px; /* border-l */
            border-width: 1px; 
            border-color: #DEE1E6FF; /* neutral-300 */
            border-style: solid; 
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
        }
        .container-3 {
            top: 877px; 
            left: 50px; 
            width: 400px; 
            height: 300px; 
            background: #FFFFFFFF; /* white */
            border-radius: 4px; /* border-m */
            border-width: 7px; 
            border-color: #F3F4F6FF; /* neutral-200 */
            border-style: solid; 
        }
        .container-4 {
            padding: 10px;
            top: 895px; 
            left: 940px;  
            width: 90%;
            height: 575px; 
            background: #FFFFFFFF; /* white */
            border-radius: 6px; /* border-l */
            overflow-y: auto;
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
        }
        .text {
            left: 16px; 
            font-family: Epilogue; /* Heading */
            line-height: 84px; 
            color: #171A1FFF; /* neutral-900 */
        }
        .dropdown {
            top: 24px; 
            left: 698px; 
            opacity: 1; 
        }
        .dropdown input {
            width: 78px; 
            height: 36px; 
            padding-left: 12px; 
            padding-right: 34px; 
            font-family: Inter; 
            font-size: 14px; 
            line-height: 22px; 
            font-weight: 400; 
            color: #171A1FFF; /* neutral-900 */
            background: #F3F4F6FF; /* neutral-200 */
            border-radius: 6px; /* border-l */
            border-width: 0px; 
            outline: none; 
        }
        .dropdown svg {
            position: absolute; 
            top: 12px; 
            right: 12px; 
            width: 16px; 
            height: 16px; 
            fill: #171A1FFF; /* neutral-900 */
        }
        .dropdown input:hover {
            color: #171A1FFF; /* neutral-900 */
            background: #F3F4F6FF; /* neutral-200 */
        }
        .dropdown input:focused {
            color: #171A1FFF; /* neutral-900 */
            background: #FFFFFFFF; /* white */
        }
        .dropdown input:disabled {
            color: #171A1FFF; /* neutral-900 */
            background: #F3F4F6FF; /* neutral-200 */
        }
        .dropdown :disabled + .icon, .dropdown :disabled + .icon + .icon {
            fill: #171A1FFF; /* neutral-900 */
        }
        /* Container 146 */
        .container-5 {
            margin: 2%;
            left: 19px; 
            width: 96%; 
            height: 100px; 
            background: #F3F4F6FF; /* neutral-200 */
            border-radius: 4px; /* border-m */
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
        }
        .text-1 {
            top: 16px; 
            left: 18px; 
            width: 299px; 
            font-family: Epilogue; /* Heading */
            font-size: 20px; 
            line-height: 30px; 
            font-weight: 700; 
            color: #171A1FFF; /* neutral-900 */
        }
        .text-2 {
            top: 64px; 
            left: 20px; 
            width: 552px; 
            height: 88px; 
            font-family: Inter; /* Body */
            font-size: 14px; 
            line-height: 22px; 
            font-weight: 400; 
            color: #171A1FFF; /* neutral-900 */
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

            <!-- Content here -->
            <div style="display: flex; margin: 3%;">
                <div class="container-1" >
                    <div class="text" style="top: 63px; left: 16px; font-size: 22px; font-weight: 500; padding-left: 5%">Today Polluted Areas</div>
                    <div style="display: flex;">
                        <div style="font-size: 50px; font-weight: bold; padding-left: 5%">25</div>
                        <i class="fa-solid fa-map-location-dot" style="font-size: 50px; padding-left: 55%"></i>
                    </div>
                </div>
                <div style="width: 5%;"></div>
                <div class="container-1">
                    <div class="text" style="top: 63px; left: 16px; font-size: 22px; font-weight: 500; padding-left: 5%">Total Complaints in This week</div>
                        <div style="display: flex;">
                            <div style="font-size: 50px; font-weight: bold; padding-left: 5%">4</div>
                            <i class="fa-solid fa-bullhorn" style="font-size: 50px; padding-left: 55%"></i>
                        </div>
                </div>

            </div>
            <div style="display: flex;">
                <div class="container-2" style="margin: 3%;">
                    <iframe
                        id="wazeFrame"
                        allowfullscreen
                        style="border: none; width: 94vw; height: 60vh; ">
                    </iframe>
                </div>
                <canvas id="multipleChart" style="width:100%;max-width:600px; padding-top: 7%"></canvas>
            </div>
            
            <div class="container-4" style="margin: 2%;">
                <div class="text" style="padding-left: 3%; top: 63px; left: 16px; font-size: 25px; font-weight:600; ">Complaints</div>
                <div class="container-5">
                    <div class="text-1" style="padding-left: 3%; padding-top:2%">Complaint 1</div>
                    <div class="text-2" style="padding-left: 3%;">Description</div>
                </div>
                <div class="container-5">
                    <div class="text-1" style="padding-left: 3%; padding-top:2%">Complaint 2</div>
                    <div class="text-2" style="padding-left: 3%;">Description</div>
                </div>
                <div class="container-5">
                    <div class="text-1" style="padding-left: 3%; padding-top:2%">Complaint 3</div>
                    <div class="text-2" style="padding-left: 3%;">Description</div>
                </div>
                <div class="container-5">
                    <div class="text-1" style="padding-left: 3%; padding-top:2%">Complaint 4</div>
                    <div class="text-2" style="padding-left: 3%;">Description</div>
                </div>
                <div class="container-5">
                    <div class="text-1" style="padding-left: 3%; padding-top:2%">Complaint 5</div>
                    <div class="text-2" style="padding-left: 3%;">Description</div>
                </div>
            </div>
        </div>
    </body>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>
    <script>
        const xValues = [100,200,300,400,500,600,700,800,900,1000];

        new Chart("multipleChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{ 
            data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
            borderColor: "red",
            fill: false
            }, { 
            data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
            borderColor: "green",
            fill: false
            }, { 
            data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
            borderColor: "blue",
            fill: false
            }]
        },
        options: {
            legend: {display: false},
             title: {
                display: true,
                text: "June 2024"
            }
        }
        });

        function showCurrentPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            // Construct the URL with the latitude and longitude
            var url = "https://embed.waze.com/iframe?zoom=14&lat=" + latitude + "&lon=" + longitude;

            // Update the src attribute of the iframe
            document.getElementById("wazeFrame").src = url;
        }

    </script>

</html>