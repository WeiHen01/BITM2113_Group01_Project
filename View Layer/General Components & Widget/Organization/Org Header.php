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

    #logo:hover {
        background-color: #4069E568;
        transition: 0.3s
    }

    .button {
        top: 20px;
        left: 220px;
        height: 36px;
        padding: 0 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        line-height: 22px;
        font-weight: 700;
        color: #FFFFFFFF; /* white */
        background: #00BDD6FF; /* primary-500 */
        opacity: 1;
        border: none;
        font-family: 'Epilogue';
        border-radius: 4px; /* border-m */
    }
</style>

<body>

    <!-- Header bar -->
    <div class="header-bar">
        <div class="left-area">
            <span style="cursor: pointer" onclick="toggleSidebar()">
                <i id="menuIcon" class="fa-solid fa-bars" style="font-size: 20px; color: #4069E5FF;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#4069E5FF'"></i>
            </span>

            <!-- Add spacing here -->
            <div style="margin-left: 25px;"></div>

            <div id="logo" style="display: flex; align-items: center; cursor: pointer; justify-content: center;" onclick="window.location.href = 'Org Home.php'">
                <img src="../../Assets/Image/H20 Harmony Logo.png" alt="Logo" width="50">
                <p style="font-size: 15px;"><b>H2O Harmony</b></p>

                <!-- Organization -->
                <button class="button">Organization</button>
            </div>
        </div>

       

        
        <!-- Profile image with dropdown -->
        <div class="profile-image" onclick="toggleDropdown()">
            <img src="../../../Assets/Image/logo.png" alt="Profile" width="40" height="40">
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

        function logout() {
            if (confirm("Do you want to logout?")) {
                window.location.href = "../../Controller Layer/User/User Logout Process.php";
            }
        }
    </script>
</body>

</html>
