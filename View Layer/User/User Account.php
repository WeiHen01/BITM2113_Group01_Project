<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    session_start();

    

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

        <style>
            /* Container 45 */
            .container {
                width: 100%; 
                height: 25vh; 
                background: #00BDD6FF; /* primary-500 */
            }

            .left-container{
                width: 25vw;
                height: 75vh;
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
                height: 75vh;
                padding-left: 1%;
                padding-right: 1%;
                background: #ffffff; /* primary-500 */
                /* overflow-y: auto; /* Enable vertical scrolling */
            }

            .event{
                background: #a2a2a2;
                padding: 1%;
                margin-bottom: 1%;
                border-radius: 1%;
            }


             /* Button 26 */
            button {
                font-family: 'Epilogue';
                height: 46px;
                align-items: center;
                justify-content: center;
                font-size: 16px;
                margin-top: 2%;
                line-height: 26px;
                font-weight: 400;
                opacity: 1;
                border: none;
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
            }

            button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
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
                left: 30%;
                right: 30%; 
                width: 40%; 
                height: 80%;
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

            .textbox {
                position: relative;
                margin-left: 1%;
                margin-bottom: 10px; /* Adjust as needed */
            }

        
            .textbox input {
                font-family: 'Epilogue';
                width: 41vw; 
                height: 46px;
                font-size: 14px; 
                line-height: 22px; 
                font-weight: 400; 
                background: #F3F4F6FF; /* neutral-200 */
                border-radius: 8px; /* border-xl */
                border-width: 0px; 
                outline: none; 
                padding-left: 25px; /* Adjust the padding to make space for the icon */
            }

            /* hover */
            .textbox input:hover {
                font-family: 'Epilogue';
                color: #000000; /* neutral-400 */
                background: #F3F4F6FF; /* neutral-200 */
            }

            

            
            

            
            
        </style>

    </head>


    <!-- Body of the webpage -->
    <body style="overflow-y: hidden">

        <!-- The Modal -->
        <div id="updateModel" class="modal">
            
            <form id="updateProfileForm" method="post">
                <!-- Modal content -->
                <div class="modal-content">
                    <!--Close button -->
                    <div id="close" style = "padding: 4%">
                        <i class="fa-solid fa-xmark" ></i>
                    </div>

                    <div style = "font-size: 25px; padding: 4%">
                        <b>Update profile</b>
                    </div>

                    <div style = "padding: 4%">
                        <input type = "text" name = "Username" id="usernameInput" placeholder = "Enter Your Username" />
                    </div>

                    <div style = "padding: 4%">
                        <input type = "text" name = "Email" id="emailInput" placeholder = "Enter Your Email" />
                    </div>

                    <div style = "padding: 4%">
                        <input type = "text" name = "Contact" id="contactInput" placeholder = "Enter Your Contact" />
                    </div>

                    <div class="button" style = "justify-content: flex-end;">
                        <button type="button" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s; width: 40%;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">
                            Update 
                        </button>
                    </div>

                    
                    
                </div>
            </form>
        
        </div>

        <!-- The Modal -->
        <div id="updatePasswordModel" class="modal">
            
            <form id="updatePasswordForm" method="post">
                <!-- Modal content -->
                <div class="modal-content">
                    <!--Close button -->
                    <div id="close" >
                        <i class="fa-solid fa-xmark" ></i>
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

            <div class="container"></div>

            <div class="avatar-profile"></div>

            <div style = "display: flex;">
                
                <div class="left-container">

                    <div style="height: 10%"></div>

                    <div class = "user-details">

                        <strong><p style = "font-size: 25px">Username</p></strong>

                        <div style="display: flex; align-items: center; padding-left: 1%">
                            <i class="fa-regular fa-envelope"></i>

                            <div style="width: 3%"></div>

                            <p>Hello</p>
                        </div>

                        <div style="display: flex; align-items: center; padding-left: 1%">
                            <i class="fa-solid fa-phone"></i>

                            <div style="width: 3%"></div>

                            <p>Hello</p>
                        </div>
                        
                    </div>

                    <div class="button" id="openEditProfile">
                        <button type="button" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s; width: 100%;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit this profile
                        </button>
                    </div>

                    <div class="button">
                        <button type="button" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s; width: 100%;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">
                            <i class="fa-solid fa-lock"></i>
                            Edit password
                        </button>
                    </div>

                    

                </div>

                <div class="right-container" style = "overflow-y: auto">
                    
                    <p style = "font-size: 25px"><strong>Event Participated</strong></p>

                    <div class = "event-details" >

                        <div class ="event">
                            <strong><p>Event 1</p></strong>
                        </div>

                        <div class ="event">
                            <strong><p>Event 1</p></strong>
                        </div>

                        <div class ="event">
                            <strong><p>Event 1</p></strong>
                        </div>

                        <div class ="event">
                            <strong><p>Event 1</p></strong>
                        </div>

                        <div class ="event">
                            <strong><p>Event 1</p></strong>
                        </div>

                        <div class ="event">
                            <strong><p>Event 1</p></strong>
                        </div>

                        
                    
                    </div>

                </div>
            
            </div>

            
            

            
        </div>

        <!-- Left Vertical Sidebar / Drawer -->
        


        
        
    </body>


    <!-- Javascript implementation -->
    <script>
        // Get the modal
        var modal = document.getElementById("updateModel");

        // Get the button that opens the modal
        var btn = document.getElementById("openEditProfile");

        // Get the <span> element that closes the modal
        var i = document.getElementById("close");

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        i.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


    </script>

    <!-- Must add this for enabling sidebar to be opened -->
    <script src="../General Components & Widget/User/User Component Script.js"></script>


</html>