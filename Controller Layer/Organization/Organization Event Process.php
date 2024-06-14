<!--=================================================
   To add new event that are hosted by their company
=================================================--->
<?php 

    /**
     * import database connection file 
     */
    include ('../../Database Layer/db_connection.php');

    //-------------------------------------------------------------------

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit-event'])){

        // Step 1: Obtain value for each input in the form and assign it to the variable
        
        $name = $_POST["name"];
        $description = $_POST["description"];
        $dateTime = $_POST["dateTime"];
        $location = $_POST["location"];
        $category = $_POST["category"];
        //$orgId = $_POST["OrgId "];
        $orgId = 3;
        // Step 2: Generate SQL Statement for registration
        $sqlAddNewEvent = "INSERT INTO `event`(`Name`, `Description`, `DateTime`, `Location`, `Category`, `Status`, `OrgId`) 
        VALUES ('$name','$description','$dateTime','$location','$category', 'Ongoing', '$orgId')";
            
        // Step 3: Establish Connection to database for execute SQL statement
        $sqlResult = mysqli_query($con, $sqlAddNewEvent);

        // Step 4: Checking if the insert statement is successfully executed, it will navigate back to index.php
        if($sqlResult == TRUE){
            // pop-up message for showing registration is successful
            echo "<script>
                window.alert('Add new Event Successsful');
                window.location.href = '../../View Layer/Organization/Org Home.php';
            </script>";
                
        }
        else {
            echo "<script>window.alert('Fail to add event!');</script>";
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-event'])){
        // Step 1: Obtain value for each input in the form and assign it to the variable
        
        $name = mysqli_real_escape_string($con, $_POST["newEventName"]);
        $description = mysqli_real_escape_string($con, $_POST["newEventDescription"]);
        $dateTime = mysqli_real_escape_string($con, $_POST["DateTime"]);
        $location = mysqli_real_escape_string($con, $_POST["newEventLocation"]);
        $category = mysqli_real_escape_string($con, $_POST["newEventCategory"]);
        $status = mysqli_real_escape_string($con, $_POST["EventStatus"]);
        $id = mysqli_real_escape_string($con, $_POST["eventID"]);

        
        //$orgId = $_POST["OrgId "];
        
        $sqlUpdate = "UPDATE event SET Name='$name', Description='$description', DateTime= '$dateTime', Location= '$location',Category='$category', Status='$status' WHERE `EventId`='$id'";
            
        // Step 3: Establish Connection to database for execute SQL statement
        $sqlResult = mysqli_query($con, $sqlUpdate);

        // Step 4: Checking if the insert statement is successfully executed, it will navigate back to index.php
        if($sqlResult == TRUE){
            // pop-up message for showing registration is successful
            echo "<script>
                window.alert('Update new Event Successsful');
                window.location.href = '../../View Layer/Organization/Org Home.php';
            </script>";
                
        }
        else {
            echo "<script>window.alert('Fail to update event!');</script>";
        }
    }


    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete-event'])){
        $id = mysqli_real_escape_string($con, $_POST["eventID"]);

        //$orgId = $_POST["OrgId "];
        
        $sqlUpdate = "DELETE FROM `event` WHERE  `EventId`='$id'";
            
        // Step 3: Establish Connection to database for execute SQL statement
        $sqlResult = mysqli_query($con, $sqlUpdate);

        // Step 4: Checking if the insert statement is successfully executed, it will navigate back to index.php
        if($sqlResult == TRUE){
            // pop-up message for showing registration is successful
            echo "<script>
                window.alert('Delete the Event Successsfully');
                window.location.href = '../../View Layer/Organization/Org Home.php';
            </script>";
                
        }
        else {
            echo "<script>window.alert('Fail to delete event!');</script>";
        }
    }

    

?>