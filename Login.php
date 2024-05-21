<?php 
    // Start the session at the very beginning of the file
    session_start();
?>

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

    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">


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
        padding: 0.5%;
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

    #backButton {
        position: absolute;
        top: 10px;
        left: 10px;
        cursor: pointer;
        z-index: 9999;
        color: black;
        padding: 10px;
        border-radius: 5px;
        font-weight: bold;
    }

    #backButton:hover{
        transition: 0.3s;
        color: #ffffff
    }

    /* Custom CSS for Toastify message */
    /* Custom CSS */
    .custom-toast {
        font-family: 'Epilogue';
        color: white;
    }

</style>
<body>
    <!-- Back button -->
    <div id="backButton" style="display: block; margin: 0" onclick="window.location.href='./index.php'">
        <i class="fas fa-arrow-left"></i> Back
    </div>
    <form id="loginForm" action="./Controller Layer/Login Process.php" method="POST">
        <div class="container">
            <div class="column1">
                <!-- Content for the first column -->
                <h1 style="font-family: Epilogue; font-size: 50px;">Welcome back 👋</h1>
                <h3 style="font-family: Epilogue; font-size: 24px; font-weight: 400">Log in your account</h3>
            
                    <b style="font-family: Epilogue; font-size: 17px;">Your email</b>
                    <div class="textbox">
                        <i style="position: absolute; left: 5px; top: 13px" class="fas fa-envelope" id="icons-1"></i> <!-- Icon for email -->
                        <input type="text" name="Email" id="emailInput" placeholder="Enter Your Email" />
                    </div>

                    <div style="height: 2vh"></div>

                    <b style="font-family: Epilogue; font-size: 17px;">Password</b>
                    <div class="textbox" >
                        <i style="position: absolute; left: 5px; top: 13px" class="fas fa-lock" id="icons-2"></i> <!-- Icon for password -->
                        <input type="password" name="Password" id="passwordInput" placeholder="Enter Your Password" />
                        <i style="position: absolute; right: 10px; top: 13px" class="fas fa-eye" id="togglePassword"></i> <!-- Toggle button for password -->
                    </div>

                    <div style="display: flex; justify-content: space-between; font-size: 12px; align-items: center;">
                        <div style="display: flex; align-items: center;">
                            <input type="checkbox" value="status" id="Remember" /> 
                            <label for="Remember">Remember me</label>
                        </div>
                        <b><a href="" style="text-decoration: none; color: black" onmouseover="this.style.color='#0056b3'" onmouseout="this.style.color='#000000'">Forget Password?</a></b>
                    </div>

                   

                    <div class="button" id="signupButton" onclick="validateForm()">
                        <button type="submit" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">Login</button>
                    </div>

                    

                    <center><p style = "font-size: 13px">Don't have an account? <a href="./Register.php" onmouseover="this.style.color='#0056b3'" onmouseout="this.style.color='#000000'" style="text-decoration: none; color: #000000" ><b>Sign Up now</b></a></p></center>


            </div>

            <div class="column2">
                <div class="dropdown-container">
                    <!-- Content for the second column (Dropdown menu and Image display) -->
                    <h2 id="roleTitle" style="font-family: Epilogue; font-size: 24px; text-align: center">You choose to login as:</h2>
                    <!-- Dropdown menu -->
                    <select id="imageSelect" onchange="displayImage()" name="Role">
                        <option value="None">-</option>
                        <option value="Normal User">Normal User</option>
                        <option value="Organization">Organization</option>
                        <option value="Administration">Administration</option>
                    </select>

                </div>
                <!-- Image display -->
                <div class="image-container" id="imageContainer">
                    <img id="selectedImage" src = "">
                </div>

                <center><p id="roleSelected" style = "font-weight: bold; font-size: 180%"></p></center>
            </div>
        </div>
    </form>

    <!-- PHP code to check for successful login and trigger SweetAlert -->
    <?php 
        // Check if the session variable 'login_status' indicates a successful login
        if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'success') {
            
            // if successful login as organization
            if(isset($_SESSION["role"]) && $_SESSION["role"] == 'Organization'){
                

                echo "<script>
                    Swal.fire({
                        title: 'Login Successful as Organization!',
                        text: 'You may proceed to login as Organization!',
                        icon: 'success'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = './View Layer/Organization/Org Home.php'
                    } 
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['login_status']);
            }
            elseif(isset($_SESSION["role"]) && $_SESSION["role"] == 'Normal User'){
                

                echo "<script>
                    Swal.fire({
                        title: 'Login Successful as User!',
                        text: 'You may proceed to login as User!',
                        icon: 'success'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = './View Layer/User/User Home.php'
                    } 
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['login_status']);
            }
            elseif(isset($_SESSION["role"]) && $_SESSION["role"] == 'Administration'){
                

                echo "<script>
                    Swal.fire({
                        title: 'Login Successful as Organization!',
                        text: 'You may proceed to login as Admin!',
                        icon: 'success'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = './View Layer/Administration/Admin_Home.php
                    } 
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['login_status']);
            }
        }
        //login failed
        // Check if the session variable 'login_status' indicates a login failure
        elseif(isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'fail') {
            // if successful login as organization
            if(isset($_SESSION["role"]) && $_SESSION["role"] == 'Organization'){
               // Trigger iziToast notification for successful login
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                        iziToast.show({
                            title: 'Fail to login',
                            message: 'Fail to login as organization!',
                            position: 'bottomRight',
                            timeout: 3000,
                            backgroundColor: 'red',
                            titleColor: 'white',
                            messageColor: 'white',
                            class: 'custom-toast',
                            icon: 'fa-solid fa-circle-xmark',
                            iconColor: 'white',
                            onClose: function(instance, toast, closedBy) {
                                // Add custom CSS to align the close button to the right
                                toast.style.justifyContent = 'flex-end';
                            }
                        });
                    </script>";
                
                // Unset the session variable after displaying the iziToast notification
                unset($_SESSION['login_status']);
            }
            // if successful login as organization
            elseif(isset($_SESSION["role"]) && $_SESSION["role"] == 'Normal User'){
                // Trigger iziToast notification for successful login
                 echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                 echo "<script>
                         iziToast.show({
                             title: 'Fail to login',
                             message: 'Fail to login as user!',
                             position: 'bottomRight',
                             timeout: 3000,
                             backgroundColor: 'red',
                             titleColor: 'white',
                             messageColor: 'white',
                             class: 'custom-toast',
                             icon: 'fa-solid fa-circle-xmark',
                             iconColor: 'white',
                             onClose: function(instance, toast, closedBy) {
                                 // Add custom CSS to align the close button to the right
                                 toast.style.justifyContent = 'flex-end';
                             }
                         });
                     </script>";
                 
                 // Unset the session variable after displaying the iziToast notification
                 unset($_SESSION['login_status']);
             }
             // if successful login as organization
            elseif(isset($_SESSION["role"]) && $_SESSION["role"] == 'Administration'){
                // Trigger iziToast notification for successful login
                 echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                 echo "<script>
                         iziToast.show({
                             title: 'Fail to login',
                             message: 'Fail to login as admin!',
                             position: 'bottomRight',
                             timeout: 3000,
                             backgroundColor: 'red',
                             titleColor: 'white',
                             messageColor: 'white',
                             class: 'custom-toast',
                             icon: 'fa-solid fa-circle-xmark',
                             iconColor: 'white',
                             onClose: function(instance, toast, closedBy) {
                                 // Add custom CSS to align the close button to the right
                                 toast.style.justifyContent = 'flex-end';
                             }
                         });
                     </script>";
                 
                 // Unset the session variable after displaying the iziToast notification
                 unset($_SESSION['login_status']);
             }
        }
        
    ?>

    <script>
        function displayImage() {
            var selectBox = document.getElementById("imageSelect");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var image = document.getElementById("selectedImage");
            var imgBox = document.querySelector(".image-container");
            var roleChosen = document.getElementById("roleSelected");
            var roleTitle = document.getElementById("roleTitle");

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
                roleTitle.style.textAlign = "center"; // Center align the title
                

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
