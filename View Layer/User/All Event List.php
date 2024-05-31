<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Event</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <style>
            a{
                color: #4069E552;
            }
            a:hover{
                color: #0056b3;
            }
            .table_component {
                margin-left: 3%;
                margin-right: 5%;
                margin-bottom: 2%;
                width: 90%;
                overflow-y: auto;
            }

            .table_component table {
                border: 1px solid #dededf;
                height: 100%;
                width: 100%;
                table-layout: fixed;
                border-collapse: collapse;
                border-spacing: 1px;
                text-align: left;
            }

            .table_component caption {
                caption-side: top;
                text-align: left;
            }

            .table_component th {
                border: 1px solid #dededf;
                background-color: #eceff1;
                color: #000000;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 10px;
                padding-right: 10px;
            }

            .table_component td {
                border: 1px solid #dededf;
                background-color: #ffffff;
                color: #000000;
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 10px;
                padding-right: 10px;
            }
        </style>

    </head>
    <body>
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>

            <div style = "padding-top: 0.5%; padding-left: 2%">
                <div style = "display: flex; align-items: center; padding-bottom: 1%; gap: 1%">
                    <a href="User Event.php" class="back-link">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <p class="header-text" style = "font-weight: bold">All Events</p>
                </div>

                <div class="table_component" role="region" tabindex="0">
                    <table>
                        <thead>
                            <tr>
                                <th>DateTime</th>
                                <th>Event</th>
                                <th>Description</th>
                                <th>Organization</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require("../../Database Layer/db_connection.php");
                
                                $sqlShow = "SELECT * FROM event";
                
                                $result = mysqli_query($con, $sqlShow);
                            
                                if($result){
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $orgId = $row['OrgId'];
                                            $sqlOrg = "SELECT * FROM organization WHERE OrgId = $orgId";
                                            $result_new = mysqli_query($con, $sqlOrg);

                                            if($result_new == true){
                                                $row_new = mysqli_fetch_assoc($result_new);
                                                
                                                $org = $row_new["OrgName"];
                                            }
                            ?>
                            <tr>
                                <td><?php echo $row['DateTime'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Description'] ?></td>
                                <td><?php echo $org == " " ? "New-organization" : $org ?></td>
                                <td><?php echo $row['Location'] ?></td>
                                <td><a href="User Event Details.php?event=<?php echo $row['EventId'];?>" style = "text-decoration: none; color: #0000ff">View</a></td>
                            </tr>
                            <?php 
                                        }
                                    }
                                }
                            ?>
                            
                        </tbody>
                    </table>
                    
                    </div>
                </div>


        </div>
    </body>
    <script>

    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>