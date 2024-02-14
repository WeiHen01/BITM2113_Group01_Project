<?php 

?>

<!--=================================================================================
    Login Selection.php: A page where user can make role selection for login.
==================================================================================-->

<!------------------------------
    FRONT-END OF THE WEBPAGE
------------------------------->

<!--Telling browser using latest version of HTML documents - HTML5 -->
<!DOCTYPE html> 

    <head>
        <title>BITM2113 | Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
        <!--Important for making website responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        body{
            background-image: linear-gradient(#EFE9F4, #5078F2);
            background-repeat: no-repeat;
            background-size: cover; /* Adjusts the size of the background image to cover the entire container */
            height: 100vh;
        }
        img{
            width: 90vh;
            height: 100vh;
        }

        .column{
            width: 90vh;
            float: left;
            margin: 2vh;
            padding: 3vh;

        }
        .row .Login-selection {
            display: flex; /* Use flexbox to align items */
        }
        .role{
            flex: 1; /* Make the columns take up equal space */
            background-color: lightblue; /* Just for demonstration */
            padding: 2.4vh; /* Add padding for content */
            cursor: pointer;
            border-radius: 10px;
        }
        .selected {
            background-color: lightgreen; /* Change background color when selected */
        }
        input{
            width: 100%;
            font-family: 'Poppins';
        }
        /* CSS for flex layout */
        .flex-container {
            display: flex;
        }

        /* CSS for flex item (column) */
        .flex-item {
            flex: 1; /* Allow columns to take up equal space */
            padding: 10px;
        }

        .flex-link{
            flex: 1;
            padding: 10px;
        }
        
    
    </style>
    
    <body>
        <div class = "row">
            
            <div class = "column image">
                <img src="Assets/Image/Education01.png">
            </div>

            <div class = "column Login-container" style="background: #ffffff">

                <center><h1 style = "font-size: 8vh">Login</h1></center>

                <div class = "row Login-selection">

                    <div class = "column role Student-selection" onclick="selectRole('Student')">
                        <i class="fa-solid fa-user"></i>
                        <p>I'm a <strong>Student</strong></p>
                    </div>

                    <div class = "column role Lecturer-selection" onclick="selectRole('Lecturer')">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <p>I'm a <strong>Lecturer</strong></p>
                    </div>

                    <!-- Hidden input field to store the selected role -->
                    <input type="hidden" id="selectedRoleInput" readonly>
                </div>

                <hr>

                <div class = "login-form">
                    <form id = "student-form">
                        <input type = "text" placeholder = "Student Email">
                        <br>
                        <input type = "password" placeholder = "Student Password">
                        <br>
                        <input type = "checkbox" style = "">
                    </form>
                </div>

                <hr>

                <div class = "back-btn">
                    <center >
                        <h3 style = "cursor: pointer;" onclick="window.location.href='index.php'" >Back</h3>
                    </center>
                </div>
            </div>

            
                 
        </div>
    </body>    

</html>

<script>
    let selectedRole = null;

    function selectRole(role) {
        // Remove selected class from all options
        document.querySelectorAll('.role').forEach(function(option) {
            option.classList.remove('selected');
        });

        // Toggle selected class for the clicked option
        document.querySelector(`.role.${role}-selection`).classList.toggle('selected');

        // Update selectedRole variable
        selectedRole = role;

        // Store the selected role in the hidden input field
        document.getElementById('selectedRoleInput').value = role;
    }
</script>