<!--=================================================================
        USER PROFILE PROCESS: Handles user profile operation
==================================================================-->
<?php 

    session_start();
    /**
     * Import database connection file
     */

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

                // Redirect to login.php with a URL parameter indicating successful login
            header("Location: ../../View Layer/User/User Account.php");     
        }
        else {
            $_SESSION["Update_Profile"] = "Failure";

                // Redirect to login.php with a URL parameter indicating successful login
            header("Location: ../../View Layer/User/User Account.php");  
        }
     }


     if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-password']) && isset($_GET['user'])){

        // Step 1: Getting input value and assign to the variable
        $password = md5($_POST['newPass']);

        $id = $_GET['user'];

        $sql = "UPDATE user SET `Password`='$password' WHERE UserId = '$id'";

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

     


     /**
     * ========================
     *    USER DELETE ACCOUNT
     * ========================
     */







    /**
     * ========================
     *    USER PROFILE IMAGE
     * ========================
     */

    
     

    

?>