<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Complaint</title>

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
            /* Container 23 */
            .main-container {
                margin-left: 2%;
                width: calc(90%/3); 
                height: 62vh; 
                border-radius: 6px; /* border-l */
            }

            /* Container 23 */
            .container {
                height: 65vh; 
                background: #ffffff; /* white */
            }

            .complaint-button{
                padding: 0.5%;
                background-color: #5faddc;
                color: white;
                place-items: center;
                border-radius: 6px; /* border-l */
                border-color: #5faddc; /* neutral-300 */
                border-width: 1px; 
            }

            .complaint-button:hover{
                background-color: white;
                color: #5faddc;
                
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
                top: 10%;
                bottom: 10%; 
                left: 10%;
                right: 10%; 
                width: 80%; 
                height: 80%;
                background: #FFFFFFFF; /* white */
                border-radius: 8px; /* border-xl */
                box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
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

            #close-2 :hover{
                color: #000000;
                float: right;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
                padding: 1.5%;
            }

            /* Textbox style */
            .textbox {
                position: relative;
                margin-bottom: 10px; /* Adjust as needed */
            }

            .textbox input {
                font-family: 'Epilogue';
                width: 75vw; /* Fill the entire width of the parent container */
                height: 46px;
                font-size: 14px;
                line-height: 22px;
                font-weight: 400;
                background: #F3F4F6FF; /* neutral-200 */
                border-radius: 8px; /* border-xl */
                border-width: 0px;
                outline: none;
                padding-left: 1%; /* Adjust the padding to make space for the icon */
            }

            .textbox-sm {
                margin-bottom: 10px; /* Adjust as needed */
            }

            .textbox-sm input {
                font-family: 'Epilogue';
                width: calc(100vw/4); /* Fill the entire width of the parent container */
                height: 8vh;
                font-size: 14px;
                line-height: 22px;
                font-weight: 400;
                background: #F3F4F6FF; /* neutral-200 */
                border-radius: 8px; /* border-xl */
                border-width: 0px;
                outline: none;
                padding-left: 2%; /* Adjust the padding to make space for the icon */
            }

            .textbox textarea {
                font-family: 'Epilogue';
                width: 75vw; /* Fill the entire width of the parent container */
                height: 100px;
                font-size: 14px;
                line-height: 22px;
                font-weight: 400;
                background: #F3F4F6FF; /* neutral-200 */
                border-radius: 8px; /* border-xl */
                border-width: 0px;
                outline: none;
                padding-top: 1%;
                padding-left: 1%; /* Adjust the padding to make space for the icon */
            }

            select{
                border:none;
                font-family: 'Epilogue';
                width: calc(100vw/4); /* Fill the entire width of the parent container */
                height: 8vh;
                border-radius:5px;
                background: #F3F4F6FF; /* neutral-200 */
            }

            select:focus{
                outline:none;
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
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
            }

            .submitBtn button{
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

            .submitBtn button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
            }

            .cancelBtn button {
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


            
        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <!-- The Modal -->
        <div id="addComplaintModel" class="modal">
            
            <form action = "../../Controller Layer/User/User Complaint Process.php?action=Create" method="post">
                <!-- Modal content -->
                <div class="modal-content" >
                    <!--Close button -->
                    <div id="close-2" >
                        <i class="fa-solid fa-xmark" ></i>
                    </div>

                    <div style = "padding: 3%">
                        <form>
                            <strong style = "font-size: 25px">Submit a complaint</strong> 

                            <p>Complaint title</p>
                            <div class="textbox">
                                <input type="text" name="Title" id="title" placeholder="Enter title" />
                            </div>

                            <p>Description</p>
                            <div class="textbox">
                                <textarea name="Description" id="desc" placeholder="Enter description"> </textarea>
                            </div>

                            <div style = "display: flex; justify-content: space-evenly; gap: 10px">
                                <div class="textbox-sm">
                                    <input type="text" name="City" id="City" placeholder="City" />
                                </div>

                                <select name="State" id="state">
                                    <option value="none">State</option>
                                    <option value="Melaka"> Melaka</option>
                                    <option value="Pulau Pinang"> Pulau Pinang</option>
                                    <option value="Perlis"> Perlis</option>
                                    <option value="Negeri Sembilan"> Negeri Sembilan</option>
                                    <option value="Kelantan"> Kelantan</option>
                                    <option value="Kedah"> Kedah</option>
                                    <option value="Perak"> Perak</option>
                                    <option value="Terengganu"> Terengganu</option>
                                    <option value="Johor"> Johor</option>
                                    <option value="Pahang"> Pahang</option>
                                    <option value="Sabah"> Sabah</option>
                                    <option value="Sarawak"> Sarawak</option>
                                    <option value="Labuan"> Labuan</option>
                                </select>

                                <div class="textbox-sm">
                                    <input type="text" name="Country" id="country" placeholder="Country" />
                                </div>
                            </div>

                            <div style = "display: flex; justify-content: end; margin-top: 2%; align-items: center; gap: 10px;">
                                <div class="cancelBtn">
                                    <button type="cancel">Cancel</button>
                                </div>
                                <div class="submitBtn" id="signupButton" onclick="validateForm()">
                                    <button type="submit">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    



                    
                    
                </div>
            </form>
        
        </div>

        


        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>

            <div style = "display: flex; justify-content:space-between; border-color: #5faddc; /* neutral-300 */
                border-width: 1px;  padding-top: 0.5%; padding-bottom:1%">
                <p style="padding-left:2%; font-size: 20px"><b>Complaint</b></p>

                <div id="complainBtn" class ="complaint-button" style="margin-right: 2%; display: flex; gap: 5px">
                    <i class="fa-solid fa-plus"></i>
                    Add complaint
                </div>
            </div>

            <div style = "display: flex">
                
                <!-- Left -->
                <div class = "main-container">
                    <b>Recently added</b>
                    <div style="height: 2%"></div>
                    <div class = "container" style="overflow-y: auto">

                        <!-- Create container item for looping the result -->
                        <?php 
                            include ("../../Database Layer/db_connection.php");

                            $email = $_SESSION["LoggedUserEmail"];

                            $sqlView = "SELECT * FROM complain WHERE Status = 'Incomplete' 
                                        AND UserId IN (
                                            SELECT UserId FROM user where Email = '$email'
                                        )";

                            $result = mysqli_query($con, $sqlView);

                            if($result){
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)){
                                        // Extract date and time using substr
                                        $date = substr($row["DateTime"], 0, 10); // "2024-05-31"
                                        $time = substr($row["DateTime"], 11);    // "08:04:34"
                        
                        ?>
                        <div style = "background-color: #a2c8f2; margin-bottom: 10px; padding: 2%; border-radius: 2%; cursor:pointer" id = "recentContainer" onClick = "window.location.href='User Complaint Details.php?complaint=<?php echo $row['ComplainId']; ?>'">
                            
                            <b><?php echo $row["Title"] ?></b>
                            <p><?php echo $row["Description"] ?></p>
                            <p><b>Location:</b> <?php echo "{$row["City"]}, {$row["State"]}, {$row["Country"]}"?></p>

                            <p><b>Posted at:</b> <?php echo $row["DateTime"] ?></p>
                            
                        </div>
                        <?php 
                                    } 
                                }
                            }
                        ?>
                    

                    </div>
                    
                </div>

               
                 <!-- Center -->
                <div class = "main-container">
                    <b>In Progress</b>
                    <div style="height: 2%"></div>
                    <div class = "container" style="overflow-y: auto">
                        <!-- Create container item for looping the result -->
                        <?php 
                            include ("../../Database Layer/db_connection.php");

                            $user = $_SESSION['userID'];

                            $sqlView = "SELECT * FROM complain WHERE Status = 'Progressing' 
                                        AND UserId = '$user'";

                            $result = mysqli_query($con, $sqlView);

                            
                        ?>
                        <?php 
                            if($result){
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)){
                                        // Extract date and time using substr
                                        $date = substr($row["DateTime"], 0, 10); // "2024-05-31"
                                        $time = substr($row["DateTime"], 11);    // "08:04:34"

                        ?>
                        <div style = "background-color: #a2c8f2; margin-bottom: 10px; padding: 2%; border-radius: 2%; cursor:pointer" id = "progressContainer" onClick = "window.location.href='User Complaint Details.php?complaint=<?php echo $row['ComplainId']; ?>'">
                            
                            <b><?php echo $row["Title"] ?></b>
                            <p><?php echo $row["Description"] ?></p>
                            <p><b>Location:</b> <?php echo "{$row["City"]}, {$row["State"]}, {$row["Country"]}"?></p>

                            <p><b>Posted at:</b> <?php echo $row["DateTime"] ?></p>
                            
                        </div>
                        <?php 
                                    } 
                                }
                            }
                        ?>
                    </div>
                </div>

                 <!-- Right -->
                <div class = "main-container">
                    <b>Done</b>
                    <div style="height: 2%"></div>
                    <div class = "container" style="overflow-y: auto">
                         <!-- Create container item for looping the result -->
                         <?php 
                            include ("../../Database Layer/db_connection.php");

                            $user = $_SESSION['userID'];

                            $sqlView = "SELECT * FROM complain WHERE Status = 'Done' 
                                        AND UserId = '$user'";

                            $result = mysqli_query($con, $sqlView);

                            
                        ?>
                        <?php 
                            if($result){
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)){
                                        // Extract date and time using substr
                                        $date = substr($row["DateTime"], 0, 10); // "2024-05-31"
                                        $time = substr($row["DateTime"], 11);    // "08:04:34"

                        ?>
                        <div style = "background-color: #a2c8f2; margin-bottom: 10px; padding: 2%; border-radius: 2%; cursor:pointer" id = "doneContainer" onClick = "window.location.href='User Complaint Details.php?complaint=<?php echo $row['ComplainId']; ?>'">
                            
                            <b><?php echo $row["Title"] ?></b>
                            <p><?php echo $row["Description"] ?></p>
                            <p><b>Location:</b> <?php echo "{$row["City"]}, {$row["State"]}, {$row["Country"]}"?></p>

                            <p><b>Posted at:</b> <?php echo $row["DateTime"] ?></p>
                            
                        </div>
                        <?php 
                                    } 
                                }
                            }
                        ?>
                    </div>
                </div>

            </div>
        </div>


    </body>

     <!-- PHP code to check for successful login and trigger SweetAlert -->
     <?php 
        // Check if the session variable 'login_status' indicates a successful login
        if(isset($_SESSION['Submission']) && ($_SESSION['Submission'] == "Success")) {
            
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                        iziToast.show({
                            title: 'Hooray! New Complaint made!',
                            message: 'The complaint is submitted successfully!',
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
            unset($_SESSION['Submission']);
            
        }
        //login failed
        // Check if the session variable 'login_status' indicates a login failure
        elseif(isset($_SESSION['Submission']) && ($_SESSION['Submission'] == "Failure")) {
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                        iziToast.show({
                            title: 'Fail to submit',
                            message: 'Fail to submit new complaint!',
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
            unset($_SESSION['Submission']);
        }
        // Check if the session variable 'login_status' indicates a login failure
        elseif(isset($_SESSION['Submission']) && ($_SESSION['Submission'] == "Empty")) {
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                        iziToast.show({
                            title: 'Empty Input',
                            message: 'Please fill in all fields required',
                            position: 'bottomRight',
                            timeout: 3000,
                            backgroundColor: 'orange',
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
            unset($_SESSION['Submission']);
        }


        // Check if the session variable 'login_status' indicates a successful login
        if(isset($_SESSION['delStatus']) && ($_SESSION['delStatus'] == "Success")) {
            
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                    iziToast.show({
                        title: 'Hooray! Complaint is deleted!',
                        message: 'The complaint is deleted successfully!',
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
            unset($_SESSION['delStatus']);
            
        }
        //login failed
        // Check if the session variable 'login_status' indicates a login failure
        elseif(isset($_SESSION['delStatus']) && ($_SESSION['delStatus'] == "Failure")) {
            echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
            echo "<script>
                        iziToast.show({
                            title: 'Fail to delete',
                            message: 'Fail to delete the complaint!',
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
            unset($_SESSION['delStatus']);
        }
        
    ?>

    <script>
        var openCreate  = document.getElementById("addComplaintModel");
        var openUpdate  = document.getElementById("updateComplaintModel");
        var recent = document.getElementById("recentContainer");
        var progress = document.getElementById("progressContainer");
        var done = document.getElementById("doneContainer");

        // Get the button that opens the modal
        var btn = document.getElementById("complainBtn");
        var cancel = document.getElementById("cancelBtn");
        var i2 = document.getElementById("close-2");

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            openCreate.style.display = "block";
        }

        i2.onclick = function(){
            openCreate.style.display = "none";
        }


        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == openCreate){
                openCreate.style.display = "none";
            }

            if (event.target == openUpdate){
                openUpdate.style.display = "none";
            }
        }

        function redirectToDetails(complaintID) {
            window.location.href = "User%20Complaint%20Details.php?complaintID=" + complaintID;
        }

        
    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>