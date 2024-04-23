
<!-- Login Page -->

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>BITM2113 | Register</title>

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">

        <!-- FONT AWESOME ICON -->
        <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>


    </head>
    <style>
        body{
            background-image: url("./Assets/Image/water_bg.jpg");
            background-size: 100vw;
            max-height: 100vh;
            overflow: hidden;
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
        #role:hover{
            transform: scale(1.1);
            transition: 0.3s ease;
        }
        #role2:hover{
            transform: scale(1.1);
            transition: 0.3s ease;
        }
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
            position: absolute; 
            top: 10%;
            bottom: 10%; 
            left: 10%;
            right: 10%; 
            width: 80%; 
            height: 80%; 
            background: #FFFFFFFF; /* white */
            border-radius: 8px; /* border-xl */
            box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
        }

        /* The Close Button */
        #close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        #close:hover{
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /** Modal: left-container */
        .image {
            position: absolute;
            top: 0px;
            left: 0px; 
            height: 80vh;
            width: 35vw;
            border-radius: 16px 0px 0px 16px; 
        }
        .text {
            position: absolute; 
            top: 50px; 
            left: 35px; 
            width: 431px; 
            height: 192px; 
            font-family: Epilogue; /* Heading */
            font-size: 32px; 
            line-height: 48px; 
            font-weight: 700; 
            color: #171A1FFF; /* neutral-900 */
        }

        /** Right-container */
        .text2 {
            position: absolute; 
            left: 36vw; 
            font-family: Epilogue; /* Heading */
            color: #171A1FFF; /* neutral-900 */
        }

       
        .textbox input {
            font-family: 'Epilogue';
            width: 42vw; 
            height: 46px;
            font-size: 14px; 
            line-height: 22px; 
            font-weight: 400; 
            background: #F3F4F6FF; /* neutral-200 */
            border-radius: 8px; /* border-xl */
            border-width: 0px; 
            outline: none; 
            padding-left: 12px;
        }
        /* hover */
        .textbox input:hover {
            font-family: 'Epilogue';
            color: #000000; /* neutral-400 */
            background: #F3F4F6FF; /* neutral-200 */
        }
        /* focused */
        .textbox input:focused {
            font-family: 'Epilogue';
            color: #000000; /* neutral-400 */
            background: #FFFFFFFF; /* white */
        }
        /* disabled */
        .textbox input:disabled {
            font-family: 'Epilogue';
            color: #000000; /* neutral-400 */
            background: #F3F4F6FF; /* neutral-200 */
        }
        .textbox :disabled + .icon, .textbox :disabled + .icon + .icon {

            font-family: 'Epilogue';
            fill: #000000; /* neutral-400 */
        }

    </style>
    <body>
        
        <h1 style = "padding-top: 3%"><center>Let's get started!</center></h1>
        <h2 style = "padding-top: 5px"><center>Are you a?</center></h2>

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
                <!--Close button -->
                <i class="fa-solid fa-xmark" style="padding: 2%" id="close"></i>

                <!-- Left container-->
                <img class="image" src="./Assets/Image/Login_photo.jpeg" />
                <div class="text">
                    <p>"Thousands have lived without love, not one without water."</p>
                </div>

                <div class="text2">
                    <p style="font-weight: 700; font-size: 32px">Sign Up</p>
                    <p style="font-size: 16px">Enter your email to sign up.</p>
                    <div class="textbox">
                        <input type = "text" placeholder = "Enter Your Email" />
                    </div>
                </div>
                
            </div>
        
        </div>

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
            var i = document.getElementById("close");

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
            i.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        

    </body>

    

    
</html>