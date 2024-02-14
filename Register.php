<?php

?>


<html>
    <head>
        <h1>Register</h1>
        <title>BITM2113 | Register</title>
    </head>

    <body>
        <hr>

        <form action = "Controller Layer/User/User Register Process.php" method = "POST">
            <label>Matric Number</label>
            <input type = "text" maxlength = 12 size = 12 name = "matricNo" required>

            <br><br>

            <label>Name</label>
            <input type = "text" maxlength = 50 size = 50 name = "studentName" required>

            <br><br>

            <label>IC Number</label>
            <input type = "text" maxlength = 12 size = 12 name = "studentIC" required>

            <br><br>

            <label>Gender</label>
            <!--Drop down menu for gender-->
            <select name = "Gender">
                <option value = "Male">Male</option>
                <option value = "Female">Female</option>
            </select>

            <br><br>

            <label>Address</label>
            <textarea maxlength = 100 size = 100 name = "Address" required></textarea>

            <br><br>

            <label>Contact</label>
            <input type = "text" maxlength = 12 name = "Contact" required>

            <br><br>

            <label>Email</label>
            <input type = "text" maxlength = 40 name = "Email" required>

            <br><br>
            
            <label>Password</label>
            <input type = "password" maxlength = 20 name = "Password" required>

            <br><br>
            <input type = "submit" value = "Sign Up">

            <input type = "button" onclick="window.location.href = 'index.php'" value = "Input Back">

            <button onclick="window.location.href = 'index.php'" value = "Back">Button Back</button>

        </form>
    </body>

</html>