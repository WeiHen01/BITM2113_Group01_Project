<?php 


    session_start();

    include ("../../Database Layer/db_connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['action']) && $_GET['action'] == 'Create'){

        $title = $_POST["Title"];
        $desc = $_POST["Description"];
        $city = $_POST["City"];
        $state = $_POST["State"];
        $country = $_POST["Country"];

        $user = $_SESSION["userID"];

        if($title == null || $desc == null || $city == null || $state == "none" || $country == null){
            $_SESSION["Submission"] = "Empty";

            // Redirect to login.php with a URL parameter indicating successful login
            header("Location: ../../View Layer/User/User Complaint.php");
        }
        else{
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
    }

    // if user choose to update the complaint (User Complaint Details.php)

    if(isset($_POST['updateComplaint']) && isset($_GET['action']) && ($_GET['action'] == 'Update') ){
        $title = $_POST["Title"];
        $desc = $_POST["Description"];
        $city = $_POST["City"];
        $state = $_POST["State"];
        $country = $_POST["Country"];
        $com_id = $_POST["id"];

        if($title == null || $desc == null || $city == null || $state == "none" || $country == null){
            $_SESSION["Submission"] = "Empty";

            // Redirect to login.php with a URL parameter indicating successful login
            echo "<script>window.location.href = '../../View Layer/User/User Complaint Details.php?complaint=$com_id'</script>";
        }
        else{
            $sqlAddComplaint = "UPDATE complain SET Title ='$title', Description='$desc',`City`='$city', State ='$state', Country ='$country' WHERE ComplainId = '$com_id'";

            $addResult = mysqli_query($con, $sqlAddComplaint);

            // Step 4: Check if the number of records is equal to 1, then will proceed to the home dashboard page
            // Which means the record is unique identified
            if($addResult == True){
                $_SESSION["UpdateComplaint"] = "Success";

                // Redirect to User Complaint Details page with complaint ID
                header("Location: ../../View Layer/User/User Complaint Details.php?complaint=$com_id");
                exit();
            }
            else{
                $_SESSION["UpdateComplaint"] = "Failure";

                // Redirect to User Complaint Details page with complaint ID
                header("Location: ../../View Layer/User/User Complaint Details.php?complaint=$com_id");
                exit();
            }
        }
    }


    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == 'Delete') {
        if (isset($_GET['complaint'])) {
            $complain = $_GET['complaint'];
            $sqlAddComplaint = "DELETE FROM complain WHERE ComplainId = '$complain'";
            $delResult = mysqli_query($con, $sqlAddComplaint);

            if($delResult === TRUE){
                $_SESSION["delStatus"] = "Success";
                // Redirect to User Complaint Details page with complaint ID
                header("Location: ../../View Layer/User/User Complaint.php");
            }
            else {
                $_SESSION["delStatus"] = "Failure";
                // Redirect to User Complaint Details page with complaint ID
                header("Location: ../../View Layer/User/User Complaint.php");
            }
        }
    }


?>