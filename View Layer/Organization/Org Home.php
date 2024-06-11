<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $loggedUserEmail = $_SESSION["LoggedUserEmail"];

?>

<!DOCTYPE html>

    <!-- Import CSS References Stylesheets using URL Link-->



    <!-- Embedded CSS style -->
    <style>

    </style>


    <!-- FavIcon on the browser tab-->


    <!-- Head of the webpage -->
    <head>

        <!-- Title of the tab -->
        <title>Organization | Home</title>
        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/Organization/Org Component Style.css">
    </head>

    <style>
        /* Big Container */
        .container {
            background: #FFFFFFFF; /* white */
            border-radius: 4px; /* border-m */
            border-width: 1px; 
            border-color: #565E6CFF; /* neutral-600 */
            border-style: solid; 
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            padding: 2%;
            cursor: pointer;
            margin: 1%;
        }

        .group {
            flex-direction: column;
            align-items: center;
        }

        /* Image 36 */
        .image {
            width: 100%; 
            height: 10%; 
            top: 60%;
            border-radius: 8px; /* border-xl */
            box-shadow: 0px 8px 17px #171a1f, 0px 0px 2px #171a1f; /* shadow-l */
            background-color: #ccc; /* Placeholder for the image */
        }

                /* Image 60 */
        .sub-image {
            position: absolute; 
            top: 40px; 
            left: 32px; 
            width: 240px; 
            height: 218px; 
            border-radius: 20px; 
        }

        .text {
            font-family: 'Epilogue'; 
            font-size: 1.5em; 
            line-height: 1.5em; 
            font-weight: 700; 
            color: #171A1FFF; /* neutral-900 */
            text-align: center;
            margin-top: 2%;
        }

        .sub-text {
            font-family: 'Epilogue'; 
            font-size: 14px; 
            line-height: 22px; 
            font-weight: 400; 
            top: 279px; 
            width: 184px; 
            height: 25px; 
            text-align: center;
            color: #FFFFFFFF; /* white */
        }

        /* Container 47 */
        .sub-container {
            width: 100%; 
            height: 8%; 
            background: #DEE1E6FF; /* neutral-300 */
            border-radius: 4px; /* border-m */
            box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Epilogue'; 
        }

        /* Rectangle 16 */
        .rectangle {
            position: absolute; 
            top: 15%; 
            /*left: 5%;*/ 
            width: 304px; 
            height: 400px; 
            background: #4069E5DE; /* tertiary1-500 */
            border-radius: 20px; 
        }

        .sub-container-text {
            font-family: 'Epilogue'; 
            font-size: 1.2em; 
            line-height: 1.2em; 
            font-weight: 500; 
            color: #171A1FFF; /* neutral-900 */
        }

        /* Home 1 */
        .icon {
            position: absolute; 
            top: 120px; 
            left: 38px; 
            width: 24px; 
            height: 24px; 
            fill: #9095A0FF; /* neutral-500 */
        }

          /* Popup container */
        .popup-container {
            display: none; /* Hidden by default */
            position: absolute; 
            top: 15%; 
            left: 214px; 
            width: 70%; 
            height: 80vh; 
            background: #DEE1E6FF; /* neutral-300 */
            border-radius: 15px; /* border-xl */
            box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
            z-index: 1000;
        }
        /* Group 26 inside Popup container */
        .popup-group {
            position: absolute; 
            width: 25%; 
            height: 70%; 
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Epilogue'; 
        }

        /* Button inside Popup container */
        .popup-button {
            margin-top: 20px;
            padding: 10px 20px;
            width: 138px; 
            height: 41px; 
            background-color: #FFFFFFFF;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Epilogue'; 
        }

        /* Overlay */
        .overlay {
            position: fixed; 
            top: 0px; 
            left: 0px; 
            width: 100%; 
            height: 100%; 
            background: #171A1F66; /* neutral-900 */
            border-radius: 0px; 
            z-index: 999; /* Ensure it's above other elements */
        }
        /* Popup container for adding a new event */
        #newEventPopupContainer {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%; 
            height: 90%;
            background: #DEE1E6FF; /* neutral-300 */
            border-radius: 15px; /* border-xl */
            box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
            z-index: 1001; /* Ensure it's above other elements */
            padding: 2%;
            display: none; /* Hidden by default */
        }

        /* Overlay for new event popup container */
        #overlayNewEventPopup {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background: #171A1F66; /* neutral-900 */
            border-radius: 0px;
            z-index: 1000; /* Ensure it's above other elements */
            display: none; /* Hidden by default */
        }
        .popup-container-2 {
            position: fixed; 
            display: none; /* Hidden by default */
            position: absolute; 
            top: 15%; 
            left: 250px; 
            width: 70%; 
            height: 85vh; 
            background: #DEE1E6FF; /* neutral-300 */
            border-radius: 15px; /* border-xl */
            box-shadow: 0px 17px 35px #171a1f, 0px 0px 2px #171a1f; /* shadow-xl */
            z-index: 1002;
        }

        .popup-content {
            padding-left: 2%;
            padding-top: 1%;
            width: 92%; 
        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .button-1 {
            width: 35%; 
            height: 52px; 
            padding: 0 20px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-family: Inter; 
            font-size: 18px; 
            line-height: 28px; 
            font-weight: 400; 
            color: #00BDD6FF; /* primary-500 */
            background: #00000000; /* transparent */
            opacity: 1; 
            border-radius: 8px; /* border-xl */
            border-width: 1px; 
            border-color: #00BDD6FF; /* primary-500 */
            border-style: solid; 
        }
        /* Hover */
        .button-1:hover {
            color: #00A9C0FF; /* primary-550 */
            background: #00000000; /* transparent */
        }
        /* Pressed */
        .button-1:hover:active {
            color: #0095A9FF; /* primary-600 */
            background: #00000000; /* transparent */
        }
        /* Disabled */
        .button-1:disabled {
            opacity: 0.4; 
        }
        /* Button 139 */
        .button-add { 
        width: 203px; 
        height: 36px; 
        padding: 0 12px; 
        align-items: center; 
        justify-content: center; 
        font-family: Inter; 
        font-size: 14px; 
        line-height: 22px; 
        font-weight: 400; 
        color: #171A1FFF; /* neutral-900 */
        background: #E0585873; /* tertiary3-500 */
        opacity: 1; 
        border: none; 
        border-radius: 4px; /* border-m */
        }
        
    </style>


    <!-- Body of the webpage -->
    <body>
        
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/Organization/Org Sidebar.php");
        ?>

        <!-- Body --> 

        <div id="contentArea">
            
            <!-- Header -->
            <?php 
                include("../General Components & Widget/Organization/Org Header.php");
            ?>

            <!-- Content here -->

            <!-- Group 2 -->
            <div style="display: flex;">
                <div class="text" style="padding-left: 2%">Upcoming Events </div>
                <div style="width: 65%;"></div>
                <div class="group" onclick="showAddEventPopUP()"> 
                    
                    <button class="button-add" onclick="showAddNewEvent()" style="margin: 15px; cursor: pointer; display: flex; gap: 2%">
                        <i class="fa-solid fa-plus"></i> Add New Event
                    </button>
                </div>
            </div>
            <div class="container-wrapper" style="display: flex; flex-wrap: wrap;">
                <?php
                    // Include the database connection file
                    include('../../Database Layer/db_connection.php');

                    // Query to fetch all data from the events table
                    $sql = "SELECT * FROM event";
                    $result = mysqli_query($con, $sql);

                    // Check if there are any events
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                        // Output HTML for each event
                ?>
                    <div class="container" style="width: 25%; margin: 2%">
                        <div style="display: flex;">
                            <div class="text"><?php echo $row['Name']; ?></div> 
                            <div class="group" onclick="showPopup('<?php echo $row['EventId']; ?>', '<?php echo $row['Name']; ?>', '<?php echo addslashes($row['Description']); ?>', '<?php echo $row['Location']; ?>', '<?php echo addslashes($row['Category']); ?>', '<?php echo addslashes($row['DateTime']); ?>')" style="margin-left: 50px; margin-top:4%; cursor: pointer; display: flex; "> 
                                <i class="fa-solid fa-pencil" style="font-size:25px;" id="editEventBtn"></i>                              
                            </div>
                        </div>
                        <img src="../../Assets/Image/event_details.jpg" style="width: 100%; height: 30%; border-radius: 5%;" alt="Event Image">
                        <div class="sub-container" style="padding: 7%">
                            <div class="sub-container-text" ><?php echo $row['Description']; ?></div>
                        </div>
                        <div class="sub-container" style="padding: 7%">
                            <div class="sub-container-text"><?php echo $row['Location']; ?></div>
                        </div>
                        <button class="button-1" onClick="window.location.href='Org Event Detail.php?event=<?php echo $row['EventId']; ?>'"
                            onmouseover="this.style.background='#00bcd4'; 
                            this.style.color = '#ffffff'" onmouseleave="this.style.color='#00bcd4'; 
                            this.style.background = 'transparent'">More
                        </button>
                    </div>
                <?php
                    }
                } else {
                    // If no events found, display a message or handle it accordingly
                    echo "<p>No events found.</p>";
                }
                ?>
            </div>
            
            <div class="overlay" id="overlay" style="display:none;" onclick="hidePopup()"></div>

            <!-- Popup container for adding a new event -->
            <div class="popup-container" id="newEventPopupContainer" style="display: none; padding: 20px;
                background: white; border-radius: 8px;">
                <div style = "display: flex">
                    <div style="background-image: url('../../Assets/Image/Org New Event.png'); 
                        padding: 20px; border-radius: 8px; width: 30%; background-size: cover; background-position: center;">
                        <h2 style="writing-mode: vertical-rl; text-align: center; 
                        font-size: 80px;  padding: 50px; transform: rotate(180deg); margin: 0;">New Event</h2>
                    </div>

                    <div style="flex-grow: 1; padding: 20px;">
                        <form id="newEventForm" method="POST" action="../../Controller Layer/Organization/add_event.php">
                        <!-- Event Title -->
                            <h3>Please enter details for new event:</h3>
                            <!-- Event Name -->
                            <input type="text" id="newEventName" name="name" placeholder="name" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: 'Epilogue'; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;">
                            <!-- Event Description -->
                            <textarea id="newEventDescription" name="description" placeholder="description" rows="4" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: 'Epilogue'; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;"></textarea>
                            <!-- Event Location -->
                            <textarea id="newEventLocation" name="location" placeholder="location" rows="4" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: 'Epilogue'; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;"></textarea>
                            <!-- Event Category -->
                            <input type="text" id="category" name="category" placeholder="Category" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: Inter; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;">
                            Select date and time: 
                            <input name="dateTime" type="datetime-local"/>
                            <!-- Button to submit event --> 
                            <button class="popup-button" onclick="submitNewEvent()" style="width: 100%; padding: 10px; background-color: #2979FF; color: white; font-family: 'Epilogue'; font-size: 16px; line-height: 24px; border: none; border-radius: 4px;">Add New Event</button></div>
                        </form>
                        <div style="padding: 20px; border-radius: 8px; width: 40%;">
                            <div style = "justify-content: end; width: 100%;">
                                <i class="fa-solid fa-xmark" onclick="hidePopup()" style="font-size: xx-large; cursor: pointer"  ></i>
                                <div style="background-image: url('../../Assets/Image/Org2.png'); padding: 80px; border-radius: 8px; position: relative;">
                                    <div style="position: absolute; top: 7%; right: 40%; background: #987070 ;color: white; border-radius: 50%; padding: 5px 10px;">?</div>
                                        <p style="font-family: Inter; font-size: 16px; line-height: 24px; text-align: center; color: #F1EEDC;">"The environment is where we all meet; where we all have a mutual interest; it is the one thing all of us share."</p>
                                    </div>
                                
                                </div>
                                
                            </div>
                           
                        </div>
                        

                    <!-- Overlay for new event popup container -->
                    <div class="overlay" id="overlayNewEventPopup" style="display: none;" onclick="hidePopup()"></div>
                </div>

            </div>

           <!-- Edit Event Popup Container -->
           <div id="editEventPopup" class="popup-container-2">
                 
                <div class="popup-content">
                     
                    <div style = "justify-content: space-between; display: flex; align-items: center;">
                        <h2>Edit Event</h2>
                        <i class="fa-solid fa-xmark" onclick="hidePopup()" style="font-size: xx-large; cursor: pointer" onmouseover="this.style.color='#fff000'" onmouseleave="this.style.color='#000000'"></i>
                    </div>
                    <!-- Event Title -->
                    <h3 style="font-weight:300">To update or delete your event organization, please fill out the forms below. We appreciate your cooperation!</h3>
                    
                    <!-- Event Name -->
                    <input type="text" id="EventName" name="newEventName" placeholder="Event Name" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: 'Epilogue'; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;">

                    <!-- Event Description -->
                    <textarea id="EventDescription" name="newEventDescription" placeholder="Description" rows="4" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: 'Epilogue'; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;"></textarea>
                    
                    <!-- Event Category -->
                    <input type="text" id="EventCategory" name="newEventCategory" placeholder="Category" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: Inter; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;">
                    
                    <!-- Event Category -->
                    <input type="text" id="EventLocation" name="newEventLocation" placeholder="Location" style="width: 100%; margin-bottom: 10px; padding: 10px; font-family: Inter; font-size: 16px; line-height: 24px; border: 1px solid #9095A0; border-radius: 4px;">
                    
                    Select date and time: 
                    <input type="datetime-local" id = "DateTime"/>

                    <!-- Participation Quota -->
                    <div style="display: flex;">
                        <button class="popup-button" onclick="submitNewEvent()" style="width: 30%; background-color: #2979FF; color: white; font-family: 'Epilogue'; font-size: 16px; border-radius: 4px;">Update Event</button>
                        <div style="padding: 30%;"></div>
                        <button class="popup-button" onclick="submitNewEvent()" style="width: 30%; background-color: #2979FF; color: white; font-family: 'Epilogue'; font-size: 16px; border-radius: 4px;">Delete Event</button>   
                    </div>
                    
                </div>
            </div>



            </div>
        </div>
    </body>

    <script>
        function showPopup(eventId, eventName, eventDescription, eventLocation, eventCategory, eventDateTime) {
            
            document.getElementById("editEventPopup").style.display = "block";
            document.getElementById("overlay").style.display = "block";
            
            document.getElementById("EventName").value = eventName;
            document.getElementById("EventDescription").value = eventDescription;
            document.getElementById("EventLocation").value = eventLocation;
            document.getElementById("EventCategory").value =eventCategory;
            document.getElementById("DateTime").value = eventDateTime;
            
        }


        function showAddEventPopUP() {
            document.getElementById("newEventPopupContainer").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        function hidePopup() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("newEventPopupContainer").style.display = "none";
            document.getElementById("editEventPopup").style.display = "none";
            document.getElementById("overlayNewEventPopup").style.display = "none";
        }

        function showAddNewEvent() {
            document.getElementById("newEventPopupContainer").style.display = "flex";
            document.getElementById("overlayPopup").style.display = "block";
        }
        window.onclick = function(event) {
            if(event.target == document.getElementById("overlay")){
                document.getElementById("overlay").style.display = "none";
            }
            if(event.target == document.getElementById("editEventPopup")){
                document.getElementById("overlay").style.display = "none";
                document.getElementById("editEventPopup").style.display = "none";
                document.getElementById("overlayNewEventPopup").style.display = "none";
            }
            
        }
        document.getElementById('editEventBtn').onclick = function() {
        document.getElementById('editEventPopup').style.display = "block";
    }

    document.getElementById('closePopup').onclick = function() {
        document.getElementById('editEventPopup').style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == document.getElementById('editEventPopup')) {
            document.getElementById('editEventPopup').style.display = "none";
        }
    }

    // Navigate to Org Event Calendar.php when event calendar button is clicked
    document.getElementById('eventCalendarBtn').onclick = function() {
            window.location.href = 'Org Event Calendar.php';
        }

    </script>


    <script src="../General Components & Widget/Organization/Org Component Script.js"></script>


</html>