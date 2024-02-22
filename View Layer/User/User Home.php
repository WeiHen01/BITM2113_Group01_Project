<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

?>

<!--========================================================
    User Home.php: User Home page after successful login
==========================================================-->

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
        <title>User | Home</title>

    </head>


    <!-- Body of the webpage -->
    <body>

        <!-- Horizontal Navigation bar -->
        <h3>Home Page</h3>
        <p>Welcome! <?php echo $loggedUserEmail ?></p>

        <a href = "User Account.php">Go to your account</a>

        <!-- Display the list -->
        <table>
            <!-- Table Header -->
            <th>Matric Number</th>
            <th>Name</th>

            <!-- Functionality to retrieve a list based on condition -->
            <?php 
                // Step 1: Import database connection file
                include ("../../Database Layer/db_connection.php");

                // Step 2: Generate SQL statement: object-oriented
                // $con : refer to database connection variable
                $sqlList = $con -> prepare("SELECT * from student");

                // Step 3: Execute SQL Statement
                $sqlList -> execute();

                // Step 4: Obtain the result
                $result = $sqlList -> get_result();

                // Step 5: Close the connection
                $sqlList -> close();
            ?>

            <!-- Table content -->
            <!-- Display the records retrieved -->
            <?php while ($row = $result -> fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row["StudentMatricNo"]; ?></td>
                    <td><?php echo $row["StudentName"]; ?></td>
                </tr>
            <?php } ?>
        </table>

        <!-- Step 1: Log out button -->
        <button onclick = "confirmLogout()">Log out</button>

    </body>


    <!-- Javascript implementation -->
    <script>
        // Step 2: Implement navigate to Log out process.php function
        function confirmLogout(){
            // pop up confirm dialog for asking confirmation to log out
            if(window.confirm("Do you sure to log out?") == true){
                window.location.href = '../../Controller Layer/User/User Logout Process.php';
            }
        }
    </script>


</html>