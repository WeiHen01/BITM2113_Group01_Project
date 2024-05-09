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
        

        /* Textbox 7 */
        .textbox {
            position: absolute; 
            left: 1%; 
            display: flex;
            flex-direction: column;
        }

        .textbox input {
            width: 35vw; 
            height: 7vh;
            padding-left: 44px; 
            padding-right: 16px; 
            font-family: Inter; 
            font-size: 16px; 
            line-height: 26px; 
            font-weight: 400; 
            background: #F3F4F6FF; /* neutral-200 */
            border-radius: 8px; /* border-xl */
            border-width: 0px; 
            outline: none; 
        }

        

    </style>
    <body>
        <div class = "container">
            <h1 style="font-family: Epilogue; font-size: 50px;">Welcome back 👋</h1>
            <h3 style="font-family: Epilogue; font-size: 24px; font-weight: 400">Log in your account</h3>
            <form>
                <div class = "textbox">
                    <b>Your email</b>
                    <input type = "text">
                </div>

                <div style = "height: 15%"></div> 

                <div class = "textbox">
                    <b>Password</b>
                    <input type = "text">
                </div>

                
            </form>
        </div>
    </body>
</html>