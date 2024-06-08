<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title of the tab -->
        <title>Admin |Event Log</title>
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">
        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

            <!-- Content Here -->
            <p style="padding-left: 2%; font-size: 24px;"><b>Event Tracking</b></p>
                    
                        
                        
                      
        </div>
    </body>  
    <script src="../General Components & Widget/Administration/Admin_Component Script.js"></script> 
    
</html>