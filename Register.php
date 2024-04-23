
<!-- Login Page -->

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>BITM2113 | Login</title>

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">
    </head>
    <style>
        body{
            background-image: url("./Assets/Image/water_bg.jpg");
            background-size: 100vw;
            background-repeat: none;
            font-family: 'Epilogue';
            height: 100vh;
            margin: 0;
        }
        #role-selection{
           display: flex;
           gap: 2px; /* Adjust as needed */
           padding: 5%;
           justify-content: space-between;
           align-items: center;
           text-align: center;
        }
        #role:hover
        #role2:hover
        #role3:hover{
            transform: scale(1.1);
            transition: 0.3s ease;
        }
        img{
            /* Sets the width of the image */
            width: 300px;
            
            /* Sets the height of the image */
            height: 300px;
        }
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <body>
        
        <h1><center>Let's get started!</center></h1>

        <br>
        
        <div id="role-selection">
            <div id="role" style="background-color: rgba(255, 255, 255, 0.5);; font-weight: 600; ">
                <img src="./Assets/Image/User.png" />
                <p class="text-3xl font-bold">Normal User</p>
            </div>

            <div id="role2" style="background-color: rgba(255, 255, 255, 0.5);; font-weight: 600; " >
                <img src="./Assets/Image/User.png" />
                <p class="text-3xl font-bold">Organization</p>
            </div>

            <div id="role3" style="background-color: rgba(255, 255, 255, 0.5);; font-weight: 600;">
                <img src="./Assets/Image/User.png" />
                <p class="text-3xl font-bold">Administration</p>
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                
                <p>Some text in the Modal..</p>
            </div>
        </div>

        

        

    </body>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("role");
        // Get the button that opens the modal
        var btn2 = document.getElementById("role2");
        // Get the button that opens the modal
        var btn3 = document.getElementById("role3");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }
        // When the user clicks on the button, open the modal
        btn2.onclick = function() {
            modal.style.display = "block";
        }
        // When the user clicks on the button, open the modal
        btn3.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    
</html>