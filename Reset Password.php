<?php 
    session_start();
    require('Database Layer/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITM2113 | Reset Password</title>

    <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

    <!-- FavIcon on the browser tab-->
    <link rel="icon" type="image/x-icon" href="Assets/Image/H20 Harmony Logo.png">

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
    
    .container {
        position: absolute; 
        padding: 0.5%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80vw;
        height: 80vh;
        background: #FFFFFF50; /* white */
        border-radius: 4px; /* border-m */
        box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
        display: flex; /* Use flexbox for layout */
    }

    .column1 {
        flex: 1; /* Take up one-third of the container width */
        padding: 20px; /* Add padding for spacing */
    }

    .column2 {
        flex: 1; /* Take up two-thirds of the container width */
        padding: 20px; /* Add padding for spacing */
        justify-content: center;
        align-items: center;
    }

    .textbox {
        margin-bottom: 20px; /* Adjust as needed */
    }

    .textbox input {
        font-family: 'Epilogue';
        width: 35vw;
        height: 46px;
        font-size: 14px;
        line-height: 22px;
        font-weight: 400;
        background: #F3F4F6FF; /* neutral-200 */
        border-radius: 8px; /* border-xl */
        border-width: 0px;
        outline: none;
        padding-left: 10px; /* Adjust the padding to make space for the icon */
        padding-right: 38px;
    }

    button {
        font-family: 'Epilogue';
        width: 100%; /* Fill the entire width of the parent container */
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

    select {
        width: 100%; /* Fill the entire width of the parent container */
        width: 35vw;
        font-family: 'Epilogue';
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        margin-bottom: 20px;
        background-color: transparent;
        padding-left: 5px; /* Adjust the padding to make space for the icon */
        padding-right: 38px;
    }

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
    <form id="forgetPasswordForm" action="./Controller Layer/Reset Password Process.php" method="POST">
        <div class="container">
            <div class="column1">
                <!-- Image and text -->
                <img src="./Assets/Image/ForgetPassword.png" alt="Forget Password" style = "height: 80vh; ">
            </div>
            <div class="column2" style = "justify-content: space-evenly">
                <h1 style="font-family: Epilogue; font-size: 36px;">Forget your password?</h1>
                <p style="font-family: Epilogue; font-size: 18px;">Enter new password so that we can update for you</p>
                <div class="textbox">
                    <input type="password" name="Password" placeholder="Enter Your Password" required />
                </div>
                <div class="textbox">
                    <input type="password" name="ConPassword" placeholder="Confirm Your Password" required />
                </div>
                
                <button type="submit" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">Update</button>
            </div>
        </div>
    </form>

    <!-- PHP code to check for successful login and trigger SweetAlert -->
    <?php 
        // Check if the session variable 'login_status' indicates a successful login
        if(isset($_SESSION['UpdateStatus']) && $_SESSION['UpdateStatus'] === "success") {
            if(isset($_SESSION['result_role']) && $_SESSION['result_role'] === "User"){
                // Trigger SweetAlert to display a success message
                echo "<script>
                    Swal.fire({
                        title: 'User password updated',
                        text: 'Your password has been updated! You may proceed to login!',
                        icon: 'success'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Login.php'
                    } 
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['result_role']);
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['UpdateStatus']);
            }
            elseif(isset($_SESSION['result_role']) && $_SESSION['result_role'] === "Organization"){
                // Trigger SweetAlert to display a success message
                echo "<script>
                    Swal.fire({
                        title: 'Organization password updated',
                        text: 'Your password has been updated! You may proceed to login!',
                        icon: 'success'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Login.php'
                    } 
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['result_role']);
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['UpdateStatus']);
            }
            elseif(isset($_SESSION['result_role']) && $_SESSION['result_role'] === "Administration"){
                 // Trigger SweetAlert to display a success message
                 echo "<script>
                    Swal.fire({
                        title: 'Administration password updated',
                        text: 'Your password has been updated! You may proceed to login!',
                        icon: 'success'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Login.php'
                    } 
                    });
                </script>";
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['result_role']);
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['UpdateStatus']);
            }
            else{

            }
        }
        elseif(isset($_SESSION['UpdateStatus']) && $_SESSION['UpdateStatus'] === "success") {
            if(isset($_SESSION['result_role']) && $_SESSION['result_role'] === "User"){
                // Trigger iziToast notification for successful login
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                        iziToast.show({
                            title: 'Fail to update user password',
                            message: 'Error faced when updating password!',
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
                
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['result_role']);
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['UpdateStatus']);
            }
            elseif(isset($_SESSION['result_role']) && $_SESSION['result_role'] === "Organization"){
                // Trigger iziToast notification for successful login
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                        iziToast.show({
                            title: 'Fail to update organization password',
                            message: 'Error faced when updating password!',
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
                
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['result_role']);
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['UpdateStatus']);
            }
            elseif(isset($_SESSION['result_role']) && $_SESSION['result_role'] === "Administration"){
                // Trigger iziToast notification for successful login
                echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>";
                echo "<script>
                        iziToast.show({
                            title: 'Fail to update admin password',
                            message: 'Error faced when updating password!',
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
                
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['result_role']);
                // Unset the session variable after displaying the SweetAlert
                unset($_SESSION['UpdateStatus']);
            }
            else{

            }
        }
        else{

        }

    ?>
</body>

</html>
