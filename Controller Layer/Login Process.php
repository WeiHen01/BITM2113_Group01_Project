<!--=========================================
    LOGIN PROCESS: Handles login
==========================================-->
<?php 

    session_start();

    /**
     * import database connection file 
     */
    
    include ('../Database Layer/db_connection.php');
    
    //-------------------------------------------------------------------

    // Check if form handling method is POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Step 1: Obtain value for each input in the form and assign it to a new variable

        $UserEmail = $_POST["Email"];
        $UserPassword = $_POST["Password"];
        $role = $_POST["Role"];

        echo $role;

        // Encrypt the password 
        $password = md5($UserPassword);

        if($role === "Normal User"){
           // Step 2: Generate SQL Statement for login
            $sqlLogin = "SELECT * FROM user 
            WHERE Email = '$UserEmail'
            AND Password = '$password'";

            // Step 3: Establish connection to database for executing SQL Login
            $result = mysqli_query($con, $sqlLogin);

            // display the number of records retrieved based on the sql login statement
            $count = mysqli_num_rows($result);


            // Step 4: Check if the number of records is equal to 1, then will proceed to the home dashboard page
            // Which means the record is unique identified
            if($count === 1){
            // set a session for storing the value of student email
            $_SESSION["LoggedUserEmail"] = $UserEmail;

            echo "<script>
                window.alert('Successful login as User! Welcome!');
            
                </script>";

            }
            else {
                echo "<script>
                    window.alert('Invalid Email or Password for user! Please try login again!');
                
                    </script>";

            } 
        }
        else if($role === "Organization"){
            // Step 2: Generate SQL Statement for login
            $sqlLogin = "SELECT * FROM organization 
            WHERE OrgEmail = '$UserEmail'
            AND OrgPassword = '$password'";

            // Step 3: Establish connection to database for executing SQL Login
            $result = mysqli_query($con, $sqlLogin);

            // display the number of records retrieved based on the sql login statement
            $count = mysqli_num_rows($result);


            // Step 4: Check if the number of records is equal to 1, then will proceed to the home dashboard page
            // Which means the record is unique identified
            if($count === 1){
                // set a session for storing the value of student email
                $_SESSION["LoggedUserEmail"] = $UserEmail;

                echo "<script>window.alert('Successful login as Organization! Welcome!');window.location.href = '../Login.php';</script>";

            }
            else {
                echo "<script>
                    window.alert('Invalid Email or Password for organization! Please try login again!');
                
                    </script>";

            } 
        }
        else{
            // Step 2: Generate SQL Statement for login
            $sqlLogin = "SELECT * FROM admin 
            WHERE AdminEmail = '$UserEmail'
            AND AdminPassword = '$password'";

            // Step 3: Establish connection to database for executing SQL Login
            $result = mysqli_query($con, $sqlLogin);

            // display the number of records retrieved based on the sql login statement
            $count = mysqli_num_rows($result);


            // Step 4: Check if the number of records is equal to 1, then will proceed to the home dashboard page
            // Which means the record is unique identified
            if($count === 1){
                // set a session for storing the value of student email
                $_SESSION["LoggedUserEmail"] = $UserEmail;

                echo "<script>window.alert('Successful login as Administration! Welcome!');</script>";

            }
            else {
                echo "<script>
                    window.alert('Invalid Email or Password for Administration! Please try login again!');
                
                    </script>";

            } 
        }
    }

?>