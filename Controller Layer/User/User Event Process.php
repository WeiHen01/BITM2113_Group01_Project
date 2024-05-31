<?php 
    require("../../Database Layer/db_connection.php");


    /**
     * event details
     * 1. first time, user join the event => no results yet in database => insert record of participation
     * 2. if user want to cancel the event => search the current participation record, then delete the record
     */
    if(isset($_GET["participate"]) && isset($_GET["event"]) && isset($_GET["user"])){
        $userSelected = $_GET["user"];
        if($_GET["participate"] == "Join"){
            $event = $_GET["event"];
            $user = $_GET['user'];
            
            // validation if user already joined this event
            $sqlCheck = "SELECT * FROM participation WHERE EventId = $event AND UserId = $userSelected AND ParticipationStatus = 'Joined'";

            $resultCheck = mysqli_query($con, $sqlCheck);

            if(mysqli_num_rows($resultCheck) === 1){
                
                echo "<script>
                    alert('You have already participated once!');
                    window.location.href = '../../View Layer/User/User Event Details.php?event=$event'
                </script>";

            }
            else {
                $sql = "INSERT INTO participation(`EventId`, `UserId`, `ParticipationDateTime`, `ParticipationStatus`) VALUES ('$event', '$userSelected', NOW(), 'Joined') ";

                $result = mysqli_query($con, $sql);

                if($addResult == True){
                    $_SESSION["Participation"] = "Success";

                    echo "<script>
                        alert('Joining process done');
                    </script>";

                    // Redirect to login.php with a URL parameter indicating successful login
                    header("Location: ../../View Layer/User/User Event Details.php?event=$event");
                }
                else {
                    $_SESSION["Participation"] = "Failure";

                    echo "<script>
                        alert('Joining process fail!');
                    </script>";

                    // Redirect to login.php with a URL parameter indicating successful login
                    header("Location: ../../View Layer/User/User Event Details.php?event=$event");
                }
            }

            
        }
        
        if($_GET["participate"] == "Cancel"){
            $event = $_GET["event"];
            $user = $_SESSION['user'];
            
            // validation if user already joined this event
            $sqlDel = "DELETE FROM participation WHERE EventId = '$event' AND UserId = '$userSelected' AND ParticipationStatus = 'Joined'";

            $resultDel = mysqli_query($con, $sqlDel);

            if($resultDel == true){
                
                $_SESSION["CancelJoin"] = "Success";

                echo "<script>
                    alert('Cancel process done');
                </script>";

                // Redirect to login.php with a URL parameter indicating successful login
                header("Location: ../../View Layer/User/User Event Details.php?event=$event");

            }
            else {
                $_SESSION["CancelJoin"] = "Failure";

                echo "<script>
                    alert('Cancel process incomplete!');
                    window.location.href = '../../View Layer/User/User Event Details.php?event=$event'
                </script>";

                // Redirect to login.php with a URL parameter indicating successful login
                header("Location: ../../View Layer/User/User Event Details.php?event=$event");

                
            }

            
        } 
        

    }
?>