<?php 
    session_start();

    $userid = $_SESSION["LoggedUserID"];

    include("../../Database Layer/db_connection.php");

    $sqlGetUser = "SELECT * FROM student WHERE StudentID = '$userid'";

    $result = mysqli_query($con, $sqlGetUser);

    $count = mysqli_num_rows($result);

    if($count == 1){
        $rowResult = mysqli_fetch_assoc($result);

        $matricNumber = $rowResult['StudentMatricNo'];
    }


?>

<html>
    <body>
        <h3>User Edit Profile</h3>
        <hr>
        <form action = "../../Controller Layer/User/User Profile Process.php" method = "POST">
            <label>Matric Number</label>
            <input type = "text" value = "<?php echo $matricNumber ?>" name = "MatricNo">

            <br><br>

            <label>Name</label>
            <input type = "text" value = "<?php echo $rowResult['StudentName'] ?>" name = "Name">

            

            <br><br>
            <input type ="submit" value = "Update">


        </form>

        <input type = "button" value = "Back" onclick = "history.back()">
    </body>
</html>