<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if (!isset($_SESSION["LoggedUserEmail"])) {
        die("User not logged in.");
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");

    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id']; // Get the user_id from the URL query string
        $sql = "SELECT * FROM user WHERE UserId='$user_id'"; // Prepare the SQL query
        $result = mysqli_query($con, $sql); // Execute the query

        if (!$result) {
            die('Error executing query: ' . mysqli_error($con));
        }
    
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result); // Fetch the user data
        } else {
            echo "User not found."; // Handle case where no user is found
            exit();
        }
        
        // Fetch events joined by the user with organizer's name
        $events_sql = "
            SELECT 
                p.ParticipationStatus,
                p.ParticipationDateTime,
                e.Name AS EventName,
                e.DateTime,
                e.Location,
                o.OrgName
            FROM 
                participation p
            JOIN 
                event e ON p.EventId = e.EventId
            JOIN 
                organization o ON e.OrgId = o.OrgId
            WHERE 
                p.UserId = '$user_id'
        ";
        $events_result = mysqli_query($con, $events_sql);

        if (!$events_result) {
            die('Error executing events query: ' . mysqli_error($con));
        }
        
        // Fetch complaints made by the user
        $complaints_sql = "SELECT * FROM complain WHERE UserId='$user_id'"; 
        $complaints_result = mysqli_query($con, $complaints_sql);

        if (!$complaints_result) {
            die('Error executing complaints query: ' . mysqli_error($con));
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
    <title>Admin | User Tracking</title>
    <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">
    <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../General Components & Widget/Administration/Admin_Component Style.css">
    <style>
        body {
            font-family: 'Epilogue', sans-serif;
            background-color: #f5f5f5;
        }
        #contentArea {
            padding: 20px;
        }
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
        .user-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: #ccc;
            padding: 15px;
            border-radius: 10px;
        }
        .user-card img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-right: 20px;
        }
        .user-details {
            display: flex;
            flex-direction: column;
        }
        .user-details .name {
            font-size: 20px;
            font-weight: bold;
        }
        .user-details .email-phone {
            display: flex;
            align-items: center;
            font-size: 14px;
            margin-top: 10px;
        }
        .user-details .email, .user-details .phone {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .user-details .email i, .user-details .phone i {
            margin-right: 5px;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000000;
        }
        .event, .complaint {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        .event .title, .complaint .title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .event .details, .complaint .details {
            font-size: 14px;
            color: #555;
        }
        .text-detail {
            margin-bottom: 8px;
        }
        .two-columns {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .column {
            width: 48%;
            background-color: #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            max-height: 500px;
        }
        .event-icon, .complaint-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .event-icon i, .complaint-icon i {
            color: #1313ff;
        }
        .event-header, .complaint-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .joinEventDate, .complaintDate {
            font-size: 10px;
            color: #555;
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
            <p style="margin: 0; font-weight: bold;">User Analysis</p>
        </div>

        <div class="container">
            <div class="user-card">
                <img src="../../Assets/Image/UserProfile/<?php echo $user['ProfileImage']; ?>" alt="User Profile Picture">
                <div class="user-details">
                    <div class="name"><?php echo $user['Username']; ?></div>
                    <div class="email-phone">
                        <div class="email">
                            <i class="fas fa-envelope"></i>
                            <span><?php echo $user['Email']; ?></span>
                        </div>
                        <div class="phone">
                            <i class="fas fa-phone"></i>
                            <span><?php echo $user['Contact']; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="two-columns">
                <div class="column" style="max-height: 400px; overflow-y: auto;">
                    <div class="section-title">Event joined by this user</div>
                    <?php 
                    if(mysqli_num_rows($events_result) > 0){
                        while($event = mysqli_fetch_assoc($events_result)){
                            echo '<div class="event">';
                            echo '<div class="event-header">';
                            echo '<div class="event-icon">';
                            // Add conditional statement to determine the icon based on participation status
                            if ($event['ParticipationStatus'] == 'Waiting') {
                                echo '<i class="fas fa-calendar-check"></i>'; // Display join event icon
                            } elseif ($event['ParticipationStatus'] == 'Cancel') {
                                echo '<i class="fa-solid fa-circle-xmark"></i>'; // Display cancel participation icon
                            } else {
                                echo '<i class="fas fa-calendar-check"></i>'; // Display join event icon by default
                            }
                            echo '</div>';
                            echo '<div class="title">';
                            if ($event['ParticipationStatus'] == 'Waiting') {
                                echo 'Join Event';
                            } elseif ($event['ParticipationStatus'] == 'Cancel') {
                                echo 'Cancel Participation';
                            } else {
                                echo 'Join Event';
                            }
                            echo '<div class="joinEventDate">'. $event['ParticipationDateTime'].'</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="details">';
                            echo '<div class="text-detail">Name: ' . $event['EventName'] . '</div>';
                            echo '<div class="text-detail">DateTime: ' . $event['DateTime'] . '</div>';
                            echo '<div class="text-detail">Organized by: ' . $event['OrgName'] . '</div>';
                            echo '<div class="text-detail">Location: ' . $event['Location'] . '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="event">No events joined by this user.</div>';
                    }
                    ?>
                </div>
                <div class="column" style="max-height: 400px; overflow-y: auto;">
                    <div class="section-title">Complain made by this user</div>
                    <?php 
                        if(mysqli_num_rows($complaints_result) > 0){
                            while($complaint = mysqli_fetch_assoc($complaints_result)){
                                echo '<div class="complaint">';
                                echo '<div class="complaint-header">';
                                echo '<div class="complaint-icon">';
                                // Add conditional statement to determine the icon based on complaint status
                                if ($complaint['Status'] == 'On Progress') {
                                    echo '<i class="fas fa-exclamation-circle"></i>'; // Display open complaint icon
                                } elseif ($complaint['Status'] == 'Completed') {
                                    echo '<i class="fas fa-check-circle"></i>'; // Display closed complaint icon
                                } else {
                                    echo '<i class="fas fa-exclamation-circle"></i>'; // Display default icon
                                }
                                echo '</div>';
                                echo '<div class="title">';
                                if ($complaint['Status'] == 'On Progress') {
                                    echo 'Open Complain';
                                } elseif ($complaint['Status'] == 'Completed') {
                                    echo 'Closed Complain';
                                } else {
                                    echo 'Open Complain';
                                }
                                echo '<div class="complaintDate">'. $complaint['DateTime'].'</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="details">';
                                echo '<div class="text-detail">Title: ' . $complaint['Title'] . '</div>';
                                echo '<div class="text-detail">DateTime: ' . $complaint['DateTime'] . '</div>';
                                echo '<div class="text-detail">Location: ' . $complaint['State'] . '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo '<div class="complaint">No complaints made by this user.</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>     
</body>
<script src="../General Components & Widget/Administration/Admin_Component Script.js"></script> 
</html>
