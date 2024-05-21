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

    </head>


    <!-- Body of the webpage -->
    <body>

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
            
            <!-- Content starts here -->
            <p style="padding-left:1.5%; font-weight: bold">Profile</p>


            
        </div>

        <!-- Left Vertical Sidebar / Drawer -->
        


        
        
    </body>


    <!-- Javascript implementation -->
    <script>
        // Step 2: Implement JS Function to request user for input current user password
        function updateSecurity(){
            var userCurrPassword = window.prompt("Please enter your current password: ");

            // Step 3: Construct the URL with query parameter for passing javascript variable to php variable
            var url = "../../Controller Layer/User/User Update Account Security.php?userInput=" 
                        + encodeURIComponent(userCurrPassword);

            // Step 4: Redirect to the PHP script
            window.location.href = url;
        }
    </script>

    <!-- Must add this for enabling sidebar to be opened -->
    <script src="../General Components & Widget/User/User Component Script.js"></script>


</html>