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

// Fetch events made by the organization
$events_sql = "
SELECT 
    e.Category,
    e.DateTime,
    e.Name,
    e.Description,
    e.Location,
    o.OrgName AS OrgName
FROM 
    event e
JOIN 
    organization o ON e.OrgId = o.OrgId
WHERE 
    e.OrgId = '$org_id'
";
$events_result = mysqli_query($con, $events_sql);

if (!$events_result) {
    die('Error executing events query: ' . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .event-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background-color: #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .event-card {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            width: calc(33% - 20px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .event-card .event-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
        }
        .event-card .event-time {
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #555;
        }
        .event-card .event-details {
            font-size: 12px;
            line-height: 1.5;
            color: #555;
        }
        .event-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .event-icon i {
            color: #1313ff;
        }
        .event-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .event-category {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <?php include("../General Components & Widget/Administration/Admin_Sidebar.php"); ?>
    
    <!-- Body -->
    <div id="contentArea">
        <!-- Header -->
        <?php include("../General Components & Widget/Administration/Admin_Header.php"); ?>
        
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

            <div class="event-container">
                <?php
                if(mysqli_num_rows($events_result) > 0){
                    while($event = mysqli_fetch_assoc($events_result)){
                        echo '<div class="event-card">';
                        echo '<div class="event-header">';
                        echo '<div class="event-icon">';
                        if ($event['Category'] == 'Ongoing') {
                            echo '<i class="fa-solid fa-arrows-rotate"></i>';
                        } elseif ($event['Category'] == 'Completed') {
                            echo '<i class="fa-solid fa-calendar-check"></i>';
                        }
                        echo '</div>';
                        echo '<div class="event-category">';
                        echo '<div class="event-title">' . $event['Category'] . '</div>';
                        echo '<div class="event-time">' . $event['DateTime'] . '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="event-details">';
                        echo '<div class="text-detail">Name: ' . $event['Name'] . '</div>';
                        echo '<div class="text-detail">Description: ' . $event['Description'] . '</div>';
                        echo '<div class="text-detail">Organized by: ' . $event['OrgName'] . '</div>';
                        echo '<div class="text-detail">Location: ' . $event['Location'] . '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="event">No events found for this organization.</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="../General Components & Widget/Administration/Admin_Component Script.js"></script>
</body>
</html>
