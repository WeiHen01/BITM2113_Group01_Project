<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");

    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id']; // Get the user_id from the URL query string
        $sql = "SELECT * FROM user WHERE UserId='$user_id'"; // Prepare the SQL query
        $result = mysqli_query($con, $sql); // Execute the query
    
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result); // Fetch the user data
        } else {
            echo "User not found."; // Handle case where no user is found
            exit();
        }
    } else {
        echo "No user ID provided."; // Handle case where user_id is not in the query string
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title of the tab -->
        <title>Admin |Organization Tracking</title>
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
                    <p style="padding-left: 2%"><b>Organization Analysis</b></p>

                    <div class="container">
                        <h2>User Details for <?php echo $user['Username']; ?></h2>
                        <p><b>Email:</b> <?php echo $user['Email']; ?></p>
                        <p><b>Status:</b> <?php echo $user['Status']; ?></p>
                    </div>











                </div> 

    </body>
    <script src="../General Components & Widget/Administration/Admin_Component Script.js"></script>
</html>