<?php 
    // Start the session at the very beginning of the file
    session_start();
?>
<!-- Login Page -->

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>BITM2113 | Register</title>

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">

        <!-- FONT AWESOME ICON -->
        <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>

        <!-- SWEET ALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!-- iziToast -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">



    </head>
    <style>
        body{
            background-image: url("./Assets/Image/water_bg.jpg");
            background-size: 100vw;
            max-height: 100vh;
            overflow: hidden;
            background-repeat: none;
            font-family: 'Epilogue';
            height: 100vh;
            margin: 0;
        }
        #role-selection{
           display: flex;
           gap: 2px; /* Adjust as needed */
           padding: 3%;
           justify-content: space-between;
           align-items: center;
           text-align: center;
        }
        #role:hover{
            transform: scale(1.1);
            transition: 0.3s ease;
        }
        #role2:hover{
            transform: scale(1.1);
            transition: 0.3s ease;
        }
        #role3:hover{
            transform: scale(1.1);
            transition: 0.3s ease;
        }
        img{
            /* Sets the width of the image */
            width: 300px;
            
            /* Sets the height of the image */
            height: 300px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            position: absolute; 
            top: 10%;
            bottom: 10%; 
            left: 10%;
            right: 10%; 
            width: 80%; 
            height: 80%; 
            background: #FFFFFFFF; /* white */
            border-radius: 8px; /* border-xl */
            box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
        }

        /* The Close Button */
        #close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            padding: 1.5%;
        }

        #close:hover{
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            padding: 1.5%;
        }

        /** Modal: left-container */
        .image {
            position: absolute;
            top: 0px;
            left: 0px; 
            height: 80vh;
            width: 35vw;
            border-radius: 16px 0px 0px 16px; 
        }
        .text {
            position: absolute; 
            top: 50px; 
            left: 35px; 
            width: 431px; 
            height: 192px; 
            font-family: Epilogue; /* Heading */
            font-size: 32px; 
            line-height: 48px; 
            font-weight: 700; 
            color: #171A1FFF; /* neutral-900 */
            word-wrap: break-word;
        }

        /** Right-container */
        .text2 {
            position: absolute; 
            left: 36vw; 
            font-family: Epilogue; /* Heading */
            color: #171A1FFF; /* neutral-900 */
        }

        .textbox {
            position: relative;
            margin-bottom: 10px; /* Adjust as needed */
        }

       
        .textbox input {
            font-family: 'Epilogue';
            width: 41vw; 
            height: 46px;
            font-size: 14px; 
            line-height: 22px; 
            font-weight: 400; 
            background: #F3F4F6FF; /* neutral-200 */
            border-radius: 8px; /* border-xl */
            border-width: 0px; 
            outline: none; 
            padding-left: 25px; /* Adjust the padding to make space for the icon */
        }
        /* hover */
        .textbox input:hover {
            font-family: 'Epilogue';
            color: #000000; /* neutral-400 */
            background: #F3F4F6FF; /* neutral-200 */
        }
        /* focused */
        .textbox input:focused {
            font-family: 'Epilogue';
            color: #000000; /* neutral-400 */
            background: #FFFFFFFF; /* white */
        }
        /* disabled */
        .textbox input:disabled {
            font-family: 'Epilogue';
            color: #000000; /* neutral-400 */
            background: #F3F4F6FF; /* neutral-200 */
        }
        .textbox :disabled + .icon, .textbox :disabled + .icon + .icon {

            font-family: 'Epilogue';
            fill: #000000; /* neutral-400 */
        }

        /* Button 26 */
        button {
            font-family: 'Epilogue';
            position: absolute;
            width: 43vw; 
            height: 46px;  
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 16px; 
            margin-top: 2%;
            line-height: 26px; 
            font-weight: 400; 
            color: #FFFFFFFF; /* white */
            background: #00BDD6FF; /* primary-500 */
            opacity: 1; 
            border: none; 
            border-radius: 8px; /* border-xl */
            padding-left: 12px;
        }

        button:hover {
            background-color: #0056b3; /* Example background color on hover */
            color: #f8f9fa; /* Example text color on hover */
        }

        /* Back button style */
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
            color: #0056b3
        }

        

    </style>
    <body>
        <!-- Back button -->
        <div id="backButton" style="display: block;" onclick="window.location.href='./index.php'">
            <i class="fas fa-arrow-left"></i> Back
        </div>

        <h1 style = "padding-top: 3%"><center>Let's get started!</center></h1>
        <h2 style = "padding-top: 5px"><center>Are you a?</center></h2>

        <div id="role-selection">
            <div id="role" style="background-color: rgba(255, 255, 255, 0.5);; font-weight: 600; ">
                <img src="./Assets/Image/User.png" />
                <p class="text-3xl font-bold">Normal User</p>
            </div>

            <div id="role2" style="background-color: rgba(255, 255, 255, 0.5);; font-weight: 600; " >
                <img src="./Assets/Image/Organization.png" />
                <p class="text-3xl font-bold">Organization</p>
            </div>

            <div id="role3" style="background-color: rgba(255, 255, 255, 0.5);; font-weight: 600;">
                <img src="./Assets/Image/Admin.png" />
                <p class="text-3xl font-bold">Administration</p>
            </div>
        </div>

        

        <!-- The Modal -->
        <div id="myModal" class="modal">
            
            <form id="registrationForm" action="./Controller Layer/Register Process.php" method="post">
                <!-- Modal content -->
                <div class="modal-content">
                    <!--Close button -->
                    <div id="close" style = "padding: 2%">
                        <i class="fa-solid fa-xmark"></i>
                    </div>

                    <!-- Left container-->
                    <img class="image" src="./Assets/Image/Login_photo.jpeg" />
                    <div class="text">
                        <p>"Thousands have lived without love, not one without water."</p>
                    </div>

                    <div class="text2">
                        <p style="font-weight: 700; font-size: 32px">Sign Up as <span id="selectedRole"></span></p>
                        <p style="font-size: 16px">Enter your email to sign up.</p>
                        <input type="hidden" name="selectedRole" id="selectedRoleInput">
                        <div class="textbox">
                            <i style = "position: absolute; left: 5px; top: 13px" class="fas fa-envelope" id="icons-1"></i> <!-- Icon for email -->
                            <input type = "text" name = "Email" id="emailInput" placeholder = "Enter Your Email" />
                        </div>
                        <br />
                        <div class="textbox">
                            <i style = "position: absolute; left: 5px; top: 13px" class="fas fa-lock" id="icons-2"></i> <!-- Icon for password -->
                            <input type = "text" name = "Password" id="passwordInput" placeholder = "Set Your Password" />
                            <i style = "position: absolute; right: 25px; top: 13px" class="fas fa-eye" id="togglePassword"></i> <!-- Toggle button for password -->
                        </div>
                        <br />
                        <div class="textbox">
                            <i style = "position: absolute; left: 5px; top: 13px" class="fas fa-lock" id="icons-3"></i> <!-- Icon for password -->
                            <input type = "text" name = "ConPassword" id="confirmPasswordInput" placeholder = "Confirm Your Password" />
                            <i style = "position: absolute; right: 25px; top: 13px" class="fas fa-eye" id="toggleConfirmPassword"></i>
                        </div>
                        <!-- Add id="errorText" for displaying error messages -->
                        <div id="errorText" style ="color: red;"></div>
                        <div class="button" id="signupButton" onclick="validateForm()"">
                            <button type="submit">Continue</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        
        </div>

        <!-- PHP code to check for successful login and trigger SweetAlert -->
        <?php 
            // Check if the session variable 'login_status' indicates a successful login
            if(isset($_SESSION['register_status']) && $_SESSION['login_status'] == 'success') {
                
                // if successful login as organization
                if(isset($_SESSION["role"]) && $_SESSION["role"] == 'Organization'){
                    

                    echo "<script>
                        Swal.fire({
                            title: 'Register Successful as Organization!',
                            text: 'You may proceed to login as Organization!',
                            icon: 'success'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = './login.php'
                        } 
                        });
                    </script>";
                    // Unset the session variable after displaying the SweetAlert
                    unset($_SESSION['register_status']);
                }
            }
            //login failed
            // Check if the session variable 'login_status' indicates a login failure
            elseif(isset($_SESSION['register_status']) && $_SESSION['register_status'] == 'fail') {
                // if successful login as organization
                if(isset($_SESSION["role"]) && $_SESSION["role"] == 'Organization'){
                // Trigger iziToast notification for successful login
                    echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                    echo "<script>
                            iziToast.show({
                                title: 'Fail to register',
                                message: 'Fail to register as organization!',
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
                    unset($_SESSION['register_status']);
                }
            }
            
        ?>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("role");
            // Get the button that opens the modal
            var btn2 = document.getElementById("role2");
            // Get the button that opens the modal
            var btn3 = document.getElementById("role3");

            // Get the <span> element that closes the modal
            var i = document.getElementById("close");

            var signUp = document.getElementById("signUpButton");

            var selectedRole;


            // When the user clicks on the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
                selectedRole = "Normal User"; // Set the selected role
                document.getElementById("selectedRole").innerText = selectedRole;
                document.getElementById("selectedRoleInput").value = selectedRole;
            }
            // When the user clicks on the button, open the modal
            btn2.onclick = function() {
                modal.style.display = "block";
                selectedRole = "Organization"; // Set the selected role
                document.getElementById("selectedRole").innerText = selectedRole;
                document.getElementById("selectedRoleInput").value = selectedRole;
            }
            // When the user clicks on the button, open the modal
            btn3.onclick = function() {
                modal.style.display = "block";
                selectedRole = "Administration"; // Set the selected role
                document.getElementById("selectedRole").innerText = selectedRole;
                document.getElementById("selectedRoleInput").value = selectedRole;
            }

            // When the user clicks on <span> (x), close the modal
            i.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            function validateForm() {
                var emailInput = document.getElementById("emailInput");
                var errorText = document.getElementById("errorText");
                var email = emailInput.value;

                // Regular expression for email validation
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                // Check if the email is empty
                if (email.trim() === "") {
                    errorText.innerText = "Please enter your email.";
                    return false;
                }
                // Check if the email matches the regex pattern
                else if (!emailRegex.test(email)) {
                    errorText.innerText = "Please enter a valid email address.";
                    return false;
                } else {
                    // If the email is valid, submit the form or perform other actions
                    // For now, just log a success message
                    console.log("Form submitted successfully!");
                    return true;
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

            document.getElementById("toggleConfirmPassword").addEventListener("click", function() {
                var confirmPasswordInput = document.getElementById("confirmPasswordInput");
                var toggleIcon = document.getElementById("toggleConfirmPassword");
                if (confirmPasswordInput.type === "password") {
                    confirmPasswordInput.type = "text";
                    toggleIcon.classList.remove("fa-eye-slash");
                    toggleIcon.classList.add("fa-eye");
                } else {
                    confirmPasswordInput.type = "password";
                    toggleIcon.classList.remove("fa-eye");
                    toggleIcon.classList.add("fa-eye-slash");
                }
            });

            

            

        </script>

        

    </body>

    

    
</html>