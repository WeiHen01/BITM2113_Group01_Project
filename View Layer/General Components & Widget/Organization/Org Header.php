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

    /* Organization button */
    .button {
        position: absolute;
        top: 20px;
        left: 220px;
        height: 36px;
        padding: 0 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Inter;
        font-size: 14px;
        line-height: 22px;
        font-weight: 700;
        color: #FFFFFFFF; /* white */
        background: #00BDD6FF; /* primary-500 */
        opacity: 1;
        border: none;
        border-radius: 4px; /* border-m */
    }

    /* Alarm Bell */
    .icon {
        position: absolute;
        top: 32px;
        left: 1350px;
        width: 50px;
        height: 50px;
        fill: #280F5AFF; /* secondary-850 */
    }

    /* Profile image */
    .profile-image {
        position: absolute;
        top: 20px;
        left: 1400px;
        width: 35px;
        height: 35px;
        font-family: Inter;
        font-size: 22px;
        line-height: 22px;
        font-weight: 400;
        color: #171A1FFF; /* neutral-900 */
        background: #FFFFFFFF; /* white */
        opacity: 1;
        overflow: hidden;
        border-radius: 22px;
        cursor: pointer;
    }

    /* Chevron down icon */
    .chevron-down {
        position: absolute;
        top: 30px;
        left: 1450px;
        width: 24px;
        height: 24px;
        fill: #280F5AFF; /* secondary-850 */
        cursor: pointer;
    }

    .header-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        position: relative;
    }

    .left-area {
        display: flex;
        align-items: center;
    }

    .profile-dropdown {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: white;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .profile-dropdown a {
        display: block;
        padding: 12px;
        text-decoration: none;
        color: black;
    }

    .profile-dropdown a:hover {
        background-color: #ddd;
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

            <div id="logo" style="display: flex; align-items: center; cursor: pointer; justify-content: center;" onclick="window.location.href = 'User Home.php'">
                <img src="../../Assets/Image/H20 Harmony Logo.png" alt="Logo" width="50">
                <p style="font-size: 15px;"><b>H2O Harmony</b></p>
            </div>
        </div>

        <!-- Organization -->
        <button class="button">Organization</button>

        <!-- Alarm Bell Icon -->
        <div class="icon" onclick="alert('Alarm Bell Clicked!')">
            <i class="fa-solid fa-bell"></i>
        </div>

        <!-- Profile image -->
        <div class="profile-image" onclick="toggleDropdown()">
            <img src="../../Assets/Image/Org profile.png" alt="Profile" width="35" height="35">
        </div>

        <!-- Chevron down icon -->
        <div class="chevron-down" onclick="toggleDropdown()">
            <i class="fa-solid fa-chevron-down"></i>
        </div>

        <!-- Profile dropdown menu -->
        <div class="profile-dropdown" id="profileDropdown">
            <a href="User Account.php">Profile</a>
            <a href="#">Settings</a>
            <a href="#" onClick="logout()">Logout</a>
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

        function toggleSidebar() {
            // Functionality for toggling the sidebar
        }
    </script>
</body>

</html>
