<?php 
    session_start();

    $eventID = $_GET['event'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Event Details</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <!-- FONT AWESOME ICON -->
        <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>

        <!-- SWEET ALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">


        <style>
            a{
                color: #ffffff;
            }
            a:hover{
                color: #84beff;
            }

            .event-header{
                background: url("https://miro.medium.com/v2/resize:fit:7540/1*P7OE0mqUGAgo0-6RKMPbfg.jpeg");
                height: 65vh;
                overflow-y: auto;
                
            }

            .container {
                justify-content: center;
                background: #ffffff50; /* primary-500 */
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

            .joinButton button {
                font-family: 'Epilogue';
                width: 15vw; 
                height: 46px;  
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                opacity: 1; 
                gap: 3%;
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            .cancelButton button {
                font-family: 'Epilogue';
                width: 15vw; 
                height: 46px;  
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                opacity: 1; 
                gap: 3%;
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
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

            <div style = "overflow-y: auto">

                <div class = "event-header" style = "padding-top: 0.5%; padding-left: 2%; overflow-x: hidden;">
                    <div style = "display: flex; align-items: center; padding-bottom: 1%; gap: 1%">
                        <a href="User Event.php" class="back-link">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                        <p class="header-text" style = "font-weight: bold; color: white">Event Details</p>
                    </div>

                    <div class = "container" style="margin-left: 10%; margin-right: 10%; padding-bottom: 2%;">
                        <?php
                            
                            require("../../Database Layer/db_connection.php");
                            //validation 
                            $sqlCheck = "SELECT * FROM event WHERE EventId = $eventID";

                            $resultCheck = mysqli_query($con, $sqlCheck);

                            if(mysqli_num_rows($resultCheck) === 1){
                                $row = mysqli_fetch_assoc($resultCheck);
                            }
                        ?>
                        <h3 style=" font-family: 'Epilogue'; text-align: center; font-size: 14; line-height: 56px; font-weight: 500; color: #171A1FFF;"><?php echo $row["DateTime"] ?></h3>
                        <h1 style=" font-family: 'Epilogue'; text-align: center; font-size: 40px; line-height: 30px; font-weight: 800; color: #171A1FFF;"><?php echo $row["Name"] ?></h1>
                        
                        <div style = "display: flex; justify-content: center">
                            <button class="button-red" onclick="" >
                                <i class="fa-regular fa-heart"></i>
                                345
                            </button>
                            <div style = "width: 2%"></div>
                            <button class="button-blue" onclick="">
                                <i class="fa-solid fa-share-nodes"></i>
                                124
                            </button>
                        </div>

                    </div>
                </div>

                <div style="display: flex">
                    
                    <div class="group" style="top: 82%; left: 6.67%; padding: 2%">
                        <h3 style="padding-left: 2%; text-align: left; font-family: Epilogue; font-size: 25px; margin: 0;">Timing and Location</h3>
                        
                        <div style = "padding-left: 2%; padding-top: 1%; display: flex;">
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


                        <h3 style="padding-top: 5%; padding-left: 2%; text-align: left; font-family: Epilogue; font-size: 25px; margin: 0;">About Event</h3>
                        
                        <div style = "padding-left: 2%; padding-top: 1%; display: flex;">
                            <div style = "display: flex; gap: 2%;  width: 20vw">
                                <div style = "background-color: #9a9fe4; width: 5vw; height: 5vw; border-radius: 4px; display: flex; justify-content: center; align-items: center; padding: 3% ">
                                    <i class="fa-regular fa-clock" style = "font-size: 35px"></i>
                                </div>
                                <div>
                                    <p style = "padding-top: 1%; font-weight: bold">Duration</p>
                                    <p style = "padding-top: 1%;">5 hours</p>
                                </div>

                            </div>
                        </div>


                        <p style="padding-left: 2%; line-height: 1.5; text-align: justify;">
                            <?php echo $row["Description"] ?>
                        </p>

                    </div>

                    <div class="group" style="display: block; top: 82%; padding: 2%;">
                        <div class="group-small" style="background-color: #b8bef5; padding: 2%">

                            <!-- Display number of participants -->
                            <?php 
                                $sql = "SELECT COUNT(EventId) AS participationCount FROM participation WHERE EventId = $eventID AND ParticipationStatus = 'Joined'";
                                $result = mysqli_query($con, $sql);

                                if($result == true){
                                    $row = mysqli_fetch_assoc($result);
                                    $count = $row["participationCount"];
                                }
                            ?>
                            <center><p style = "padding-top: 1%; font-weight: bold"><?php echo $count == 0 ? "Nobody joined this event yet!" : "$count participants joined the event!"?>  </p></center>

                            <!-- Button if user has joined the event or not -->
                            
                            <?php 
                                $user = $_SESSION['user'];
                                $sql2 = "SELECT * FROM participation WHERE EventId = $eventID AND UserId = $user";
                                $status = '';
                                $result2 = mysqli_query($con, $sql2);

                                if(mysqli_num_rows($result2) === 1){
                                    $row2 = mysqli_fetch_assoc($result2);
                                    $status = $row2["ParticipationStatus"];
                                }
                            ?>
                            <div class="joinButton" onclick = "<?php echo $status == "Joined" ? null : 'toggleParticipation()' ?>">
                                <button type="button" 
                                style="color: #FFFFFFFF; background: <?php echo $status == "Joined" ? "#b0b0b0" : "#00BDD6FF"  ?>; width: 100%; cursor: <?php echo $status == "Joined" ? null :'pointer' ?>"
                                onmouseover="this.style.backgroundColor='<?php echo $status == 'Joined' ? '#b0b0b0' : '#0056b3';?>'" 
                                onmouseout="this.style.backgroundColor='<?php echo $status == 'Joined' ? '#b0b0b0' : '#00BDD6';?>'"

                                
                                >
                                    <b><?php echo $status == "Joined" ? "You have joined this event" : "Join Now!" ?></b>
                                </button>
                            </div>

                            <div class="cancelButton" style="display: <?php echo $status == "Joined" ? 'block' : 'none' ?>" onclick = "toggleCancel()">
                                <button type="button" style="color: #FFFFFFFF; background: #DE3B40FF; transition: #b00000 0.3s; width: 100%; cursor: pointer" onmouseover="this.style.backgroundColor='#b00000';" onmouseout="this.style.backgroundColor='#DE3B40FF';">
                                    <b>Cancel joining</b>
                                </button>
                            </div>

                           
                            
                        </div>
                        
                            
                    </div>

                </div>

                


            </div>



        </div>

    </body>
    <?php 
        // Check if the session variable 'login_status' indicates a successful login
        if(isset($_SESSION['Participation'])) {
            if($_SESSION['Participation'] == "Success"){
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                    iziToast.show({
                        title: 'Join Successful',
                        message: 'You have join the event successfully!',
                        position: 'bottomRight',
                        timeout: 3000,
                        backgroundColor: 'green',
                        titleColor: 'white',
                        messageColor: 'white',
                        class: 'custom-toast',
                        icon: 'fa-regular fa-circle-check',
                        iconColor: 'white',
                        onClose: function(instance, toast, closedBy) {
                            // Add custom CSS to align the close button to the right
                            toast.style.justifyContent = 'flex-end';
                        }
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['Participation']);
            }
            elseif($_SESSION['Participation'] == "Failure"){
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                            iziToast.show({
                                title: 'Fail to join',
                                message: 'Fail to join this event!',
                                position: 'bottomRight',
                                timeout: 3000,
                                backgroundColor: 'red',
                                titleColor: 'white',
                                messageColor: 'white',
                                class: 'custom-toast',
                                icon: 'fa-solid fa-circle-xmark',
                                iconColor: 'white',
                                onClose: function(instance, toast, closedBy) {
                                    // Add custom CSS to align the close button to the right
                                    toast.style.justifyContent = 'flex-end';
                                }
                            });
                        </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['Participation']);
            }

        }


        // Check if the session variable 'login_status' indicates a successful login
        if(isset($_SESSION["CancelJoin"])) {
            if($_SESSION["CancelJoin"] == 'Success'){
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                    iziToast.show({
                        title: 'Participation',
                        message: 'You have cancelled your participation on this event successfully!',
                        position: 'bottomRight',
                        timeout: 3000,
                        backgroundColor: 'green',
                        titleColor: 'white',
                        messageColor: 'white',
                        class: 'custom-toast',
                        icon: 'fa-regular fa-circle-check',
                        iconColor: 'white',
                        onClose: function(instance, toast, closedBy) {
                            // Add custom CSS to align the close button to the right
                            toast.style.justifyContent = 'flex-end';
                        }
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION["CancelJoin"]);
            }
            elseif($_SESSION["CancelJoin"] == 'Failure'){
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                            iziToast.show({
                                title: 'Fail to cancel',
                                message: 'Fail to cancel participation of this event!',
                                position: 'bottomRight',
                                timeout: 3000,
                                backgroundColor: 'red',
                                titleColor: 'white',
                                messageColor: 'white',
                                class: 'custom-toast',
                                icon: 'fa-solid fa-circle-xmark',
                                iconColor: 'white',
                                onClose: function(instance, toast, closedBy) {
                                    // Add custom CSS to align the close button to the right
                                    toast.style.justifyContent = 'flex-end';
                                }
                            });
                        </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION["CancelJoin"]);
            }

        }
    ?>
    <script>
        function toggleParticipation() {
            // Display confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to join now?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#000aaa',
                cancelButtonColor: '#ff0000',
                confirmButtonText: 'Yes, join now!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../../Controller Layer/User/User Event Process.php?participate=Join&event=<?php echo $eventID?>&user=<?php echo $_SESSION["user"]?>';
                }
            });
        }

        function toggleCancel() {
            // Display confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to cancel to join this event?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#000aaa',
                cancelButtonColor: '#ff0000',
                confirmButtonText: 'Yes, cancel now!',
                cancelButtonText: 'No, let me reconsider'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../../Controller Layer/User/User Event Process.php?participate=Cancel&event=<?php echo $eventID?>&user=<?php echo $_SESSION["user"]?>';
                }
            });
        }

        


    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>