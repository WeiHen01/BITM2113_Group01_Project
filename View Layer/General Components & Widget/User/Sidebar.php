
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

<div id="sideMenu" class="sideMenu">
    
    <div class="mainMenu">
        <div style = "padding: 3%; background-color: cyan; display: flex; align-items: center; cursor: pointer" onclick = "window.location.href='User Account.php'" onmouseover="this.style.background='#00eaea'" onmouseout="this.style.background='cyan'">
            <div style = "padding-right: 5%">
                <!-- fetch profile image -->
                <?php if (!empty($row['ProfileImage'])) : ?>
                    <!-- Convert BLOB data to base64 and embed it directly in the src attribute -->
                    <img src="data:image/<?php echo pathinfo($row['ProfileImage'], PATHINFO_EXTENSION); ?>;base64,<?php echo base64_encode($row['ProfileImage']); ?>" class="dpicn" alt="dp" style="height: 60px; width: 60px; border-radius: 50%;">
                <?php else : ?>
                    <img src="../../Assets/Image/H20 Harmony Logo.png" class="dpicn" alt="dp" style="height: 60px; width: 60px;border-radius: 50%;">
                <?php endif; ?>
            </div>
            <div style = "margin: 0">
                <p><b><?php echo $row['Username'] == null ? "New User" : $row['Username'] ?></b></p>
                <p style = "font-size: 12px"><?php echo $row['Email']?></p>
            </div>
        </div>
        <a href="User Home.php" <?php if(basename($_SERVER['PHP_SELF']) == 'User Home.php') echo 'class="active"'?>>
            <i class="fa-solid fa-house" style="padding-right: 5%"></i>
            Home
        </a>
        <a href="User Dashboard.php" <?php if(basename($_SERVER['PHP_SELF']) == 'User Dashboard.php') echo 'class="active"'?>>
            <i class="fa-solid fa-chart-line" style="padding-right: 5%"></i>
            Dashboard
        </a>
        <a href="User Event.php" <?php if(basename($_SERVER['PHP_SELF']) == 'User Event.php') echo 'class="active"'?>>
            <i class="fa-regular fa-calendar-days" style="padding-right: 5%"></i>
            Event
        </a>
        <a href="User Complaint.php" <?php if(basename($_SERVER['PHP_SELF']) == 'User Complaint.php') echo 'class="active"'?>>
            <i class="fa-regular fa-file-lines" style="padding-right: 5%"></i>
            Complaint
        </a>
        <a href="#" onClick="logout()">
            <i class="fa-solid fa-arrow-right-from-bracket" style="padding-right: 5%"></i>
            Logout
        </a>
    </div>

    <script>
        function logout(){
           if(confirm("Do you want to logout?")){
            window.location.href = "../../Controller Layer/User/User Logout Process.php";
           }
        }
    </script>
</div>


