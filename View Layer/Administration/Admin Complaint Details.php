<?php 
    session_start();

    $complaintID = $_GET['complaint'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin | View Complaint Details</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

         <!-- FONT AWESOME ICON -->
        <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>

        <!-- SWEET ALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

        <style>
            

            

            a{
                color: #0000ff;
            }
            a:hover{
                color: #97a0e6;
                transition: 0.3s color;
            }


        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/Administration/Admin_Sidebar.php");
        ?>

        
        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/Administration/Admin_Header.php");
            ?>

            <div style = "padding-top: 0.5%; padding-left: 2%">
                <div style = "display: flex; align-items: center; padding-bottom: 1%; gap: 1%">
                    <a7 class="back-link">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a7>
                    <p class="header-text" style = "font-weight: bold">Complaint Details</p>
                </div>

                <?php 
                    require("../../Database Layer/db_connection.php");
                   
                    $sqlShow = "SELECT * FROM complain WHERE ComplainId = '$complaintID'";

                    $result = mysqli_query($con, $sqlShow);
                
                    if(mysqli_num_rows($result) === 1){
                        $row = mysqli_fetch_assoc($result);
                    }
                ?>

                <div style = "background-color: #F3F4F6FF; margin-left: 2%; margin-right: 4%; padding: 1%">
                    <p><strong><?php echo $row["Title"] ?></strong></p>
                </div>
                
                <div style = "background-color: #DEE1E6FF; margin-left: 2%; margin-right: 4%; padding: 1%;  box-shadow: 8px 8px 15px 0px #535353;">
                    <p><?php echo $row["Description"] ?></p>
                </div>

                <div style = "display: flex; padding-left: 2%; padding-right: 2%; padding-top: 2%; gap: 5%">
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-regular fa-calendar-days" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["DateTime"]) ?></b>
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-regular fa-clock" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["DateTime"]) ?></b>
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-regular fa-building" style = "font-size: 5vh"></i>
                        </div>
                        
                        <b><?php echo strtoupper($row["City"]) ?></b>
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-solid fa-location-dot" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["State"]) ?></b>
                        
                    </div>
                    <div style = "display: flex; gap: 5%; width: 20%; align-items: center;">
                        <div style = "padding: 10%; background: #EBFDFFFF; align-items: center;">
                            <i class="fa-solid fa-map-location-dot" style = "font-size: 5vh"></i>
                        </div>
                        <b><?php echo strtoupper($row["Country"]) ?></b>
                    </div>
                </div>

            </div>

            


        </div>
    </body>
    
    
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>