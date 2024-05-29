<div id="sideMenu" class="sideMenu">
    
    <div class="mainMenu">
        <div style = "padding: 3%; background-color: white">
        <div id="logo" style="display: flex; align-items: center; justify-content: center;">
                <img src="../../Assets/Image/H20 Harmony Logo.png" alt="Logo" width="50">
                <p style="font-size: 15px;"><b>H2O Harmony</b></p>
            </div>
        </div>
        <a href="Org Home.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Org Home.php') echo 'class="active"'?>>
            <i class="fa-solid fa-house" style="padding-right: 5%"></i>
            Home
        </a>
        <a href="Org Dashboard.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Org Dashboard.php') echo 'class="active"'?>>
            <i class="fa-solid fa-chart-line" style="padding-right: 5%"></i>
            Dashboard
        </a>
        <a href="Org Event Detail.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Org Event Detail.php') echo 'class="active"'?>>
            <i class="fa-regular fa-calendar-days" style="padding-right: 5%"></i>
            Event
        </a>
        <a href="Org Event Calendar.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Org Event Calendar.php') echo 'class="active"'?>>
            <i class="fa-regular fa-calendar" style="padding-right: 5%"></i>
            Calendar
        </a>
        <a href="Org Company Profile.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Org Company Profile.php') echo 'class="active"'?>>
            <i class="fa-regular fa-calendar" style="padding-right: 5%"></i>
            Profile
        </a>
        <a href="javascript:void(0)" onclick="showContent('Services')">
            <i class="fa-solid fa-arrow-right-from-bracket" style="padding-right: 5%"></i>
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


