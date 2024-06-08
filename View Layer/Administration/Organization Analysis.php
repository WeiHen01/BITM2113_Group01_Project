<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");

    if (isset($_GET['org_id'])) {
        $org_id = $_GET['org_id']; // Get the org_id from the URL query string
        $sql = "SELECT * FROM organization WHERE OrgId='$org_id'"; // Prepare the SQL query
        $result = mysqli_query($con, $sql); // Execute the query
    
        if(mysqli_num_rows($result) > 0){
            $org = mysqli_fetch_assoc($result); // Fetch the org data
        } else {
            echo "Organization not found."; // Handle case where no org is found
            exit();
        }
    } else {
        echo "No organization ID provided."; // Handle case where org_id is not in the query string
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title of the tab -->
        <title>Admin | Organization Tracking</title>
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">
        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="../General Components & Widget/Administration/Admin_Component Style.css">
        <style>
        .header {
            display: flex;
            align-items: center;
            font-size: 24px;
            margin-bottom: 20px; 
            margin-top: 20px;
        }
        .header a {
            margin-right: 10px;
            color: inherit;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 4px;
            padding: 5px;
        }
        .header a:hover {
            background-color: #ccc;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
        }
        .org-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: #ccc;
            padding: 15px;
            border-radius: 10px;
        }
        .org-card img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-right: 20px;
        }
        .org-details {
            display: flex;
            flex-direction: column;
        }
        .org-details .name {
            font-size: 20px;
            font-weight: bold;
        }
        .org-details .email-phone {
            display: flex;
            align-items: center;
            font-size: 14px;
            margin-top: 10px;
        }
        .org-details .email, .org-details .phone {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .org-details .email i, .org-details .phone i {
            margin-right: 5px;
        }
        </style>
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
                    <div class="header">
                        <a href="User Organization Log.php"><i class="fas fa-arrow-left"></i></a>
                        <p style="margin: 0; font-weight: bold;">Organization Analysis</p>
                    </div>

                    <div class="container">
                        <div class="org-card">
                            <img src="../../Assets/Image/UserProfile/<?php echo $org['OrgImage']; ?>" alt="Organization Profile Picture">
                            <div class="org-details">
                                <div class="name"><?php echo $org['OrgName']; ?></div>
                                <div class="email-phone">
                                    <div class="email">
                                        <i class="fas fa-envelope"></i>
                                        <span><?php echo $org['OrgEmail']; ?></span>
                                    </div>
                                    <div class="phone">
                                        <i class="fas fa-phone"></i>
                                        <span><?php echo $org['OrgContact']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>











                </div> 

    </body>
    <script src="../General Components & Widget/Administration/Admin_Component Script.js"></script>
</html>