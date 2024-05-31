
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
        <div style = "padding: 3%; background-color: cyan; display: flex; align-items: center; ">
            <div style = "padding-right: 5%">
                <img src="path/to/your/image.jpg" alt="Avatar" class="avatar-name">
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


