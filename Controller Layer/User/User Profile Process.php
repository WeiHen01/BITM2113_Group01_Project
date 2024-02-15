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
     if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Step 1: Getting input value and assign to the variable
        $matric = $_POST['MatricNo'];
        $name = $_POST['Name'];

        $id = $_SESSION["LoggedUserID"];

        // Step 2: Generate SQL Statement
        $sqlUpdate = "UPDATE student SET StudentMatricNo = '$matric', 
                        StudentName = '$name'
                        WHERE StudentID = '$id'";

        // Step 3: Execute SQL Statement by establishing connection
        $result = mysqli_query($con, $sqlUpdate);

        // Step 4: Showing pop up for output of update record (whether successful / not successful)
        if($result == TRUE){
                echo "<script>window.alert('Your information is successful updated');
                        window.location.href = '../../View Layer/User/User Account.php';
                      </script>";
        }
        else {
                echo "<script>
                        window.alert('Your information is failed to be updated');
                      </script>";
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