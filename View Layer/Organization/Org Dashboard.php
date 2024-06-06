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



    <!-- Embedded CSS style -->
    <style>

    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>User | Dashboard</title>
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

            <p style="padding-left:1.5%">Organization Dashboard</p>


            
        </div>
        

        

        
        

    </body>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>


</html>