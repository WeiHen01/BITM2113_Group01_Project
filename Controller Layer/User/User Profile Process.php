<!--=================================================================
        USER PROFILE PROCESS: Handles user profile operation
==================================================================-->
<?php 

    session_start();
    /**
     * Import database connection file
     */

    // Include the database connection file
    

    include ('../../Database Layer/db_connection.php');

    //=======================================================================

    /**
     * ========================
     *    USER PERSONAL INFO
     * ========================
     */
    
    // User update personal information
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-profile']) && isset($_GET['user'])){

        // Step 1: Getting input value and assign to the variable
        $username = $_POST['Username'];
        $email = $_POST['Email'];
        $phone = $_POST['Contact'];

        $id = $_GET['user'];

        $sql = "UPDATE user SET Username='$username', `Email`='$email', `Contact`='$phone' WHERE UserId = '$id'";

        $result = mysqli_query($con, $sql);

        if($result == TRUE){
            $_SESSION["Update_Profile"] = "Success";
            $_SESSION["LoggedUserEmail"] = $email;

                // Redirect to login.php with a URL parameter indicating successful login
            header("Location: ../../View Layer/User/User Account.php");     
        }
        else {
            $_SESSION["Update_Profile"] = "Failure";

                // Redirect to login.php with a URL parameter indicating successful login
            header("Location: ../../View Layer/User/User Account.php");  
        }
    }

    // update password
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-password']) && isset($_GET['user'])){

        // Step 1: Getting input value and assign to the variable
        $password = md5($_POST['newPass']);

        $oldPassword = md5($_POST['oldPass']);

        $conPassword = md5($_POST['conPass']);

        $id = $_GET['user'];

        if($password !== $conPassword){
            echo "<script>
                alert('Not matching');
                window.location.href = '../../View Layer/User/User Account.php';
            </script>";
        }
        else {
            // validate password security
            $sqlSearch = "SELECT * FROM user WHERE UserId = $id AND Password = $oldPassword";

            $resultValid = mysqli_query($con, $sqlSearch);

            if(mysqli_num_rows($resultValid) === 1){
                $sql = "UPDATE user SET `Password`= '$password' WHERE UserId = '$id'";

                $result = mysqli_query($con, $sql);

                if($result == TRUE){
                    $_SESSION["Update_Password"] = "Success";

                        // Redirect to login.php with a URL parameter indicating successful login
                    header("Location: ../../View Layer/User/User Account.php");     
                }
                else {
                    $_SESSION["Update_Password"] = "Failure";

                        // Redirect to login.php with a URL parameter indicating successful login
                    header("Location: ../../View Layer/User/User Account.php");  
                }
            }
            else {
                echo "<script>
                    alert('Invalid password for current password. Please try again');
                    window.location.href = '../../View Layer/User/User Account.php';
                </script>";
            }
        }

    }

     /**
     * ========================
     *    USER PROFILE IMAGE
     * ========================
     */
    // Update profile image 
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-image']) && isset($_GET['user'])){

        $id = $_GET['user'];

        // File upload handling
        $targetDirectory = "../../Assets/Profile-Image/User/";
        $targetFile = $targetDirectory . basename($_FILES["newProfileImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Get the current date and time
        $currentDate = date("j F Y"); // Example: 3 January 2023
        $currentTime = date("g:i a"); // Example: 3:00 pm

        // Check if the image file is a real image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["newProfileImage"]["tmp_name"]);
            if ($check === false) {
                echo "
                    <script>alert('Sorry, this file is not an image.');</script>";
                $uploadOk = 0;
            }
        }

        // Check file size if the size is more than 20Mb(20,000,000 bytes)
        if ($_FILES["newProfileImage"]["size"] > 20000000) {
            echo "<script>
                alert('Sorry, your file is too large. Please upload less than 20Mb'); 
            </script>";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $allowedFormats = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed');</script>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file is not uploaded.'); </script>";
        } else {
            if (move_uploaded_file($_FILES["newProfileImage"]["tmp_name"], $targetFile)) {
                // Read the new image data
                $imageData = file_get_contents($targetFile);
                $imageData = mysqli_real_escape_string($con, $imageData);

                // Update the user image data
                $sqlUpdateImage = "UPDATE user 
                                SET ProfileImage = '$imageData'
                                WHERE UserId = '$id'";
                $resultUpdateImage = $con->query($sqlUpdateImage);

                if ($resultUpdateImage) {
                    // Image data and user data updated successfully
                    $_SESSION["Update_Image"] = "Success";

                        // Redirect to login.php with a URL parameter indicating successful login
                    header("Location: ../../View Layer/User/User Account.php");  
                    exit();
                } else {
                    // Image data and user data updated successfully
                    $_SESSION["Update_Image"] = "Failure";

                        // Redirect to login.php with a URL parameter indicating successful login
                    header("Location: ../../View Layer/User/User Account.php");  
                    // Handle the case when the update fails
                    //echo "Error updating image and user data: " . $con->error;
                }
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            }
        }

    }
     


     /**
     * ========================
     *    USER DELETE ACCOUNT
     * ========================
     */







   

    
     

    

?>