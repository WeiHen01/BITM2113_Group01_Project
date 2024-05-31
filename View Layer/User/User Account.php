<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    session_start();

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];
?>

<!--=========================================================================
   User Account.php: User account that contains all personal information
==========================================================================-->
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
        <title>User | Account</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <!-- FONT AWESOME ICON -->
        <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>

        <!-- SWEET ALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">


        <style>
            /* Container 45 */
            .container {
                width: 100%;
                height: 50vh; 
                background: #00BDD6FF; /* primary-500 */
            }

            .left-container{
                width: 25vw;
                height: 70vh;
                padding-left: 1%;
                padding-right: 1%;
                background: #959f9c; /* primary-500 */
                
            }

            .user-details{
                background: #d9dee1; /* primary-500 */
                height: 45%;
                padding: 2%;
            }

            .right-container{
                width: 75vw;
                height: 70vh;
                padding-left: 1%;
                padding-right: 1%;
                background: #ffffff; /* primary-500 */
                /* overflow-y: auto; /* Enable vertical scrolling */
            }

            .event{
                background: #9cbfe7;
                padding: 1%;
                margin-bottom: 1%;
                border-radius: 1%;
            }


             /* Button 26 */

            

            button {
                font-family: 'Epilogue';
                width: 15vw; 
                height: 46px;  
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #00BDD6FF; /* primary-500 */
                opacity: 1; 
                gap: 3%;
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
            }

            #updateAccButton button{
                font-family: 'Epilogue';
                width: 10vw; 
                height: 46px;  
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                color: #FFFFFFFF; /* white */
                background: #00BDD6FF; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            #updateAccButton button:hover{
                font-family: 'Epilogue';
                width: 10vw; 
                height: 46px;  
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
                opacity: 1; 
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            

            .cancelBtn button {
                font-family: 'Epilogue';
                width: 8vw; 
                height: 46px;  
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                color: #000000; /* white */
                background: #FFFFFFFF; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            .cancelBtn button:hover {
                color: #000000; /* white */
                background: #949494; /* primary-500 */
            }

            .cancelBtn02 button {
                font-family: 'Epilogue';
                width: 8vw; 
                height: 46px;  
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-size: 16px; 
                margin-top: 2%;
                line-height: 26px; 
                font-weight: 400; 
                color: #000000; /* white */
                background: #FFFFFFFF; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            .cancelBtn02 button:hover {
                color: #000000; /* white */
                background: #949494; /* primary-500 */
            }


            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
            }

            /* Modal Content/Box */
            .modal-content {
                position: absolute; 
                top: 15%;
                bottom: 10%; 
                left: 30%;
                right: 30%; 
                width: 40%; 
                height: 70%;
                background: #FFFFFFFF; /* white */
                border-radius: 8px; /* border-xl */
                box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
            }

            /* The Close Button */
            #close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
                padding: 1.5%;
            }

            #close:hover{
                color: black;
            }

            /* The Close Button */
            #close-2 {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
                padding: 1.5%;
            }

            #close-2:hover{
                color: black;
            }

            .textbox {
                position: relative;
                margin-left: 3%;
                margin-bottom: 10px; /* Adjust as needed */
            }

        
            .textbox input {
                font-family: 'Epilogue';
                width: 35vw; 
                height: 46px;
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                background: #F3F4F6FF; /* neutral-200 */
                border-radius: 8px; /* border-xl */
                border-width: 0px; 
                outline: none; 
                padding-left: 15px; /* Adjust the padding to make space for the icon */
            }

            /* hover */
            .textbox input:hover {
                font-family: 'Epilogue';
                color: #000000; /* neutral-400 */
                background: #F3F4F6FF; /* neutral-200 */
            }


            .profile-container {
                width: 8vw; /* Set the width of the container */
                height: 8vw; /* Set the height of the container */
                border-radius: 50%; /* Make it a circle */
                overflow: hidden; /* Hide overflow to keep the circular shape */
                display: flex; /* Center the image if it's smaller */
                align-items: center; /* Center the image vertically */
                justify-content: center; /* Center the image horizontally */
                border: 2px solid #000000; /* Optional: add a border for better visibility */
                background-color: #f0f0f0; /* Optional: add a background color */
                margin-left: 7.5vw;
                padding: 0.5%;
            }

            .profile-picture {
                width: 120%; /* Ensure the image fills the container */
                height: 120%; /* Maintain the aspect ratio */
                object-fit: cover; /* Cover the container without distorting the image */
            }

        </style>

    </head>


    <!-- Body of the webpage -->
    <body style="overflow-y: hidden">

        <!-- The Modal -->
        <div id="updateModel" class="modal">

        <?php 
                require("../../Database Layer/db_connection.php");
                
                $sqlShow = "SELECT * FROM user WHERE Email = '$loggedUserEmail'";

                $result = mysqli_query($con, $sqlShow);
            
                if(mysqli_num_rows($result) === 1){
                    $row = mysqli_fetch_assoc($result);
                }
            ?>
            
            <form id="updateProfileForm" action = "../../Controller Layer/User/User Profile Process.php?user=<?php echo $row['UserId']?>" method="post">
                <!-- Modal content -->
                <div class="modal-content">
                    <!--Close button -->
                    <div id="close" style = "padding: 4%">
                        <i class="fa-solid fa-xmark" ></i>
                    </div>

                    <div style = "font-size: 25px; padding: 4%">
                        <b>Update profile</b>
                    </div>

                    <label style = "margin-left: 3%">Username</label>
                    <div class="textbox">
                        <input type="text" name="Username" id="usernameInput" placeholder="Enter Your Username" value = <?php echo htmlspecialchars(isset($row["Username"]) && $row["Username"] !== null ? $row["Username"] : "New User"); ?> >
                    </div>

                    <label style = "margin-left: 3%">Email</label>
                    <div class="textbox">
                        <input type="text" name="Email" id="emailInput" placeholder="Enter Your Email" value = <?php echo htmlspecialchars($row["Email"]) ?> >
                    </div>

                    <label style = "margin-left: 3%">Contact</label>
                    <div class="textbox" style = "margin-bottom: 10%">
                        <input type="text" name="Contact" id="contactInput" placeholder="Enter Your Contact" value = <?php echo $row["Contact"] === null ? "No phone" : htmlspecialchars($row["Contact"]) ?> >
                    </div>

                    <div style = "display: flex; justify-content: end; margin-top: 2%; margin-right: 5%; gap: 10px;">
                        <div class="cancelBtn" id="cancelBtn">
                            <button type="button">Cancel</button>
                        </div>
                        <div class="updateProfile-btn" id="updateAccButton" onclick="validateForm()">
                            <button type="submit" name = "update-profile">Update Profile</button>
                        </div>
                    </div>

                    
                    
                </div>
            </form>
        
        </div>

        <!-- The Modal -->
        <div id="updatePasswordModel" class="modal">
            
            <form id="updatePasswordForm" action = "../../Controller Layer/User/User Profile Process.php?user=<?php echo $row['UserId']?>" method="post">
                <!-- Modal content -->
                <div class="modal-content">
                    <!--Close button -->
                    <div id="close-2" style = "padding: 4%">
                        <i class="fa-solid fa-xmark" ></i>
                    </div>

                    <div style = "font-size: 25px; padding: 4%">
                        <b>Update password</b>
                    </div>

                    <label style = "margin-left: 3%">Old Password</label>
                    <div class="textbox">
                        <input type="text" name="oldPass" id="passwordOld" placeholder="Enter Your Current Password" />
                    </div>

                    <label style = "margin-left: 3%">New Password</label>
                    <div class="textbox">
                        <input type="text" name="newPass" id="passwordNew" placeholder="Enter Your New Password" />
                    </div>

                    <label style = "margin-left: 3%">Confirm Password</label>
                    <div class="textbox" style = "margin-bottom: 10%">
                        <input type="text" name="conPass" id="passwordConfirm" placeholder="Confirm New Password" />
                    </div>

                    <div style = "display: flex; justify-content: end; margin-top: 2%; margin-right: 5%; gap: 10px;">
                        <div class="cancelBtn02" id="cancelBtn02">
                            <button type="button">Cancel</button>
                        </div>
                        <div class="updateProfile-btn" id="updateAccButton" onclick="validateForm()">
                            <button type="submit" name = "update-password">Update Password</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        
        </div>

        <!-- Horizontal Navigation bar -->
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>

            <div>

            <div class="container" style = "margin: 0;">
                
            <div class="profile-container">
                <img src="https://www.niehs.nih.gov/sites/default/files/health/assets/images/safewater_og.jpg" alt="Profile Picture" class="profile-picture">
            </div>

    
                <div style = "display: flex;">
                    
                    <div class="left-container">
    
                        <div style="height: 5%"></div>
    
                        <div class = "user-details">
    
                            <strong><p style = "font-size: 25px"><b><?php echo $row["Username"] ?></b></p></strong>
    
                            <div style="display: flex; align-items: center; padding-left: 1%">
                                <i class="fa-regular fa-envelope"></i>
    
                                <div style="width: 3%"></div>
    
                                <p><?php echo $row["Email"] ?></p>
                            </div>
    
                            <div style="display: flex; align-items: center; padding-left: 1%">
                                <i class="fa-solid fa-phone"></i>
    
                                <div style="width: 3%"></div>
    
                                <p><?php echo $row["Contact"] == null ? "-": $row["Contact"] ?></p>
                            </div>
                            
                        </div>
    
                        <div style="height: 5%"></div>
    
                        <div class="button" id="openEditProfile">
                            <button type="button" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s; width: 100%;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">
                                <i class="fa-regular fa-pen-to-square"></i>
                                Edit this profile
                            </button>
                        </div>
    
                        <div class="button" id="openEditPassword">
                            <button type="button" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s; width: 100%;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">
                                <i class="fa-solid fa-lock"></i>
                                Edit password
                            </button>
                        </div>
    
                        
    
                    </div>
    
                    <div class="right-container"  style = "overflow-y: auto">
                        
                        <div>
                            <p><strong>Event Participated</strong></p>
                        </div>

                        <?php 
                            require("../../Database Layer/db_connection.php");

                            $sql = "SELECT * FROM participation WHERE UserId IN(
                                SELECT UserId FROM user WHERE Email = '$loggedUserEmail'
                            ) AND ParticipationStatus = 'Completed'";

                            $result = mysqli_query($con, $sql);

                            function formatDate($inputTimestamp) {
                                // Get current date
                                $currentDate = date('Y-m-d');
                                $inputDate = date('Y-m-d', strtotime($inputTimestamp));
                                
                                // Calculate date difference in days
                                $dateDifference = (strtotime($currentDate) - strtotime($inputDate)) / (60 * 60 * 24);
                            
                                // Logic for date comparison
                                if ($inputDate == $currentDate) {
                                    return "Today";
                                } elseif ($dateDifference == 1) {
                                    return "1 day ago";
                                } elseif ($dateDifference == 2) {
                                    return "2 days ago";
                                } else {
                                    return date('Y-m-d', strtotime($inputTimestamp));
                                }
                            }
                            
                            function formatTime($inputTimestamp) {
                                // Get current time
                                $currentTimestamp = time();
                                $inputTimestamp = strtotime($inputTimestamp);
                            
                                // Calculate time difference in seconds
                                $timeDifference = $currentTimestamp - $inputTimestamp;
                            
                                // Logic for time comparison
                                if ($timeDifference < 60) {
                                    return $timeDifference . " seconds ago";
                                } elseif ($timeDifference < 3600) {
                                    $minutesAgo = floor($timeDifference / 60);
                                    return $minutesAgo . " minutes ago";
                                } else {
                                    return date('g:i:s a', $inputTimestamp);
                                }
                            }

                            // Check if the query returned any results
                            if ($result && mysqli_num_rows($result) > 0) {
                                
                                $row = mysqli_fetch_assoc($result);

                                $event = $row['EventId'];

                                $sql_2 = "SELECT * FROM event WHERE EventId = $event";

                                $result_2 = mysqli_query($con, $sql_2);

                                if ($result_2 && mysqli_num_rows($result_2) > 0) {
                                    while ($row_2 = mysqli_fetch_assoc($result_2)) {

                        ?>
    
                        <div class = "event-details">
    
                            <div class ="event">
                                
                                <strong style ="font-size: 25px"><?php echo $row_2["Name"] ?></strong>
                                <p><?php echo $row_2["Description"] ?></p>
                                <p><b>Participated By:</b> <?php echo formatDate($row_2['DateTime']).' '.formatTime($row_2['DateTime']) ?></p>
                                
                                <?php 
                                            }
                                        }
                                    }
                                ?>
                            </div>
    
                        
                        </div>
    
                    </div>
                


                </div>
            </div>

            
            

            
        </div>

        <!-- Left Vertical Sidebar / Drawer -->
        


        
        
    </body>

    <?php 
        if(isset($_SESSION['Update_Profile']) && $_SESSION['Update_Profile'] == 'Success') {
            // Trigger iziToast notification for successful login
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                    iziToast.show({
                        title: 'Successfully update profile',
                        message: 'You have updated your profile!',
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
            
            // Unset the session variable after displaying the iziToast notification
            unset($_SESSION['Update_Profile']);
        }
        elseif(isset($_SESSION['Update_Profile']) && $_SESSION['Update_Profile'] == 'Failure') {
            // Trigger iziToast notification for successful login
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                    iziToast.show({
                        title: 'Fail to update',
                        message: 'Fail to update profile!',
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
            
            // Unset the session variable after displaying the iziToast notification
            unset($_SESSION['Update_Profile']);
        }
        else {

        }
        

        // Update password response

        if(isset($_SESSION['Update_Password']) && $_SESSION['Update_Password'] == 'Success') {
            // Trigger iziToast notification for successful login
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                    iziToast.show({
                        title: 'Successfully update password',
                        message: 'You have updated your password!',
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
            
            // Unset the session variable after displaying the iziToast notification
            unset($_SESSION['Update_Password']);
        }
        elseif(isset($_SESSION['Update_Password']) && $_SESSION['Update_Password'] == 'Failure') {
            // Trigger iziToast notification for successful login
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                    iziToast.show({
                        title: 'Fail to update',
                        message: 'Fail to update password!',
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
            
            // Unset the session variable after displaying the iziToast notification
            unset($_SESSION['Update_Password']);
        }
        else {

        }
        


    ?>


    <!-- Javascript implementation -->
    <script>
        // Get the modal
        var modal = document.getElementById("updateModel");

        var modal2 = document.getElementById("updatePasswordModel");

        // Get the button that opens the modal
        var btn = document.getElementById("openEditProfile");

        var btn2 = document.getElementById("openEditPassword");

        var cancel = document.getElementById("cancelBtn");
        var cancel02 = document.getElementById("cancelBtn02");

        var profile = document.getElementById("profile-container");

        // Get the <span> element that closes the modal
        var i = document.getElementById("close");

        var i2 = document.getElementById("close-2");

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        btn2.onclick = function(){
            modal2.style.display = "block";
        }

        cancel.onclick = function(){
            modal.style.display = "none";
        }

        cancel02.onclick = function(){
            modal2.style.display = "none";
        }

        // When the user clicks on <span> (x), close the modal
        i.onclick = function() {
            modal.style.display = "none";
        }

        i2.onclick = function(){
            modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }

            if (event.target == modal2){
                modal2.style.display = "none";
            }
        }

        


    </script>

    <!-- Must add this for enabling sidebar to be opened -->
    <script src="../General Components & Widget/User/User Component Script.js"></script>


</html>