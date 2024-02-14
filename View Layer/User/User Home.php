<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

?>

<!--========================================================
    User Home.php: User Home page after successful login
==========================================================-->

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
        <title>User | Home</title>

    </head>


    <!-- Body of the webpage -->
    <body>

        <!-- Horizontal Navigation bar -->
        <h3>Home Page</h3>
        <p>Welcome! <?php echo $loggedUserEmail ?></p>

        <a href = "User Account.php">Go to your account</a>

    </body>


    <!-- Javascript implementation -->
    <script>

    </script>


</html>