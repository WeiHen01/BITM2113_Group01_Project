<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BITM2113 | Login</title>

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">

        <!-- FONT AWESOME ICON -->
        <script src="https://kit.fontawesome.com/74a2be9f6d.js" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background-image: url("./Assets/Image/water_bg_02.jpg");
            background-size: 100vw;
            max-height: 100vh;
            overflow: hidden;
            background-repeat: none;
            font-family: 'Epilogue';
            height: 100vh;
        }
        
        /* Container 21 */
        .container {
            position: absolute; 
            padding: 1%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 86vw;
            height: 84vh;
            background: #FFFFFF50; /* white */
            border-radius: 4px; /* border-m */
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
        }

        .textbox {
            position: relative;
            margin-bottom: 10px; /* Adjust as needed */
        }

       
        .textbox input {
            font-family: 'Epilogue';
            width: 41vw; 
            height: 46px;
            font-size: 14px; 
            line-height: 22px; 
            font-weight: 400; 
            background: #F3F4F6FF; /* neutral-200 */
            border-radius: 8px; /* border-xl */
            border-width: 0px; 
            outline: none; 
            padding-left: 35px; /* Adjust the padding to make space for the icon */
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
        <div class = "container">
            <h1 style="font-family: Epilogue; font-size: 50px;">Welcome back 👋</h1>
            <h3 style="font-family: Epilogue; font-size: 24px; font-weight: 400">Log in your account</h3>
            <form>
                <b>Your email</b>
                <div class = "textbox">
                    <i style = "position: absolute; left: 5px; top: 13px" class="fas fa-envelope" id="icons-1"></i> <!-- Icon for email -->
                    <input type = "text">
                </div>

                <div style = "height: 2vh"></div>

                <b>Password</b>
                <div class = "textbox">
                    <i style = "position: absolute; left: 5px; top: 13px" class="fas fa-lock" id="icons-2"></i> <!-- Icon for password -->
                    <input type = "text" name = "Password" id="passwordInput" placeholder = "Set Your Password" />
                    <i style = "position: absolute; right: 25px; top: 13px" class="fas fa-eye" id="togglePassword"></i> <!-- Toggle button for password -->
                </div>

                
            </form>
        </div>
    </body>
</html>