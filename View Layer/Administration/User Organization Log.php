<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['user_id']) && isset($_POST['user_action'])) {
            $user_id = $_POST['user_id'];
            $new_status = $_POST['user_action'] == 'Disable' ? 'Disabled' : 'Active';
            $sql = "UPDATE user SET Status='$new_status' WHERE UserId='$user_id'";
            mysqli_query($con, $sql);
        }

        if (isset($_POST['org_id']) && isset($_POST['org_action'])) {
            $org_id = $_POST['org_id'];
            $new_status = $_POST['org_action'] == 'Disable' ? 'Disabled' : 'Available';
            $sql = "UPDATE organization SET OrgStatus='$new_status' WHERE OrgId='$org_id'";
            mysqli_query($con, $sql);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title of the tab -->
        <title>Admin | Tracking</title>
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">
        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="../General Components & Widget/Administration/Admin_Component Style.css">

        <style>
            body {
                font-family: 'Epilogue', sans-serif;
                margin: 0;
                padding: 0;
                background-color: white;
                overflow-y: scroll;
            }
            .container {
                width: 90%;
                margin: 20px auto;
                background-color: white;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                padding: 20px;
            }
            .header {
                padding: 20px;
                background-color: #007bff;
                color: white;
                text-align: left;
                font-size: 24px;
            }
            .table-container {
                margin-bottom: 30px;
            }
            .table-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
            }
            .table-header h3 {
                margin: 0;
            }
            .search-container {
                display: flex;
                align-items: center;
            }
            .search-container input {
                padding: 5px;
                font-size: 16px;
                border: 1px solid #ddd;
                border-radius: 4px 0 0 4px;
                outline: none;
            }
            .search-container button {
                padding: 5px 10px;
                font-size: 16px;
                border: 1px solid #007bff;
                border-left: none;
                background-color: #007bff;
                color: white;
                border-radius: 0 4px 4px 0;
                cursor: pointer;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            .status-registered {
                color: blue;
            }
            .status-active {
                color: green;
            }
            .status-inactive {
                color: gray;
            }
            .status-disabled {
                color: red;
            }
            .status-available {
                color: green;
            }
            .status-unavailable {
                color: gray;
            }
            .action-icon {
                cursor: pointer;
                color: #007bff;
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

            <!-- Content here -->
            <p style="padding-left: 2%; font-size: 24px;"><b>Tracking Dashboard</b></p>

            <!-- User Table -->
            <div class="container">
                    <div class="table-container">
                        <div class="table-header">
                            <h3>User</h3>
                            <div class="search-container">
                                <input type="text" placeholder="Search...">
                                <button>Search</button>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                            <div style="max-height: 150px; overflow-y: auto;">
                            <table>
                                <tbody >
                                    <?php
                                        $sql = "SELECT * FROM user";
                                        $result = mysqli_query($con, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td><input type='checkbox'></td>";
                                                echo "<td><a href='User Analysis.php?user_id=" . $row["UserId"] . "'>" . $row["Username"] . "</a></td>";
                                                /// Checking user status
                                                if ($row["Status"] == "Registered") {
                                                    echo "<td><span class='status-registered'>● Registered</span></td>";
                                                } elseif ($row["Status"] == "Active") {
                                                    echo "<td><span class='status-active'>● Active</span></td>";
                                                } elseif ($row["Status"] == "Inactive") {
                                                    echo "<td><span class='status-inactive'>● Inactive</span></td>";
                                                } else {
                                                    echo "<td><span class='status-disabled'>● Disabled</span></td>";
                                                }
                                                echo "<td>";
                                                if ($row["Status"] == "Disabled") {
                                                    echo "<form method='POST' style='display:inline;'>
                                                            <input type='hidden' name='user_id' value='" . $row["UserId"] . "'>
                                                            <input type='hidden' name='user_action' value='Active'>
                                                            <button type='submit' class='action-button'>Activate</button>
                                                        </form>";
                                                } else {
                                                    echo "<form method='POST' style='display:inline;'>
                                                            <input type='hidden' name='user_id' value='" . $row["UserId"] . "'>
                                                            <input type='hidden' name='user_action' value='Disable'>
                                                            <button type='submit' class='action-button'>Disable</button>
                                                        </form>";
                                                }
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'>No users found</td></tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </table>
                    </div>
                </div>
            </div>

                <!-- Organization Table -->
                <div class="container">
                    <div class="table-container">
                        <div class="table-header">
                            <h3>Organization</h3>
                            <div class="search-container">
                                <input type="text" placeholder="Search...">
                                <button>Search</button>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>Organization</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                        <div style="max-height: 150px; overflow-y: auto;">
                            <table>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM organization";
                                    $result = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td><input type='checkbox'></td>";
                                            echo "<td><a href='Organization Analysis.php?org_id=" . $row["OrgId"] . "'>" . $row["OrgName"] . "</a></td>";
                                            //check status
                                            if ($row["OrgStatus"] == "Available") {
                                                echo "<td><span class='status-available'>● Available</span></td>";
                                            } elseif ($row["OrgStatus"] == "Unavailable") {
                                                echo "<td><span class='status-unavailable'>● Unavailable</span></td>";
                                            } else {
                                                echo "<td><span class='status-disabled'>● Disabled</span></td>";
                                            }
                                            echo "<td>";
                                            if ($row["OrgStatus"] == "Disabled") {
                                                echo "<form method='POST' style='display:inline;'>
                                                        <input type='hidden' name='org_id' value='" . $row["OrgId"] . "'> 
                                                        <input type='hidden' name='org_action' value='Available'>
                                                        <button type='submit' class='action-button'>Activate</button>
                                                    </form>";
                                            } else {
                                                echo "<form method='POST' style='display:inline;'>
                                                        <input type='hidden' name='org_id' value='" . $row["OrgId"] . "'> <!-- Ensure 'OrgId' matches your DB column name -->
                                                        <input type='hidden' name='org_action' value='Disable'>
                                                        <button type='submit' class='action-button'>Disable</button>
                                                    </form>";
                                            }
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>No organizations found</td></tr>";
                                    }
                                ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>       
        </div>
    </body>
    <script src="../General Components & Widget/Administration/Admin_Component Script.js"></script>      
</html>