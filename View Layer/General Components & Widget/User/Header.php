<?php 
    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

    require("../../Database Layer/db_connection.php");

    $sql = "SELECT * FROM user WHERE Email = '$loggedUserEmail'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row["UserId"];
    }



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- FONT AWESOME ICON -->
        <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>

    </head>

    
    <style>
        /* Hover effect for the span */
        i:hover {
            transition: 0.3s /* Smooth transition for color and background-color */
        }

        #logo:hover{
            background-color: #4069E568;
            transition: 0.3s
        }
    </style>

    <body>
        
        
        <!-- Header bar -->
        <div class="header-bar">
            <div class = "left-area">
                <span style="cursor: pointer" onclick="toggleSidebar()">
                    <i id="menuIcon" class="fa-solid fa-bars" style="font-size: 20px; color: #4069E5FF;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#4069E5FF'"></i>
                </span>

                <!-- Add spacing here -->
                <div style="margin-left: 10px;"></div>

                <div id = "logo" style = "display: flex; align-items: center; cursor: pointer; justify-content: center;" onclick = "window.location.href = 'User Home.php'">
                    <img src="../../Assets/Image/H20 Harmony Logo.png"  alt="Logo" width="50">
                    <p style="font-size: 15px;"><b>H2O Harmony</b></p>
                </div>
            </div>
            

            <!-- Profile image with dropdown -->
            <div class="profile-image" onclick="toggleDropdown()" style = "display: flex; gap: 5%; align-items: center">
                
                <!-- fetch profile image -->
                <?php if (!empty($row['ProfileImage'])) : ?>
                    <!-- Convert BLOB data to base64 and embed it directly in the src attribute -->
                    <img src="data:image/*;base64,<?php echo base64_encode($row['ProfileImage']); ?>" class="dpicn" alt="dp" style="height: 40px;width: 40px;border-radius: 50%;">
                <?php else : ?>
                    <img src="../../Assets/Image/H20 Harmony Logo.png" class="dpicn" alt="dp" style="height: 40px;width: 40px;border-radius: 50%;">
                <?php endif; ?>


                <p style = "font-weight: 900"><?php echo $row['Username'] == null ? "New User" : $row['Username'] ?></p>
                
                <div class="profile-dropdown" id="profileDropdown">
                    <a href="User Account.php">Profile</a>
                    <a href="#" onClick="logout()">Logout</a>
                </div>

            </div>
            
        </div>
        <script>
            function toggleDropdown() {
                var dropdown = document.getElementById("profileDropdown");
                dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
            }
            function logout(){
                if(confirm("Do you want to logout?")){
                    window.location.href = "../../Controller Layer/User/User Logout Process.php";
                }
            }
        </script>
    </body>

</html>
