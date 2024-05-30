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
                background: #d1d1d1; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
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
                padding: 10px 20px;
                border-radius:5px;
                width: 50%;
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
            
            <form id="updatePasswordForm" method="post">
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
                                <input type="text" name="Email" id="emailInput" placeholder="Enter Your Email" />
                            </div>

                            <p>Description</p>
                            <div class="textbox">
                                <textarea name="Email" id="emailInput" placeholder="Enter description"> </textarea>
                            </div>

                            <div style = "display: flex; justify-content: space-evenly; gap: 10px">
                                <select name="city" id="city">
                                    <option value="none">City</option>
                                    <option value="javascript"> State</option>
                                    <option value="java">Country</option>
                                </select>

                                <select name="state" id="state">
                                    <option value="none">State</option>
                                    <option value="javascript"> JavaScript</option>
                                    <option value="java">Java</option>
                                </select>

                                <select name="country" id="country">
                                    <option value="none">Country</option>
                                    <option value="javascript"> JavaScript</option>
                                    <option value="java">Java</option>
                                </select>
                            </div>

                            <div style = "display: flex; justify-content: end; margin-top: 2%; gap: 10px;">
                                <div class="cancelBtn">
                                    <button type="cancel">Cancel</button>
                                </div>
                                <div class="button" id="signupButton" onclick="validateForm()">
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
                border-width: 1px;  padding-top: 1%; padding-bottom:1%">
                <p style="padding-left:2%"><b>Complaint</b></p>

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

                    </div>
                    
                </div>

               
                 <!-- Center -->
                <div class = "main-container">
                    <b>In Progress</b>
                    <div style="height: 2%"></div>
                    <div class = "container" style="overflow-y: auto">

                    </div>
                </div>

                 <!-- Right -->
                <div class = "main-container">
                    <b>Done</b>
                    <div style="height: 2%"></div>
                    <div class = "container" style="overflow-y: auto">

                    </div>
                </div>

            </div>
        </div>


    </body>
    <script>
        var openCreate  = document.getElementById("addComplaintModel");
        // Get the button that opens the modal
        var btn = document.getElementById("complainBtn");

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
        }
    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>