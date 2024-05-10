<div id="sideMenu" class="sideMenu">
    
    <div class="mainMenu">
        <div style = "padding: 3%">
            <p>Name</p>
            <p>Output</p>
        </div>
        <a href="User Home.php" <?php if(basename($_SERVER['PHP_SELF']) == 'User Home.php') echo 'class="active"'?>>
            <i class="fa-solid fa-house" style="padding-right: 5%"></i>
            Home
        </a>
        <a href="User Dashboard.php" <?php if(basename($_SERVER['PHP_SELF']) == 'User Dashboard.php') echo 'class="active"'?>>
            <i class="fa-solid fa-chart-line" style="padding-right: 5%"></i>
            Dashboard
        </a>
        <a href="javascript:void(0)"
            onclick="showContent('Portfolio')">Portfolio</a>
        <a href="javascript:void(0)"
            onclick="showContent('Services')">Services</a>
        <a href="javascript:void(0)"
            onclick="showContent('Contact')">Contact</a>
    </div>

    
</div>


