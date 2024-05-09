<!--=================================================
    REGISTER PROCESS: Handles register
=================================================--->
<?php 

    /**
     * import database connection file 
     */

    
    
    include ('../Database Layer/db_connection.php');

    //-------------------------------------------------------------------


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Step 1: Obtain value for each input in the form and assign it to the variable
        
        $email = $_POST["Email"];
        $input_password = $_POST["Password"];
        $role = $_POST["selectedRole"];
        
        // Encrypt the password 
        $password = md5($input_password);

        // Execute SQL based on role selection
        if($role == "Normal User"){
            // Step 2: Generate SQL Statement for registration
            $sqlRegister = "INSERT INTO user (`UserId`, `Username`, `Email`, `Password`, `Contact`, `ProfileImage`, `Status`)
            VALUES (0, '', '$email', '$password', '', '', 'Registered' )";
            
            // Step 3: Establish Connection to database for execute SQL statement
            $sqlResult = mysqli_query($con, $sqlRegister);

            // Step 4: Checking if the insert statement is successfully executed, it will navigate back to index.php
            if($sqlResult == TRUE){
                // pop-up message for showing registration is successful
                echo "<script>
                    window.alert('User Registration is successful');
                    window.location.href = '../../index.php';
                </script>";
                
            }
            else {
                echo "<script>window.alert('Fail to register!');</script>";
            }
        }
        else if($role == "Organization"){
            // Step 2: Generate SQL Statement for registration
            $sqlRegister = "INSERT INTO organization(`OrgId`, `OrgName`, `OrgEmail`, `OrgType`, `OrgPassword`, `OrgContact`, `OrgStatus`, `OrgImage`) VALUES (0,'','$email','','$password','','Registered','')";
            
            // Step 3: Establish Connection to database for execute SQL statement
            $sqlResult = mysqli_query($con, $sqlRegister);

            // Step 4: Checking if the insert statement is successfully executed, it will navigate back to index.php
            if($sqlResult == TRUE){
                // pop-up message for showing registration is successful
                echo "<script>
                    window.alert('Organization Registration is successful');
                    window.location.href = '../../index.php';
                </script>";
                
            }
            else {
                echo "<script>window.alert('Fail to register!');</script>";
            }
        }
        else {
            // Step 2: Generate SQL Statement for registration
            $sqlRegister = "INSERT INTO admin(`AdminId`, `AdminName`, `AdminEmail`, `AdminPassword`, `AdminContact`, `ProfileImage`) VALUES (0,'','$email','$password','','')";
            
            // Step 3: Establish Connection to database for execute SQL statement
            $sqlResult = mysqli_query($con, $sqlRegister);

            // Step 4: Checking if the insert statement is successfully executed, it will navigate back to index.php
            if($sqlResult == TRUE){
                // pop-up message for showing registration is successful
                echo "<script>
                    window.alert('Admin Registration is successful');
                    window.location.href = '../../index.php';
                </script>";
                
            }
            else {
                echo "<script>window.alert('Fail to register!');</script>";
            }
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