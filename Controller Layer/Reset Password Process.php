<?php 
    session_start();

    /**
     * import database connection file 
     */
    
    include ('../Database Layer/db_connection.php');

    // Check if form handling method is POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       $password = $_POST["Password"];
       $conPass = $_POST["ConPassword"];
       $role = $_SESSION["role"];
       $email = $_SESSION["email"];

       if($password === $conPass){
            // Encrypt the password 
            $HashPassword = md5($password);
            if($role === "User"){
                $sqlCheck = "UPDATE user SET Password = '$HashPassword' WHERE Email = '$email'";

                $result = mysqli_query($con, $sqlCheck);

                if($result === true){
                    $_SESSION["UpdateStatus"] = 'success';
                    $_SESSION["result_role"] = "User";
                    header("Location: ../Reset Password.php");
                }
                else{
                    $_SESSION["UpdateStatus"] = 'failure';
                    $_SESSION["result_role"] = "User";
                    header("Location: ../Reset Password.php");
                }

            }
            elseif($role === "Organization"){
                $sqlCheck = "UPDATE organization SET OrgPassword = '$HashPassword' WHERE OrgEmail = '$email'";

                $result = mysqli_query($con, $sqlCheck);

                if($result === true){
                    $_SESSION["UpdateStatus"] = 'success';
                    $_SESSION["result_role"] = "Organization";
                    header("Location: ../Reset Password.php");
                }
                else{
                    $_SESSION["UpdateStatus"] = 'failure';
                    $_SESSION["result_role"] = "Organization";
                    header("Location: ../Reset Password.php");
                }
            }
            elseif($role === "Administration"){
                $sqlCheck = "UPDATE admin SET Password = '$HashPassword' WHERE AdminEmail = '$email'";

                $result = mysqli_query($con, $sqlCheck);

                if($result === true){
                    $_SESSION["UpdateStatus"] = 'success';
                    $_SESSION["result_role"] = "Administration";
                    header("Location: ../Reset Password.php");
                }
                else{
                    $_SESSION["UpdateStatus"] = 'failure';
                    $_SESSION["result_role"] = "Administration";
                    header("Location: ../Reset Password.php");
                }
            }
            else{
                $_SESSION["UpdateStatus"] = 'error';
                header("Location: ../Reset Password.php");
            }
       }
       else {
            echo '<script>
                alert("Invalid password match!");
                window.location.href = "../Reset Password.php";
            </script>';
       }
    }
?>