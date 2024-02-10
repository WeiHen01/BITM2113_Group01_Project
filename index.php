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
    



    <!-- Embedded CSS style -->
    <style>
        .nav-bar img{
            width: 100px;
            height: 100px
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

        <div class="nav-bar">
            
            
            <div>
                <img alt="logo" src="https://png.pngtree.com/template/20190313/ourmid/pngtree-school-and-education-logo-image_67823.jpg">
                <a href="index.php">Home</a>
                <a href="#">Credit</a>
                <a href="#">Contact</a>
                <a href="#">Login</a>
                <a href="#">Register</a>
            </div>
            
            
        </div>

    </head>


    <!-- Body of the webpage -->
    <body>
        <!-- Sidebar / Vertical Drawer -->
        

        <!-- Content -->
        <!-- Responsive Content Starts Here-->
        <h1>Welcome to Digital Online Learning System!</h1>
        <p>
            Nowadays, education has arose into another norm or style due to pandemic 
            which isolates students cannot learn in face-to-face. Hence, it is necessary to
            develop this website for enabling the effectiveness for online learning system.
        </p>
        <img alt="education background" 
        src="https://images.pexels.com/photos/163064/play-stone-network-networked-interactive-163064.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
        

        <br><br>

        <p>Are you a ?</p>
        <table>
            <tr>
                <td>Student</td>
                <td>Lecturer</td>
            </tr>
        </table>
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