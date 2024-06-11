<!--=====================================================
    Check the session and get variables from other page
=======================================================-->

<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");

    // Fetch complaints made by the user
    $complaints_sql = "SELECT * FROM complain WHERE DATE(DateTime) = CURDATE() ORDER BY DateTime DESC"; 
    $complaints_result = mysqli_query($con, $complaints_sql);

    if (!$complaints_result) {
        die('Error executing complaints query: ' . mysqli_error($con));
    }

    // Store complaints in an array
    $complaints = [];
    while ($row = mysqli_fetch_assoc($complaints_result)) {
        $complaints[] = $row;
    }

    // Function to calculate the time difference
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        //$diff->w = floor($diff->d / 7);
        //$diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    // Fetch complain data
    $complains_sql = "
    SELECT 
        c.ComplainId,
        c.Title,
        u.Username AS Username,
        c.DateTime,
        c.Status
    FROM 
        complain c
    JOIN 
        user u ON c.UserId = u.UserId
    ORDER BY DateTime DESC
    ";
    $complains_result = mysqli_query($con, $complains_sql);

    if (!$complains_result) {
        die('Error executing complain query: ' . mysqli_error($con));
    }

    // Store complains in an array
    $complains = [];
    while ($row = mysqli_fetch_assoc($complains_result)) {
        $complains[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the tab -->
    <title>Admin | Complain Log</title>
    <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">
    <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../General Components & Widget/Administration/Admin_Component Style.css">
    <style>
        body {
            font-family: 'Epilogue', sans-serif;
        }
        .dashboard {
            padding: 2%;
        }
        .layout-container {
            display: flex;
            justify-content: space-between;
        }
        .left-section {
            display: flex;
            flex-direction: column;
            width: 65%;
        }
        .overview-container {
            background-color: #ccc;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .overview {
            display: flex;
            justify-content: space-between;
        }
        .overview h3 {
            flex-basis: 100%;
            margin-bottom: 10px;
            color: #fff;
        }
        .overview .stat {
            background: #e6f0ff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1;
            margin: 10px;
            border: 2px solid #4c8dff;
        }
        .stat-icon {
            font-size: 32px;
            color: #4c8dff;
            margin-bottom: 10px;
        }
        .stat h2 {
            margin: 0;
            color: #4c8dff;
        }
        .stat p {
            margin: 0;
            color: #333;
        }
        .complaints-table {
            background: #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .complaints-table table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .complaints-table th, .complaints-table td {
            padding: 1%;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        .complaints-table th {
            background: #e6f0ff;
        }
        .right-section {
            width: 30%;
            background: #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        .right-section .complaint {
            background: #e6f0ff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .right-section p {
            margin: 0;
            padding: 0;
        }
        .right-section small {
            display: block;
            margin-top: 5px;
            color: #000;
        }
        .right-section hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }
        .status-onprogress { color: orange; }
        .status-waiting { color: gray; }
        .status-completed { color: green; 
        }
        .plain-text-link {
                text-decoration: none;
                color: inherit;
                cursor: pointer;
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
        <div class="dashboard">
            <p style="font-size: 24px;"><b>Complain Tracking</b></p>
            
            <!-- Layout Container -->
            <div class="layout-container">
                <div class="left-section">
                    <!-- Overview Section -->
                    <div class="overview-container">
                        <h3>Overview</h3>
                        <div class="overview">
                            <div class="stat">
                                <?php
                                    // Initialize counts
                                    $complainCountToday = 0;

                                    // Get the count of complaints submitted today
                                    $sql = "
                                    SELECT COUNT(*) AS complainCount
                                    FROM complain
                                    WHERE DATE(DateTime) = CURDATE()";

                                    $result = mysqli_query($con, $sql);

                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        if ($row) {
                                            $complainCountToday = $row['complainCount'];
                                        }
                                    }
                                    ?>                
                                    <h2><?php echo $complainCountToday; ?></h2>
                                <p style="font-weight:bold">Submitted by today</p>
                            </div>
                            <div class="stat">
                                <?php
                                    // Initialize counts
                                    $complainCountThisMonth = 0;

                                    // Get the count of complaints submitted this month
                                    $sql_month = "
                                    SELECT COUNT(*) AS complainCount
                                    FROM complain
                                    WHERE MONTH(DateTime) = MONTH(CURDATE()) AND YEAR(DateTime) = YEAR(CURDATE())";

                                    $result_month = mysqli_query($con, $sql_month);

                                    if ($result_month) {
                                        $row_month = mysqli_fetch_assoc($result_month);
                                        if ($row_month) {
                                            $complainCountThisMonth = $row_month['complainCount'];
                                        }
                                    }
                                ?>
                                <h2><?php echo $complainCountThisMonth; ?></h2>
                                <p style="font-weight:bold">Submitted by this month</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- All Complaints Table -->
                    <div class="complaints-table">
                        <h3>All Complains</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Complain</th>
                                    <th>User</th>
                                    <th>Date and Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($complains as $complain): ?>
                                    <tr>
                                        <td>
                                        <a class='plain-text-link' href='Admin Complaint Details.php?complaint=<?php echo urlencode($complain['ComplainId']); ?>'>
                                        <?php echo htmlspecialchars($complain['Title']); ?></a>
                                        </td>
                                        <td><?php echo htmlspecialchars($complain['Username']); ?></td>
                                        <td><?php echo htmlspecialchars($complain['DateTime']); ?></td>
                                        <td class="status-<?php echo strtolower(htmlspecialchars(str_replace(' ', '', $complain['Status']))); ?>">
                                            <?php echo htmlspecialchars($complain['Status']); ?>
                                        </td>
                                        <td><a class='plain-text-link' href='Admin Complaint Details.php?complaint=<?php echo urlencode($complain['ComplainId']); ?>'><i class="fa fa-pencil-alt"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Complaints made by user today Section -->
                <div class="right-section">
                    <h3>Complains made by today</h3>
                    <?php if (!empty($complaints)): ?>
                        <!-- Display the first complaint in a highlighted container -->
                        <div class="complaint" style="background: #fff; margin-bottom: 20px;">
                            <p style="margin-bottom: 10px;"><strong><?php echo htmlspecialchars($complaints[0]['Title']); ?></strong></p>
                            <p style="margin-bottom: 5px;"><?php echo htmlspecialchars($complaints[0]['Description']); ?></p>
                            <small style="color:blue; font-size:10px; font-weight: normal;"><b><?php echo htmlspecialchars(time_elapsed_string($complaints[0]['DateTime'])); ?></b></small>
                        </div>
                        <!-- Display the rest of the complaints -->
                        <?php for ($i = 1; $i < count($complaints); $i++): ?>
                            <div class="complaint">
                                <p><strong><?php echo htmlspecialchars($complaints[$i]['Title']); ?></strong></p>
                                <p><?php echo htmlspecialchars($complaints[$i]['Description']); ?></p>
                                <small><b><?php echo htmlspecialchars(time_elapsed_string($complaints[$i]['DateTime'])); ?></b></small>
                            </div>
                        <?php endfor; ?>
                    <?php else: ?>
                        <div class="complaint">
                            <p>No complaints made today.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>  
<script src="../General Components & Widget/Administration/Admin_Component Script.js"></script> 
</html>
