<?php 
    session_start();

    
?>

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
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <style>
            /* Container 23 */
            .container {
                width: 100%; 
                height: 50vh; 
                background: #4069E5FF; /* tertiary1-500 */
                margin: 0;
                
            }


            #clockdiv{
                font-family: 'Poppins';
                color: #fff;
                display: inline-flex;
                font-weight: 500;
                text-align: center;
                font-size: 30px;
            }


            #clockdiv div > span{
                padding: 15px;
                border-radius: 3px;
                background: #ffffff;
                display: inline-block;
                font-family: 'Poppins';
                color: #000000;
            }

            .smalltext{
                padding-top: 5px;
                font-size: 16px;
            }

             /* Button 26 */
             button {
                font-family: 'Epilogue';
                height: 46px;
                align-items: center;
                justify-content: center;
                font-size: 16px;
                margin-top: 2%;
                line-height: 26px;
                font-weight: 400;
                opacity: 1;
                border: none;
                border-radius: 8px; /* border-xl */
                padding-left: 12px;
                padding-right: 12px;
                margin-left: 5%;
                margin-right: 5%;
            }

            button:hover {
                background-color: #0056b3; /* Example background color on hover */
                color: #f8f9fa; /* Example text color on hover */
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


            <div class = "container" style = "text-align: center; align-items: center">
                <p style = "margin: 0; padding: 2%; text-align:center; color: white; font-size: 25px"><strong>Don't miss the upcoming event!</strong></p>
                
                <div id="clockdiv" style = "justify-content: center; gap: 15%">
                    <div>
                        <span class="days"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div>
                        <span class="hours"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div>
                        <span class="minutes"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div>
                        <span class="seconds"></span>
                        <div class="smalltext">Seconds</div>
                    </div>
                </div>

                <div style = "background: #F3F4F6FF; margin-top: 1%; margin-left: 20%; margin-right: 20%; height: 15vh; gap: 5%; display: flex; align-items: center; justify-content: space-evenly; padding-left: 1%">

                    <?php 
                        require("../../Database Layer/db_connection.php");

                        $user_id = $_SESSION['user'];
                    
                        // SQL query to select upcoming event nearest from today
                        
                        $sql = "SELECT * FROM event WHERE EventId IN (
                            SELECT EventId FROM participation WHERE UserId = '$user_id' AND ParticipationStatus LIKE 'Joined'
                        ) AND DateTime >= CURDATE() ORDER BY DATEDIFF(`DateTime`, CURDATE()) LIMIT 1";
                    
                        $result = $con->query($sql);
                    
                        if ($result->num_rows > 0) {
                            // Output data of the upcoming event
                            while ($row = $result->fetch_assoc()) {
                                $deadline = $row["DateTime"];
                    ?>
                    <div style = "display: flex; gap: 15%; align-items: center; ">
                        <i class="fa-solid fa-location-dot" style="font-size: 40px"></i>
                        <div style = "align-items: start">
                            <p><strong>Location</strong></p>
                            <p class ="venue"><?php echo $row["Location"]?></p>
                        </div>
                    </div>
                    <div style = "display: flex; gap: 15%; align-items: center;">
                        <i class="fa-regular fa-clock" style="font-size: 40px"></i>
                        <div style = "align-items: start">
                            <p><strong>Time</strong></p>
                            <p class ="date"><?php echo $row["DateTime"]?></p>
                        </div>
                    </div>
                    <div style = "display: flex; gap: 10%; width: 30vw; align-items: center;">
                        <i class="fa-solid fa-users" style="font-size: 40px"></i>
                        <div style = "align-items: start">
                            <!-- Display number of participants -->
                            <?php 
                                require("../../Database Layer/db_connection.php");
                                
                                $sql01 = "SELECT COUNT(EventId) AS participationCount FROM participation WHERE EventId = '" . $row['EventId'] . "' AND ParticipationStatus = 'Joined'";
                                $result01 = mysqli_query($con, $sql01);

                                if($result01){
                                    $row01 = mysqli_fetch_assoc($result01);
                                    $count01 = $row01["participationCount"];
                            ?>
                            <p><strong>Number of participants</strong></p>
                            <p class ="time"><?php echo $count01 ?></p>
                            <?php 
                                } else {
                                    echo "Error fetching participant count";
                                }
                            ?>
                        </div>
                    </div>
                    <?php 
                            }
                        }
                    
                    ?>

                </div>
            </div>

            <div style = "display: flex;">
                <div style= "padding: 0.5%; background-color: #e5e5e5; width: 35vw; height: auto">
                    <p style="padding-left: 3%; font-size: 25px"><b>Upcoming Event</b></p>
                    <p style="padding-left: 3%; font-size: 15px; padding-bottom: 3%; font-size: 14px">Come and discover the events organised! You may join the event!</p>

                    <div class="button" id="openEditPassword" onClick = "window.location.href='All Event List.php'">
                        <button type="button" style="color: #FFFFFFFF; background: #00BDD6FF; transition: #0056b3 0.3s; width: 90%;" onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#00BDD6FF';">
                            View all events
                        </button>
                    </div>

                </div>

                <div style = "padding: 0.5%; background-color: #e5e5e5; display: flex; width: 65vw; height: 35vh; overflow-x: auto; gap: 2%">
                    
                    <?php 
                        require("../../Database Layer/db_connection.php");

                        $sql = "SELECT * FROM event ORDER BY DateTime DESC LIMIT 5";

                        $result = $con->query($sql);

                        // Check if the query returned any results
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                    
                    <div style="background: #ffffff; width: 25%; padding: 2%; cursor: pointer" onClick="window.location.href='User Event Details.php?event=<?php echo $row['EventId']; ?>'">
                        <img src="https://www.niehs.nih.gov/sites/default/files/health/assets/images/safe_water.jpg" style="height: 50%; width: 100%">
                        <b style="font-size: 20px"><?php echo $row["Name"] ?></b>
                        <p style="margin: 0; padding-top: 3%; font-size: 13px; text-overflow: ellipsis;overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><?php echo $row["Description"] ?></p>
                    </div>
                    
                    <?php
                            }
                        } else {
                            echo "No events found.";
                        }
                        $con->close();
                    ?>
                </div>
            </div>
            



        </div>


    </body>
    <script>
        function getTimeRemaining(endtime) {
            const total = Date.parse(endtime) - Date.parse(new Date());
            const seconds = Math.floor((total / 1000) % 60);
            const minutes = Math.floor((total / 1000 / 60) % 60);
            const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
            const days = Math.floor(total / (1000 * 60 * 60 * 24));
            
            return {
                total,
                days,
                hours,
                minutes,
                seconds
            };
        }

        function initializeClock(id, endtime) {
            const clock = document.getElementById(id);
            const daysSpan = clock.querySelector('.days');
            const hoursSpan = clock.querySelector('.hours');
            const minutesSpan = clock.querySelector('.minutes');
            const secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                const t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            const timeinterval = setInterval(updateClock, 1000);
        }

        // Output JavaScript code with the calculated deadline
        const deadline = new Date("<?php echo $deadline; ?>");

        initializeClock('clockdiv', deadline);
    </script>
    
    <script src="../General Components & Widget/User/User Component Script.js"></script>
</html>
<!-- //const deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000); -->