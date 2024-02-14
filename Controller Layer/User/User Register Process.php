<!--=================================================
    USER REGISTER PROCESS: Handles user register
=================================================--->
<?php 

    /**
     * import database connection file 
     */

    
    
    include ('../../Database Layer/db_connection.php');

    //-------------------------------------------------------------------


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Step 1: Obtain value for each input in the form and assign it to the variable
        $studentMatricNo = $_POST["matricNo"];
        $studentName = $_POST["studentName"];
        $studentIc = $_POST["studentIC"];
        $studentGender = $_POST["Gender"];
        $studentAddress = $_POST["Address"];
        $studentContact = $_POST["Contact"];
        $studentEmail = $_POST["Email"];
        $studentPassword = $_POST["Password"];

        $studentHashPassword = md5($studentPassword);

        // Step 2: Generate SQL Statement for registration
        $sqlRegister = "INSERT INTO student (StudentID, StudentMatricNo, StudentName,
        StudentIC, StudentAge, StudentGender, StudentAddress, StudentContact, StudentEmail, StudentPassword, StudentStatus, StudentImage)
        VALUES (0, '$studentMatricNo', '$studentName', '$studentIc', 0 , '$studentGender', '$studentAddress', '$studentContact',
        '$studentEmail', '$studentHashPassword', 'Active', '')";
        
        // Step 3: Establish Connection to database for execute SQL statement
        $sqlResult = mysqli_query($con, $sqlRegister);

        // Step 4: Checking if the insert statement is successfully executed, it will navigate back to index.php
        if($sqlResult == TRUE){
            // pop-up message for showing registration is successful
            echo "<script>
                    window.alert('Registration is successful');
                    window.location.href = '../../index.php';
                 </script>";
            
        }
        else {
            echo "<script>window.alert('Fail to register!');</script>";
        }

        /**
         * Method 1: Register using MySQLi Object Oriented
         */

        
        /**
         * Method 2: Register using MySQLi Procedural
         */


        /**
         * Method 3: Register using MySQLi PDO
         */



    }

    

?>