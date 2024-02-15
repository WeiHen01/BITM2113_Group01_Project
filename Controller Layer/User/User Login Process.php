<!--=========================================
    USER LOGIN PROCESS: Handles user login
==========================================-->
<?php 

    session_start();

    /**
     * import database connection file 
     */
    
    include ('../../Database Layer/db_connection.php');
    
    //-------------------------------------------------------------------

    // Check if form handling method is POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Step 1: Obtain value for each input in the form and assign it to a new variable

        $StudentEmail = $_POST["useremail"];
        $StudentPass = $_POST["password"];

        // converting plaintext to encrypted text using md5 encryption algorithm
        $StudentHashedPass = md5($StudentPass);

        // Step 2: Generate SQL Statement for login
        $sqlLogin = "SELECT * FROM student 
                     WHERE StudentEmail = '$StudentEmail'
                     AND StudentPassword = '$StudentHashedPass'";
        
        // Step 3: Establish connection to database for executing SQL Login
        $result = mysqli_query($con, $sqlLogin);
        
        // display the number of records retrieved based on the sql login statement
        $count = mysqli_num_rows($result);

       
        // Step 4: Check if the number of records is equal to 1, then will proceed to the home dashboard page
        // Which means the record is unique identified
        if($count === 1){
            // set a session for storing the value of student email
            $_SESSION["LoggedUserEmail"] = $StudentEmail;

            echo "<script>
                    window.alert('Successful login! Welcome!');
                    window.location.href = '../../View Layer/User/User Home.php';
                  </script>";
            
        }
        else {
            echo "<script>
                    window.alert('Invalid Email or Password! Please try login again!');
                    window.location.href = '../../View Layer/User/User Login.php';
                  </script>";
           
        }
    

        /**
         * Method 1: Login using MySQLi Object Oriented
         */

        
        /**
         * Method 2: Login using MySQLi Procedural
         */


        /**
         * Method 3: Login using MySQLi PDO
         */
    }

    

    


    

?>