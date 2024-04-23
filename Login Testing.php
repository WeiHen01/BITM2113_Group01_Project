<?php 


?>


<html>
    <!-- Title of the browser tab -->
    <title>BITM2113 | Login</title>

    <head>
        <h1>Login</h1>
    </head>

    <body>
        <h4>Welcome user! Please login!</h4>

        <!-- Login form -->
        <form id = "user-form" action = "Controller Layer/User/User Login Process.php" method = "POST">
            <label>Email: </label>
            <input type = "text" placeholder = "Your email" name = "Email">

            <br><br>

            <label>Password: </label>
            <input type = "password" placeholder = "Your password" name = "Password">

            <br><br>

            <a href = "Forget Password.php">Forget your password?</a>

            <br><br>

            <!-- Button -->
            <input type = "submit" value = "Login">


            <a href = "Register.php">Register now</a>

        </form>
    </body>
</html>