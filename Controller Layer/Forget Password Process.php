<?php 
    session_start();

    /**
     * import database connection file 
     */
    
    include ('../Database Layer/db_connection.php');

    // Check if form handling method is POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       $email = mysqli_real_escape_string($con, $_POST["Email"]); // Escape the email input
       $role = $_POST["Role"];

       if($role === "Normal User"){
          
          $sqlCheck = "SELECT * FROM user WHERE Email = '$email'";

          $result = mysqli_query($con, $sqlCheck);

          $count = mysqli_num_rows($result);
          
          if($count === 1){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["UserAccount"] = "Found";
            $_SESSION["role"] = "User";
            $_SESSION["email"] = $email;
            header("Location: ../Forget Password.php");
          }
          else {
            $_SESSION["UserAccount"] = "Not found";
            header("Location: ../Forget Password.php");
          }
       }
       else if ($role === "Organization"){
            $sqlCheck02 = "SELECT * FROM organization WHERE OrgEmail = '$email'";

            $result = mysqli_query($con, $sqlCheck02);

            if(mysqli_num_rows($result) === 1){
                $_SESSION["OrgAccount"] = "Found";
                $_SESSION["role"] = "Organization";
                $_SESSION["email"] = $email;
                header("Location: ../Forget Password.php");
            }
            else {
                $_SESSION["OrgAccount"] = "Not found";
                header("Location: ../Forget Password.php");
            }
       }
       else if ($role === "Administration"){
            $sqlCheck03 = "SELECT * FROM admin WHERE AdminEmail = '$email'";

            $result = mysqli_query($con, $sqlCheck03);

            if(mysqli_num_rows($result) === 1){
                $_SESSION["AdminAccount"] = "Found";
                $_SESSION["role"] = "Admin";
                $_SESSION["email"] = $email;
                header("Location: ../Forget Password.php");
            }
            else {
                $_SESSION["AdminAccount"] = "Not found";
                header("Location: ../Forget Password.php");
            }
       }
       else {
            echo '<script>
                alert("Please select role!");
                window.location.href = "../Forget Password.php";
            </script>';
       }
    }
?>