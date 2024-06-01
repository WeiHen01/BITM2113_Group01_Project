<?php 
    session_start();

    $org = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | View Organization</title>
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
            .profile-container {
                width: 8vw; /* Set the width of the container */
                height: 8vw; /* Set the height of the container */
                border-radius: 50%; /* Make it a circle */
                overflow: hidden; /* Hide overflow to keep the circular shape */
                display: flex; /* Center the image if it's smaller */
                align-items: center; /* Center the image vertically */
                justify-content: center; /* Center the image horizontally */
                border: 2px solid #000000; /* Optional: add a border for better visibility */
                background-color: #f0f0f0; /* Optional: add a background color */

                padding: 0.5%;
            }

            .profile-picture {
                width: 120%; /* Ensure the image fills the container */
                height: 120%; /* Maintain the aspect ratio */
                object-fit: cover; /* Cover the container without distorting the image */
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

            <div style = "padding-top: 0.5%; padding-left: 2%; margin-bottom: 2%">
                
                <div style = "display: flex; align-items: center; padding-bottom: 1%; gap: 1%">
                    <a href="#" class="back-link" onclick="window.history.back()">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <p class="header-text" style = "font-weight: bold">Organization Details</p>
                </div>

                <?php 
                    require("../../Database Layer/db_connection.php");
                   
                    $sqlShow = "SELECT * FROM organization WHERE OrgId = '$org'";

                    $result = mysqli_query($con, $sqlShow);
                
                    if(mysqli_num_rows($result) === 1){
                        $row = mysqli_fetch_assoc($result);
                    }
                ?>

                
                <div style = "background-color: #DEE1E6FF; margin-left: 2%; margin-right: 4%; padding-top: 0.5%; padding-bottom: 0.5%; padding-left: 1%;  box-shadow: 8px 8px 15px 0px #535353; display: flex; align-items: center; gap: 3%; border-radius: 8px; ">
                
                    <!-- Profile Image -->
                    <div class="profile-container" id="profile-img">
                        <?php if (!empty($row['OrgImage'])) : ?>
                            <!-- Convert BLOB data to base64 and embed it directly in the src attribute -->
                            <img src="data:image/<?php echo pathinfo($row['OrgImage'], PATHINFO_EXTENSION); ?>;base64,<?php echo base64_encode($row['OrgImage']); ?>" alt="Profile Picture" class="profile-picture">
                        <?php else : ?>
                            <img src="../../Assets/Image/H20 Harmony Logo.png" alt="Profile Picture" class="profile-picture">
                        <?php endif; ?>
                        
                    </div>
                    <div>
                        <p><strong><?php echo $row["OrgName"] ?></strong></p>
                        <div style = "display: flex; align-items: center; gap: 10%">
                            <div style = "display: flex; align-items: center; gap: 4%">
                                <i class="fa-regular fa-envelope"></i>
                                <p><?php echo $row["OrgEmail"] ?></p>
                            </div>
                            <div style = "display: flex; align-items: center; gap: 4%; width: 20vw">
                                <i class="fa-solid fa-phone"></i>
                                <p><?php echo $row["OrgContact"] == null ? "No contact" : $row["OrgContact"] ?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <br><hr>

                <p style = "margin: 0; padding-top: 0.5%; padding-bottom: 0.5%; padding-left: 2%; font-size: 25px"><strong>Events created by this organization</strong></p>
                <div style = "background-color: #ffffff50; margin-left: 2%; margin-right: 4%; padding-left: 1%; padding-right: 1%;  box-shadow: 8px 8px 15px 0px #535353; overflow-y: auto; height: 30vh; border-radius: 8px; ">
                          
                    <div style = "display: flex; align-items: center; gap: 3%; height: 100% ">
                        <?php 
                            require("../../Database Layer/db_connection.php");
                    
                            $sqlShow = "SELECT * FROM event WHERE OrgId = '$org'";
        
                            $result = mysqli_query($con, $sqlShow);
                        
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                            
                        ?> 
                        <div style = "background: #f2f2f2; width: 35vw; height: 50%; text-align: justify; padding-top: 0.5%; padding-bottom: 0.5%; padding-left: 0.5%; cursor: pointer; box-shadow: 8px 8px 15px 0px #535353; border-radius: 8px; " onClick="window.location.href='User Event Details.php?event=<?php echo $row['EventId']; ?>'">
                            <p style = "font-weight: bold"><?php echo $row["Name"]?></p>
                            <div style = "display: flex; align-items: center; gap: 3%; overflow-y: auto">
                                <i class="fa-regular fa-calendar-days"></i>
                                <p><?php echo $row["DateTime"]?></p>
                            </div>
                        </div>
                        <?php } } ?> 
                    </div>
                </div>


            </div>
        </div>
    </body>
</html>