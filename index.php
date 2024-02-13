<?php 
    session_start();

    include ("Database Layer/db_connection.php");
?>

<!--=================================================================================
    index.php: Default / Initial page of the website once accessing through browser,
               it is also the landing page of the website.

    ** To access the webpage, type "localhost/xampp"
==================================================================================-->


<!------------------------------
    FRONT-END OF THE WEBPAGE
------------------------------->

<!--Telling browser using latest version of HTML documents - HTML5 -->
<!DOCTYPE html>

    <!-- Import CSS References Stylesheets using URL Link-->
    <link rel="stylesheet" href="Index Style.css" />



    <!-- Embedded CSS style -->
    <style>

        .nav-bar{
            display: flex;
            justify-content: space-between; /* Align items to both ends */
            align-items: center;
        }
        img[id="logo"]{
            width: 60px;
            height: 60px;
        }
        .nav-href{
            float: right;
            right: 0px;
            position: absolute;
            justify-content: space-between; /* Align items to both ends */
        }
        
    </style>

    <!-- Import Javascript / JQuery References -->
    <script>

    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- FavIcon on the browser tab-->
    <link rel="icon" type="image/x-icon" href="https://png.pngtree.com/template/20190313/ourmid/pngtree-school-and-education-logo-image_67823.jpg">

    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>BITM2113 | Digital Online Learning System</title>
        
        
        
    </head>


    <!-- Body of the webpage -->
    <body>
        <main>
            <div class="big-wrapper light">
                <img src="./img/shape.png" alt="" class="shape" />

                <header>
                    <div class="container">
                        <div class="logo">
                            <img src="https://png.pngtree.com/template/20190313/ourmid/pngtree-school-and-education-logo-image_67823.jpg" alt="Logo" onclick="window.location.href='index.php'"/>
                            <h4 style="color: black" onclick="window.location.href='index.php'">Digital Online Education System</h4>
                        </div>

                        <div class="links">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Background</a></li>
                                <li><a href="#">Contact</a></li>
                                <!--"View Layer/User/User Login.php"-->
                                <li><a href="Login.php">Log in</a></li>
                                <li><a href="Register Selection.php" class="btn">Sign up</a></li>
                            </ul>
                        </div>

                        <div class="overlay"></div>

                        <div class="hamburger-menu">
                            <div class="bar"></div>
                        </div>
                    </div>
                </header>

                <div class="showcase-area">
                    <div class="container">
                        <div class="left">
                        <div class="big-title">
                            <h1>Welcome to Digital Online Learning System!</h1>
                        </div>
                        <p class="text">
                            Nowadays, education has arose into another norm or style due to pandemic 
                            which isolates students cannot learn in face-to-face. Hence, it is necessary to
                            develop this website for enabling the effectiveness for online learning system.
                        </p>
                        <div class="cta">
                            <a href="View Layer/User/User Login.php" class="btn">Get started as a student</a>
                        </div>
                        </div>

                        <div class="right">
                            <img src="https://images.pexels.com/photos/163064/play-stone-network-networked-interactive-163064.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Person Image" class="person" />
                        </div>
                    </div>
                </div>

               
            </div>
        </main>
        <!-- Sidebar / Vertical Drawer -->
                   
    </body>


    <!-- Javascript implementation -->
    <script>

    </script>


</html>


<!-- Outside Javascript implementation -->
<script>

</script>

<!-- Import Javascript / JQuery References -->


<!-- Import CSS References Stylesheets using URL Link-->