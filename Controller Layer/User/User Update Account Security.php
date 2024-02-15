<?php 

    session_start();

    // Step 5: Get the value passed from previous page and assign it to a new variable in PHP
    $userpassword = $_GET["userInput"];

    $userHashPassword = md5($userpassword);

    $userId = $_SESSION["LoggedUserID"];

    // Step 5.5: Establish database connection
    include ("../../Database Layer/db_connection.php");

    // Step 6: Validate the password based on SQL
    $sqlCheckPassword = "SELECT * FROM student
                         WHERE StudentID = '$userId'
                         AND StudentPassword = '$userHashPassword'";

    // Step 7: Execute the statement
    $result = mysqli_query($con, $sqlCheckPassword);

    // Step 8: Get the number of rows retrieved
    $count = mysqli_num_rows($result);



    // Step 9: If only one unique result, allow to update the profile
    if($count == 1){
        echo "<script>
                    window.alert('You may proceed to update!');
                    window.location.href = '../../View Layer/User/User Edit Account.php';
            </script>";
    }
    else {
        echo "<script>
                window.alert('Invalid password');
                window.location.href = '../../View Layer/User/User Account.php';
        </script>"; 
    }



?>