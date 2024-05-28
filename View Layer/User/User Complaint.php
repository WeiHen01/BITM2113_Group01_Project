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
            .container {
                margin-left: 2%;
                width: calc(90%/3); 
                height: 70vh; 
                background: #d1d1d1; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            .complaint-button{
                padding: 1%;
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

            <div style = "display: flex; justify-content:space-between; border-color: #5faddc; /* neutral-300 */
                border-width: 1px;  padding-top: 1%; padding-bottom:1%">
                <p style="padding-left:2%"><b>Complaint</b></p>

                <div class ="complaint-button" style="margin-right: 2%; display: flex; gap: 5px">
                    <i class="fa-solid fa-plus"></i>
                     
                    Add complaint
                </div>
            </div>

            <div style = "display: flex">
                
                <!-- Left -->
                <div class = "container" style="overflow-y: auto">
                    
                </div>

               
                 <!-- Center -->
                <div class = "container" style="overflow-y: auto">
                
                </div>

                 <!-- Right -->
                <div class = "container" style="overflow-y: auto">

                </div>

            </div>
        </div>


    </body>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>