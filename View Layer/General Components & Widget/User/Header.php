<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="View Layer/General Components & Widget/User/component_style.css" />

    <!-- FONT AWESOME ICON -->
    <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>
</head>

<body>
	
	
	<!-- Header bar -->
    <div class="header-bar">
        <span style="cursor: pointer" onclick="toggleSidebar()">
            <i id="menuIcon" class="fa-solid fa-bars" style="font-size: 20px"></i>
        </span>
        

        <!-- Profile image with dropdown -->
        <div class="profile-image" onclick="toggleDropdown()">
            <img src="profile_image.jpg" alt="Profile" width="40" height="40">
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
