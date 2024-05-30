<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Event</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <style>
            /* Container 23 */
            .container {
                width: 100%; 
                height: 25vh; 
                background: #4069E5FF; /* tertiary1-500 */
            }

            .container-2{
                width: 100%; 
                height: 62vh; 
                background: #ffffff; /* tertiary1-500 */
            }

            *,
            *::before,
            *::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            

            h2 {
                text-align: center;
                color: #ffffff;
                font-size: 30px;
                margin-bottom: 30px;
                padding-top: 1%;
            }

            .time-container{
                display: flex;
                justify-content: center;
            }

            .counter-container {
                width: 100px;
                height: 60px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
                background: transparent;
                border: 2px solid #ffffff;
                border-radius: 10px;
                backdrop-filter: blur(15px);
                color: #ffffff;
                margin: 0 5px;
            }

            .counter {
                display: block;
                font-size: 35px;
                font-weight: 600;
            }

            .block-container {
                width: 50vw;
                margin: 0 15%;
                height: 15vh;
                justify-content: center;
                text-align: center;
                background: transparent;
                border: 2px solid #ffffff;
                border-radius: 10px;
                backdrop-filter: blur(15px);
                color: #ffffff;
            }

            
        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>


            <div class = "container">

                <!-- <main>
                    <h2>Don't miss the upcoming events!</h2>
                    <div class="time-container">
                        <div class="counter-container">
                            <span id="days" class="counter">0</span>
                            <span>Days</span>
                        </div>
                        <div class="counter-container">
                            <span id="hours" class="counter">0</span>
                            <span>Hours</span>
                        </div>
                        <div class="counter-container">
                            <span id="minutes" class="counter">0</span>
                            <span>Minutes</span>
                        </div>
                        <div class="counter-container">
                            <span id="seconds" class="counter">0</span>
                            <span>Seconds</span>
                        </div>
                    </div>
                </main> -->

                <div style = "height: 20px"></div>

                <!-- <main>
                    <div class="block-container">
                        <h3 style = "font-size: 25px; padding: 2%">Don't miss the upcoming events!</h3>
                        <div style = "display: flex; justify-content: space-evenly">
                            <p>Location</p>
                            <p>Time</p>
                            <p>Number of participants</p>
                        </div>
                    </div>
                </main> -->
            </div>

            <div style="height: 10%"></div>

            <div class ="container-2" style = "display: flex">
                
                <div style= "width: 35vw; background-color: #6a8dc1;">
                    <div style= "height: 10vh; background-color: #6a8dc1;"></div>
                    <p style="padding: 3%"><b>Upcoming Event</b></p>
                    <p style="padding: 3%">Upcoming Event</p>
                </div>
                

                <div style = "background-color: #17a0c8; width: 100vw; height: 62vh">

                </div>
            
            </div>
        </div>


    </body>
    <script>
        const countDownDate = new Date("January 1, 2026 00:00:00").getTime();
        const days = document.getElementById("days");
        const hours = document.getElementById("hours");
        const minutes = document.getElementById("minutes");
        const seconds = document.getElementById("seconds");

        const interval = setInterval(() => {
            const now = new Date().getTime();
            const duration = countDownDate - now;
            
            if (duration < 0) {
                clearInterval(interval);
                updateDuration(0);
                return;
            }
            
            updateDuration(duration);
        }, 1000);

        function updateDuration(duration)  {
            const dayFix = Math.floor(duration / (1000 * 60 * 60 * 24));
            const hourFix = Math.floor((duration % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutesFix = Math.floor((duration % (1000 * 60 * 60)) / (1000 * 60));
            const secondsFix = Math.floor((duration % (1000 * 60)) / 1000);
            
            days.innerHTML = dayFix;
            hours.innerHTML = hourFix;
            minutes.innerHTML = minutesFix;
            seconds.innerHTML = secondsFix;
        }
    </script>
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>