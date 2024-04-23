<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>BITM2113 | Login</title>
        <meta name="description" content="">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
        <link href="./output.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Include Alpine.js -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="./Assets/Image/logo.png">
    </head>
    <style>
        body{
            background-image: url("./Assets/Image/water_bg.jpg");
            background-size: 100vw;
            background-repeat: none;
            font-family: 'Epilogue';
        }
        img{
            /* Sets the width of the image */
            width: 300px;
            
            /* Sets the height of the image */
            height: 300px;
        }
    </style>
    <body>
        <p style = "text-align: center;" class=" text-4xl font-bold p-8">Let's get started!</p>
        <div class = "flex justify-evenly">
            <div id="user-img" class= " bg-opacity-25 bg-white p-2 m-3 text-center transition-transform transform hover:scale-125">
                <div>
                    <img src="./Assets/Image/User.png" />
                    <p class="text-3xl font-bold">Normal User</p>
                </div>
            </div>
            
            <div id="user-img2" class=" bg-opacity-25 bg-white p-3 m-3 text-center transition-transform transform hover:scale-125">
                <img src="./Assets/Image/User.png" />
                <p class="text-3xl font-bold">Organization</p>
            </div>

            <div id="user-img3" class=" bg-opacity-25 bg-white pl-3 m-3 text-center transition-transform transform hover:scale-125">
                <img src="./Assets/Image/User.png" />
                <p class="text-3xl font-bold">Administration</p>
            </div>
        </div>

    </body>

    
</html>