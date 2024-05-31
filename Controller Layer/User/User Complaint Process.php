<?php 


    session_start();

    include ("../../Database Layer/db_connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $title = $_POST["Title"];
        $desc = $_POST["Description"];
        $city = $_POST["City"];
        $state = $_POST["State"];
        $country = $_POST["Country"];

        $user = $_SESSION["userID"];

        $sqlAddComplaint = "INSERT INTO `complain`(`ComplainId`, `Title`, `Description`, `DateTime`, `City`, `State`, `Country`, `Status`, `UserId`) VALUES (0,'$title','$desc',NOW(),'$city','$state','$country','Incomplete','$user')";

        $addResult = mysqli_query($con, $sqlAddComplaint);

        // Step 4: Check if the number of records is equal to 1, then will proceed to the home dashboard page
        // Which means the record is unique identified
        if($addResult == True){
            $_SESSION["Submission"] = "Success";

            // Redirect to login.php with a URL parameter indicating successful login
            header("Location: ../../View Layer/User/User Complaint.php");
        }
        else{
            $_SESSION["Submission"] = "Failure";

            // Redirect to login.php with a URL parameter indicating successful login
            header("Location: ../../../../View Layer/User/User Complaint.php");
        }
    }


?>