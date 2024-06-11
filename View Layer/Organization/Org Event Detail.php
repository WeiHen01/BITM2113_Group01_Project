<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];
    $eventID = $_GET['event'];
?>

<!DOCTYPE html>

    <!-- Import CSS References Stylesheets using URL Link-->



    <!-- Embedded CSS style -->
    <style>

    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>Org | Event Detail</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Organization/Org Component Style.css">

        <style>
            
            #header{
                background: url("../../Assets/Image/event_details.jpg");
                background-size: cover; 
                width: 100%;
               padding-bottom: 5%;
            }
            .container {
                justify-content: center;
                background: #00BDD66B; /* primary-500 */
                border-radius: 30px; 
                border-width: 1px; 
                border-color: #FFFFFFFF; /* white */
                border-style: solid; 
            }
            .button-red {
                top: 79%; 
                left: 41%;
                width: 8%; 
                height: 45px; 
                padding: 0 12px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #DE3B40FF; /* danger-500 */
                opacity: 1; 
                border: none; 
                border-radius: 23px; 
                box-shadow: 0px 4px 9px #de3b40, 0px 0px 2px #de3b40; /* shadow-m */
                gap: 6px; 
            }
            .button-red .icon {
                width: 16px; 
                height: 16px; 
                fill: #FFFFFFFF; /* white */
            }
            .button-red:hover {
            color: #FFFFFFFF; /* white */
            background: #C12126FF; /* danger-600 */
            }
            .button-red:hover:active {
            color: #FFFFFFFF; /* white */
            background: #AA1D22FF; /* danger-650 */
            }
            .button-red:disabled {
            opacity: 0.4; 
            }
            .button-blue {
                top: 79%; 
                left: 52%; 
                width: 8%; 
                height: 45px; 
                padding: 0 12px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #00BDD6FF; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 23px; 
                box-shadow: 0px 4px 9px #00bdd6, 0px 0px 2px #00bdd6; /* shadow-m */
                gap: 6px; 
            }
            .button-blue .icon {
                width: 16px; 
                height: 16px; 
                fill: #FFFFFFFF; /* white */
            }
            .button-blue:hover {
                color: #FFFFFFFF; /* white */
                background: #00A9C0FF; /* primary-550 */
            }
            .button-blue:hover:active {
                color: #FFFFFFFF; /* white */
                background: #0095A9FF; /* primary-600 */
            }
            .button-blue:disabled {
                opacity: 0.4; 
            }
            .group {
                width: 50%; 
                height: 45%;
            }
            .container-1 {
                margin-top: 3%;
                width: 100%; 
                height: 85px; 
                background: #DEE1E6FF; /* neutral-300 */
                border-radius: 4px; /* border-m */
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }
            .body-content{
                background-image: url("../../Assets/Image/Org Event Background Image.jpg");
                background-size: cover;
                font-family: 'Epilogue'
            }
            .button {
                top: 1494px; 
                left: 395px; 
                width: 203px; 
                height: 36px; 
                padding: 0 12px; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-family: Inter; 
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #379AE6CC; /* info-500 */
                opacity: 1; 
                border: none; 
                border-radius: 4px; /* border-m */
            }
            .button:hover {
                color: #FFFFFFFF; /* white */
                background: #379AE6CC; /* info-500 */
            }
            .button:hover:active {
                color: #FFFFFFFF; /* white */
                background: #379AE6CC; /* info-500 */
            }
            .button:disabled {
            opacity: 0.4; 
            }
            .text {
                top: 9px; 
                left: 117px;  
                height: 28px; 
                font-family: Epilogue;
            }
            .popup-container {
                display: none; 
                position: fixed; 
                top: 50%; 
                left: 50%; 
                transform: translate(-50%, -50%);
                width: 55%; 
                height: 80%; 
                background: #FFFFFF; 
                border-radius: 15px;
                box-shadow: 0px 17px 35px rgba(23, 26, 31, 0.5), 0px 0px 2px rgba(23, 26, 31, 0.5);
                z-index: 1000;
                overflow-y: auto;
            }
            .overlay {
                display: none; 
                position: fixed; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                background: rgba(0, 0, 0, 0.5); 
                z-index: 999;
            }
            .popup-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem;
                background: #DEE1E6;
                border-bottom: 1px solid #CCC;
            }
            .popup-header h2 {
                margin: 0;
                font-family: 'Epilogue', sans-serif;
                font-size: 24px;
            }
            .close-button {
                background: none;
                border: none;
                font-size: 1.5rem;
                cursor: pointer;
            }
            .popup-content {
                padding: 1rem;
            }
            .participant {
                display: flex;
                align-items: center;
                padding: 0.5rem 0;
                border-bottom: 1px solid #CCC;
            }
            .participant img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                margin-right: 1rem;
            }
            .participant-info div {
                margin: 0.25rem 0;
            }

                        
        </style>
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

            <div class = "body-content">
                <?php    
                        require("../../Database Layer/db_connection.php");
                        //validation 
                        $sqlCheck = "SELECT * FROM event WHERE EventId = $eventID";

                        $resultCheck = mysqli_query($con, $sqlCheck);

                        if(mysqli_num_rows($resultCheck) === 1){
                            $row = mysqli_fetch_assoc($resultCheck);

                            $orgId = $row["OrgId"];

                        $_SESSION["Organization"] = $orgId;

                                
                    }
                ?>
                <div id = "header">
                    <h2 style="text-align: left; font-family: Epilogue; font-size: 50px;  padding: 2%; margin: 0;">About Event</h2>
                    <div class = "container" style="margin-left: 10%; margin-right: 10%; padding-bottom: 2%; padding-top: 2%">
                        <h1 style=" font-family: 'Epilogue'; text-align: center; font-size: 40px; line-height: 30px; font-weight: 800; color: #171A1FFF;"><?php echo $row["Name"] ?></h1>
                   </div>
                </div>



                <div style="display: flex">
                    <div class="group" style="top: 82%; left: 6.67%; padding: 2%">
                        <h3 style="text-align: left; font-family: Epilogue; font-size: 35px; margin: 0;">Description</h3>
                        <h3 style=" font-family: 'Epilogue'; text-align: justify; font-size: 25; line-height: 38px; font-weight: 300; color: #171A1FFF;"> 
                        <?php echo $row["Description"] ?>
                    </div>
                        <div style = "padding-left: 2%; padding-top: 1%; display: flex; margin-top: 3%">
                            <div style = "display: flex; gap: 2%;  width: 20vw">
                                <div style = "background-color: #9a9fe4; width: 5vw; height: 5vw; border-radius: 4px; display: flex; justify-content: center; align-items: center; padding: 3% ">
                                    <i class="fa-regular fa-calendar" style = "font-size: 35px"></i>
                                </div>
                                <div>
                                    <p style = "padding-top: 1%; font-weight: bold">Date and Time</p>
                                    <p style = "padding-top: 1%;"><?php echo $row["DateTime"] ?></p>
                                </div>

                            </div>

                            <div style = "display: flex; gap: 2%;  width: 20vw">
                                <div style = "background-color: #9a9fe4; width: 5vw; height: 5vw; border-radius: 4px; display: flex; justify-content: center; align-items: center; padding: 3% ">
                                    <i class="fa-solid fa-location-dot" style = "font-size: 35px"></i>
                                </div>
                                <div>
                                    <p style = "padding-top: 1%; font-weight: bold">Place</p>
                                    <p style = "padding-top: 1%;"><?php echo $row["Location"] ?></p>
                                </div>

                            </div>
                        </div>
                </div>

                <div class="group" style="padding: 2%;left: 6.67%;">
                    <h3 style="text-align: left; font-family: Epilogue; font-size: 35px; margin: 0;">Participation</h3>
                    <?php 
                        require("../../Database Layer/db_connection.php");

                        $sql = "SELECT * FROM participation WHERE EventId = $eventID ORDER BY UserId DESC LIMIT 5";

                        $result = $con->query($sql);

                        // Check if the query returned any results
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $userId = $row['UserId'];
                
                                // Query to get user data based on UserId
                                $userSql = "SELECT * FROM user WHERE UserId = $userId";
                                $userResult = $con->query($userSql);
                
                                if ($userResult && $userResult->num_rows > 0) {
                                    $userRow = $userResult->fetch_assoc();
                                    $userName = $userRow['Username']; 
                                    $userEmail = $userRow['Email'];
                                    $userProfile = $userRow['ProfileImage'];
                                    $userContact = $userRow['Contact'];
                                } else {
                                    echo "No events found.";
                                }
                    ?>
                    <div style="padding-bottom: 2%;">
                        <?php if (!empty($userRow['ProfileImage'])) : ?>
                            <!-- Convert BLOB data to base64 and embed it directly in the src attribute -->
                            <img src="data:image/<?php echo pathinfo($userRow['ProfileImage'], PATHINFO_EXTENSION); ?>;base64,<?php echo base64_encode($userRow['ProfileImage']); ?>" class="dpicn" alt="dp" style="height: 40px;width: 40px;border-radius: 50%;">
                            <?php else : ?>
                            <img src="../../Assets/Image/H20 Harmony Logo.png" class="dpicn" alt="dp" style="height: 50px;width: 50px;border-radius: 50%;">
                            <?php endif; ?>
                        <div class="container-1" style="padding-left: 10%;">
                            
                            <div style="display: flex" >
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; "><?php echo $userName; ?></div>
                                <div style="width: 55%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; ">joined 30 minutes ago..</div>
                            </div>
                            <div style="height: 30%"></div>
                            <div style="display: flex">
                                <i class="fa-solid fa-phone" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; "><?php echo $userContact; ?></div><div style="width: 20%"></div>
                                <i class="fa-regular fa-envelope" style="font-size:large"></i><div style="width: 2%"></div>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; "><?php echo $userEmail; ?></div>
                            </div>                           
                        </div>                       
                    </div>
                    <?php
                            }
                        } else {
                            echo "No events found.";
                        }
                        $con->close();
                    ?>
                    <div class="group-small" style="display: flex; justify-content: center">
                        <button class="button" onclick="showList()">View Participation List</button>
                        <div style="width: 3%;"></div>
                        <button class="button">Generate Report</button>
                    </div>

                </div>
                
                <div class="overlay" id="overlay" onclick="hidePopup()"></div>

                <div class="popup-container" id="popupContainer">
                    <div class="popup-header">
                        <h2>Participation List</h2>
                        <button class="close-button" onclick="hidePopup()">X</button>
                    </div>
                    <div class="popup-content">
                        <?php 
                            require("../../Database Layer/db_connection.php");

                            $sql = "SELECT * FROM participation WHERE EventId = $eventID ORDER BY UserId DESC LIMIT 5";

                            $result = $con->query($sql);

                            // Check if the query returned any results
                            if ($result && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $userId = $row['UserId'];
                    
                                    // Query to get user data based on UserId
                                    $userSql = "SELECT * FROM user WHERE UserId = $userId";
                                    $userResult = $con->query($userSql);
                    
                                    if ($userResult && $userResult->num_rows > 0) {
                                        $userRow = $userResult->fetch_assoc();
                                        $userName = $userRow['Username']; 
                                        $userEmail = $userRow['Email'];
                                        $userProfile = $userRow['ProfileImage'];
                                        $userContact = $userRow['Contact'];
                                    } else {
                                        echo "No events found.";
                                    }
                        ?>
                        <div class="participant">
                            <!-- fetch profile image -->
                            <?php if (!empty($userRow['ProfileImage'])) : ?>
                                <!-- Convert BLOB data to base64 and embed it directly in the src attribute -->
                                <img src="data:image/<?php echo pathinfo($userRow['ProfileImage'], PATHINFO_EXTENSION); ?>;base64,<?php echo base64_encode($userRow['ProfileImage']); ?>" class="dpicn" alt="dp" style="height: 40px;width: 40px;border-radius: 50%;">
                            <?php else : ?>
                                <img src="../../Assets/Image/H20 Harmony Logo.png" class="dpicn" alt="dp" style="height: 50px;width: 50px;border-radius: 50%;">
                            <?php endif; ?>


                            <div style="width: 2%;"></div>
                            <div style="display: flex">
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 700; color: #171A1FFF; "><?php echo $userName;?></div><div style="width: 4%;"></div>
                                <i class="fa-solid fa-phone" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #171A1FFF; padding-top: 5%; padding-left: 5%;"><?php echo $userContact;?></div>
                                <i class="fa-solid fa-envelope" style="font-size:large; padding-top: 5%; padding-left:8%"></i>
                                <div class="text" style="font-size: 18px; line-height: 28px; font-weight: 400; color: #379AE6FF; padding: 5%"><?php echo $userEmail;?></div>
                            </div> 
                        </div>
                        <?php
                            }
                        } else {
                            echo "No events found.";
                        }
                        $con->close();
                    ?>
                    </div>
                </div>
                
            </div>



            
        </div>
        

        

        
        

    </body>

    <script>
        function showList() {
            document.getElementById('popupContainer').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function hidePopup() {
            document.getElementById('popupContainer').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>

    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>


</html>