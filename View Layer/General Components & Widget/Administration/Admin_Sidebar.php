<div id="sideMenu" class="sideMenu">
    
    <div class="mainMenu">
        <div style = "padding: 3%; background-color: white">
            <p>Name</p>
            <p>Output</p>
        </div>
        <a href="Admin Home.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Admin Home.php') echo 'class="active"'?>>
            <i class="fa-solid fa-house" style="padding-right: 5%"></i>
            Home
        </a>
        <a href="User Dashboard.php" <?php if(basename($_SERVER['PHP_SELF']) == 'User Dashboard.php') echo 'class="active"'?>>
            <i class="fa-solid fa-chart-line" style="padding-right: 5%"></i>
            Dashboard
        </a>
        <a href="javascript:void(0)" onclick="showContent('Portfolio')">
            <i class="fa-regular fa-calendar-days" style="padding-right: 5%"></i>
            Event
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


