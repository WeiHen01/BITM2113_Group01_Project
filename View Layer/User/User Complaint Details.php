<?php 
    session_start();

   

    $complaintID = $_GET['complaint'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Complaint Details</title>

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
            .editBtn button{
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

            .editBtn button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
            }

            .deleteBtn button{
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
                color: #E05858FF; /* tertiary3-500 */
                background-color: #ffffffff; /* transparent */
                opacity: 1; 
                border-color: #E05858FF; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            .deleteBtn button:hover {
                background: #DB3D3DFF; /* tertiary3-550 */
                color: #ffffffff; /* transparent */
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
            .editBtn button{
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

            .editBtn button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
            }

            /* Button 26 */
            .cancelBtn button {
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
                color: #808080; /* white */
                background: #ffffffff; /* primary-500 */
                opacity: 1; 
                border: none; 
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            .cancelBtn button:hover {
                background-color: #808080; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
            }

            /* Button 26 */
            .submitBtn button {
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

            .submitBtn button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
            }

            a{
                color: #4069E552;
            }
            a:hover{
                color: #0056b3;
            }


        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <!-- Update Modal -->
        <div id="updateComplaintModel" class="modal">
            
            <form action = "../../Controller Layer/User/User Complaint Process.php" method="post">
                <!-- Modal content -->
                <div class="modal-content" >
                    <!--Close button -->
                    <div id="close-2" >
                        <i class="fa-solid fa-xmark"></i>
                    </div>

                    <div style = "padding: 3%">
                        <form>
                            <strong style = "font-size: 25px">Update a complaint</strong> 

                            <p>Complaint title</p>
                            <div class="textbox">
                                <input type="text" name="Title" id="title" placeholder="Enter title" 
                                    
                                />
                            </div>

                            <p>Description</p>
                            <div class="textbox">
                                <textarea name="Description" id="desc" placeholder="Enter description"> </textarea>
                            </div>

                            <div style = "display: flex; justify-content: space-evenly; align-items: center; gap: 2%">
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

                            <div style = "display: flex; justify-content: end; margin-top: 2%; gap: 10px;">
                                <div class="cancelBtn" id="cancelBtn" >
                                    <button type="button">Cancel</button>
                                </div>
                                <div class="submitBtn" onclick="validateForm()">
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

            <div style = "padding-top: 0.5%;">
                <a href="User Complaint.php" style="padding-left:2%; padding-top: 1%; text-decoration: none">
                    <i class="fa-solid fa-chevron-left"></i>
                    Back
                </a>
                <p style="padding-left:2%"><b>Complaint Details</b></p>

                <?php 
                    require("../../Database Layer/db_connection.php");
                   
                    $sqlShow = "SELECT * FROM complain WHERE ComplainId = '$complaintID'";

                    $result = mysqli_query($con, $sqlShow);
                
                    if(mysqli_num_rows($result) === 1){
                        $row = mysqli_fetch_assoc($result);
                    }
                ?>

                <div style = "background-color: #F3F4F6FF; margin-left: 2%; margin-right: 2%; padding: 1%">
                    <p><strong><?php echo $row["Title"] ?></strong></p>
                </div>
                
                <div style = "background-color: #DEE1E6FF; margin-left: 2%; margin-right: 2%; padding: 1%;  box-shadow: 8px 8px 15px 0px #535353;">
                    <p><?php echo $row["Description"] ?></p>
                </div>

                <div style = "display: flex; padding-left:2%; padding-top: 2%; gap: 5%">
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-regular fa-calendar-days" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["DateTime"]) ?></b>
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-regular fa-clock" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["DateTime"]) ?></b>
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-regular fa-building" style = "font-size: 5vh"></i>
                        </div>
                        
                        <b><?php echo strtoupper($row["City"]) ?></b>
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-solid fa-location-dot" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["State"]) ?></b>
                        
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-solid fa-map-location-dot" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["Country"]) ?></b>
                    </div>
                </div>


                <div style = "margin-top: 10vh; display: flex; justify-content: center; gap: 5%">
                    <div class="deleteBtn" id="deleteButton">
                        <button type="button">Delete this complaint</button>
                    </div>
                    <div class="editBtn" id="editButton">
                        <button type="button">Edit this complaint</button>
                    </div>

                </div>

            
            
            
            
            </div>

            


        </div>
    </body>
    <script>
        var openUpdate = document.getElementById("updateComplaintModel");
        // Get the button that opens the modal
        var btn = document.getElementById("editButton");

        var i2 = document.getElementById("close-2");

        var cancel = document.getElementById("cancelBtn");

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            openUpdate.style.display = "block";
        }

        i2.onclick = function(){
            openUpdate.style.display = "none";
        }

        cancel.onclick = function(){
            openUpdate.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == openUpdate){
                openUpdate.style.display = "none";
            }
        }
    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>