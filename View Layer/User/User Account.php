<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    session_start();

    // Establish connection to database
    include ("../../Database Layer/db_connection.php");

    // variables saved in the session - like SharedPreferences in Flutter
    $useremail = $_SESSION["LoggedUserEmail"];

    /**
     * Process of finding user information based on user email
     */

    // Step 1: Generate SQL Statement
    $sqlGetUser = $con -> prepare("SELECT * FROM student WHERE StudentEmail = ?");
    
    // Step 2: Filling in the parameter (?) in sqlStatement
    $sqlGetUser -> bind_param("s", $useremail);

    // Step 3: Execute the sql query
    $sqlGetUser -> execute();

    // Step 4: Obtain the result
    $result = $sqlGetUser -> get_result();

    // Step 5: Checking if the result retrieved is the only one record 
    if($result -> num_rows == 1){

        // Step 6: Fetch the data in associative array
        $rowResult = $result -> fetch_assoc();

        // Step 7: Getting certain attribute's value from the row / result retrieved
        $username = $rowResult['StudentName'];
        $usergender = $rowResult['StudentGender'];
        $userId = $rowResult['StudentID'];

        // Assign the user id fetched to a new session
        $_SESSION['LoggedUserID'] = $userId;
    }

?>

<!--=========================================================================
   User Account.php: User account that contains all personal information
==========================================================================-->
<!--
    Features provided in this page:
    1. Vertical drawer
    2. Horizontal Navigation bar
    3. Notification using Javascript integration
    4. Page Navigation
-->

<!DOCTYPE html>

    <!-- Import CSS References Stylesheets using URL Link-->



    <!-- Embedded CSS style -->
    <style>

    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>User | Account</title>

    </head>


    <!-- Body of the webpage -->
    <body>

        <!-- Horizontal Navigation bar -->
        

        <!-- Left Vertical Sidebar / Drawer -->
        


        <p>Welcome! <?php echo $username ?></p>
        <p>Gender: <?php echo $usergender ?></p>

        <hr>
        <!-- Step 1: Do update security to prevent unauthorised update -->
        <button onclick = "updateSecurity()">Edit Profile</button>
        
    </body>


    <!-- Javascript implementation -->
    <script>
        // Step 2: Implement JS Function to request user for input current user password
        function updateSecurity(){
            var userCurrPassword = window.prompt("Please enter your current password: ");

            // Step 3: Construct the URL with query parameter for passing javascript variable to php variable
            var url = "../../Controller Layer/User/User Update Account Security.php?userInput=" 
                        + encodeURIComponent(userCurrPassword);

            // Step 4: Redirect to the PHP script
            window.location.href = url;
        }
    </script>


</html>