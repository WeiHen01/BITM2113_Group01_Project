<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITM2113 | Login</title>

    <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

    <!-- FavIcon on the browser tab-->
    <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">

    <!-- FONT AWESOME ICON -->
    <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-image: url("./Assets/Image/water_bg_02.jpg");
        background-size: 100vw;
        max-height: 100vh;
        overflow: hidden;
        background-repeat: none;
        font-family: 'Epilogue';
        height: 100vh;
    }
    
    /* Container 21 */
    .container {
        position: absolute; 
        padding: 1%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 86vw;
        height: 84vh;
        background: #FFFFFF50; /* white */
        border-radius: 4px; /* border-m */
        box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
        display: flex; /* Use flexbox for layout */
    }

    /* First Column */
    .column1 {
        flex: 1; /* Take up one-third of the container width */
        padding: 20px; /* Add padding for spacing */
        
    }

    /* Second Column */
    .column2 {
        flex: 1; /* Take up two-thirds of the container width */
        padding: 20px; /* Add padding for spacing */
        
    }

    /* Textbox style */
    .textbox {
        position: relative;
        margin-bottom: 10px; /* Adjust as needed */
    }

    .textbox input {
        font-family: 'Epilogue';
        width: 45vw; /* Fill the entire width of the parent container */
        height: 46px;
        font-size: 14px;
        line-height: 22px;
        font-weight: 400;
        background: #F3F4F6FF; /* neutral-200 */
        border-radius: 8px; /* border-xl */
        border-width: 0px;
        outline: none;
        padding-left: 35px; /* Adjust the padding to make space for the icon */
        padding-right: 38px;
    }

    /* Button 26 */
    button {
        font-family: 'Epilogue';
        width: 50vw; /* Fill the entire width of the parent container */
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        margin-top: 2%;
        line-height: 26px;
        font-weight: 400;
        opacity: 1;
        border: none;
        border-radius: 8px; /* border-xl */
        padding-left: 12px;
    }

    button:hover {
        background-color: #0056b3; /* Example background color on hover */
        color: #f8f9fa; /* Example text color on hover */
    }

    /* Dropdown style */
    select {
        width: 100%; /* Fill the entire width of the parent container */
        height: 46px;
        font-family: 'Epilogue';
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        margin-bottom: 20px;
        
        background-color: transparent;
    }

    /* Image display */
    .image-container {
        width: 100%;
        height: 46vh; /* Adjust as needed */
        display: flex; /* Use flexbox for layout */
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        max-width: 100%;
        max-height: 100%;
        object-fit: fill;
        border-radius: 8px;
    }
</style>
<body>
    <form id="loginForm" action="./Controller Layer/Login Process.php" method="POST">
        <div class="container">
            <div class="column1">
                <!-- Content for the first column -->
                <h1 style="font-family: Epilogue; font-size: 50px;">Welcome back 👋</h1>
                <h3 style="font-family: Epilogue; font-size: 24px; font-weight: 400">Log in your account</h3>
            
                    <b>Your email</b>
                    <div class="textbox">
                        <i style="position: absolute; left: 5px; top: 13px" class="fas fa-envelope" id="icons-1"></i> <!-- Icon for email -->
                        <input type="text" name="Email" id="emailInput" placeholder="Enter Your Email" />
                    </div>

                    <div style="height: 2vh"></div>

                    <b>Password</b>
                    <div class="textbox" >
                        <i style="position: absolute; left: 5px; top: 13px" class="fas fa-lock" id="icons-2"></i> <!-- Icon for password -->
                        <input type="password" name="Password" id="passwordInput" placeholder="Enter Your Password" />
                        <i style="position: absolute; right: 10px; top: 13px" class="fas fa-eye" id="togglePassword"></i> <!-- Toggle button for password -->
                    </div>

                    <div class="button" id="signupButton" onclick="validateForm()">
                        <button type="submit" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">Login</button>
                    </div>

                    <div class="button" id="signupButton" onclick="validateForm()">
                        <button type="button" style = "color: #000000; background: #FFFFFF;" onClick = "window.location.href = './index.php';" onmouseover="this.style.backgroundColor='#0056b3'; this.style.color='#ffffff'" onmouseout="this.style.backgroundColor='#FFFFFF'; this.style.color='#000000'">Back</button>
                    </div>
            </div>

            <div class="column2">
                <!-- Content for the second column (Dropdown menu and Image display) -->
                <h2 style="font-family: Epilogue; font-size: 24px;">You choose to login as:</h2>
                <!-- Dropdown menu -->
                <select id="imageSelect" onchange="displayImage()" name="Role">
                    <option value="None">Select your role</option>
                    <option value="Normal User">Normal User</option>
                    <option value="Organization">Organization</option>
                    <option value="Administration">Administration</option>
                </select>

                <!-- Image display -->
                <div class="image-container" id="imageContainer">
                    <img id="selectedImage" src = "">
                </div>

                <center><p id="roleSelected" style = "font-weight: bold; font-size: 180%"></p></center>
            </div>
        </div>
    </form>

    <script>
        function displayImage() {
            var selectBox = document.getElementById("imageSelect");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var image = document.getElementById("selectedImage");
            var imgBox = document.querySelector(".image-container");
            var imgeBox = document.getClass
            var roleChosen = document.getElementById("roleSelected");

            if (selectedValue === "Normal User") {
                image.src = "./Assets/Image/User.png";
                roleChosen.innerHTML = "Normal User";
                imgBox.style.display = "flex";
                image.style.display = "block";
                roleChosen.style.display = "block";
            } else if (selectedValue === "Organization") {
                image.src = "./Assets/Image/Organization.png";
                roleChosen.innerHTML = "Organization";
                imgBox.style.display = "flex";
                image.style.display = "block";
                roleChosen.style.display = "block";
            } else if (selectedValue === "Administration") {
                image.src = "./Assets/Image/Admin.png";
                roleChosen.innerHTML = "Administration";
                imgBox.style.display = "flex";
                image.style.display = "block";
                roleChosen.style.display = "block";
            } else if (selectedValue === "None"){
                // If no option is selected, hide the image
                image.style.display = "none";
                imgBox.style.display = "none";
                roleChosen.style.display = "none";
            }
        }

        // JavaScript for toggling password visibility
        document.getElementById("togglePassword").addEventListener("click", function() {
            var passwordInput = document.getElementById("passwordInput");
            var toggleIcon = document.getElementById("togglePassword");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            }
        });
    </script>
</body>
</html>
