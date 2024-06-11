<!--=====================================================================
    Organization Update Profile: Handles organization profile operation
=========================================================================-->
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
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-profile']) && isset($_GET['org'])){

        $id = $_GET['org'];

        // File upload handling
        $targetDirectory = "../../Assets/Profile-Image/Organization/";
        $targetFile = $targetDirectory . basename($_FILES["logo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Get the current date and time
        $currentDate = date("j F Y"); // Example: 3 January 2023
        $currentTime = date("g:i a"); // Example: 3:00 pm

        // Check if the image file is a real image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["logo"]["tmp_name"]);
            if ($check === false) {
                echo "
                    <script>alert('Sorry, this file is not an image.');</script>";
                $uploadOk = 0;
            }
        }

        // Check file size if the size is more than 20Mb(20,000,000 bytes)
        if ($_FILES["logo"]["size"] > 20000000) {
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
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFile)) {
                // Read the new image data
                $imageData = file_get_contents($targetFile);
                $imageData = mysqli_real_escape_string($con, $imageData);

                // Update the user image data
                $sqlUpdateImage = "UPDATE organization 
                                SET OrgImage = '$imageData'
                                WHERE OrgId = '$id'";
                $resultUpdateImage = $con->query($sqlUpdateImage);

                if ($resultUpdateImage) {
                    // Image data and user data updated successfully
                    $_SESSION["Update_Image"] = "Success";
                } else {
                    // Image data and user data updated successfully
                    $_SESSION["Update_Image"] = "Failure";
                }
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            }
        }

        // Step 1: Getting input value and assign to the variable
        $orgName = $_POST['OrgName'];
        $orgEmail = $_POST['OrgEmail'];
        $orgphone = $_POST['OrgContact'];
        $orgType = $_POST['OrgType'];

        $orgId = $_GET['org'];

        $sql = "UPDATE organization SET OrgName='$orgName', OrgEmail='$orgEmail', OrgContact='$orgphone', OrgType='$orgType' WHERE OrgId = '$orgId'";

        $result = mysqli_query($con, $sql);

        if ($result == TRUE) {
            $_SESSION["Update_Profile"] = "Success";
            header("Location: ../../View Layer/Organization/Org Company Profile.php");
            exit();
        } else {
            $_SESSION["Update_Profile"] = "Failure";
            header("Location: ../../View Layer/Organization/Org Company Profile.php");
            exit();
        }

        
    }

  


    

    

?>