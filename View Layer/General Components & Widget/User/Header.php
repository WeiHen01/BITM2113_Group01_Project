<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" href="View Layer/General Components & Widget/User/component_style.css" />

    <!-- FONT AWESOME ICON -->
    <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>
</head>

<body>
	
	
	<!-- Header bar -->
    <div class="header-bar">
        <div class = "left-area">
            <span style="cursor: pointer" onclick="toggleSidebar()">
                <i id="menuIcon" class="fa-solid fa-bars" style="font-size: 20px; color:  #4069E5FF;"></i>
            </span>

            <div class = "Logo">
                <img src="../../../Assets/Image/H20 Harmony Logo.png"  alt="Logo" width="100">
            </div>

            <p style="font-size: 15px;">H20 Harmony</p>
        </div>
        

        <!-- Profile image with dropdown -->
        <div class="profile-image" onclick="toggleDropdown()">
            <img src="../../../Assets/Image/logo.png" alt="Profile" width="40" height="40">
            <div class="profile-dropdown" id="profileDropdown">
                <a href="#">Profile</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
            </div>
        </div>
        
    </div>
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("profileDropdown");
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }
    </script>
</body>

</html>
