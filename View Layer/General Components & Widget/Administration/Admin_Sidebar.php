<div id="sideMenu" class="sideMenu">
    
    <div class="mainMenu">
        <div style = "padding: 3%; background-color: white">
            <p>Name</p>
            <p>Output</p>
        </div>
        <a href="Admin Home.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Admin Home.php') echo 'class="active"'?>>
            <i class="fa-brands fa-flipboard" style="padding-right: 5%"></i>
            Dashboard
        </a>
        <a href="UserOrganizationLog.php" <?php if(basename($_SERVER['PHP_SELF']) == 'UserOrganizationLog.php') echo 'class="active"'?>>
            <i class="fa-regular fa-user" style="padding-right: 5%"></i>
            User/Organization Log
        </a>
        <a href="Complain Log.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Complain Log.php') echo 'class="active"'?>>
        <i class="fa-regular fa-calendar-check" style="padding-right: 5%"></i>
            Complain Log
        </a>
        <a href="Event Log.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Event Log.php') echo 'class="active"'?>>
        <i class="fa-solid fa-calendar-days" style="padding-right: 5%"></i>
            Event Log
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


