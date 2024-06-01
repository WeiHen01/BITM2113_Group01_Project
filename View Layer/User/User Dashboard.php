<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | Dashboard</title>

        <!-- FavIcon on the browser tab-->
        <link rel="icon" type="image/x-icon" href="../../Assets/Image/H20 Harmony Logo.png">

        <link href='https://fonts.googleapis.com/css?family=Epilogue:ExtraBold' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="../General Components & Widget/User/User Component Style.css">

        <!-- Map -->
        <script src="https://www.waze.com/widgets/map-embed/init.js"></script>
        <script src="https://www.waze.com/assets/presentations/presenter/jsapi/iframe.js"></script>

        <!-- Chart -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Date range -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



        <style>
            /* Container 23 */
            .container {
                width: 25%; 
                height: 20vh; 
                background: url("../../Assets/Image/User_dashboard_bg.png"); /* white */
                background-size: cover;
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            .container-2 {
                margin-left: 2%;
                margin-right: 2%;
                width: 94vw; 
                height: 60vh; 
                background: #FFFFFFFF; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            .container-3 {
                margin-left: 2%;
                margin-right: 2%;
                width: 45vw; 
                height: 60vh; 
                background: #FFFFFFFF; /* white */
                border-radius: 6px; /* border-l */
                border-width: 1px; 
                border-color: #DEE1E6FF; /* neutral-300 */
                border-style: solid; 
                box-shadow: 0px 0px 1px #171a1f, 0px 0px 2px #171a1f; /* shadow-xs */
            }

            .textbox input {
                font-family: 'Epilogue';
                width: 15vw; /* Fill the entire width of the parent container */
                height: 46px;
                font-size: 14px;
                line-height: 22px;
                font-weight: 400;
                background: #F3F4F6FF; /* neutral-200 */
                border-radius: 8px; /* border-xl */
                border-width: 0px;
                outline: none;
                padding-left: 5px; /* Adjust the padding to make space for the icon */
                padding-right: 38px;
            }

            
        </style>
    </head>
    <body onload="getCurrentLocation()">
        <!-- Sidebar -->
        <?php 
            include("../General Components & Widget/User/Sidebar.php");
        ?>

        <div id="contentArea">
            <!-- Header -->
            <?php 
                include("../General Components & Widget/User/Header.php");
            ?>

            <div style="overflow-y: auto; margin-bottom: 3%">
                
                <p style="padding-left:2%; "><b>Dashboard</b></p>

                <div style="display: flex; padding-left: 2%; gap: 2%">
                    
                    <div class="container"> 
                        <div style="display: flex; align-items: center; justify-content:space-around; text-align:start">
                            
                            <div style="margin: 0; padding-top:1%; font-size: 15px">
                                <p>Total Polluted Areas</p> 

                                <?php 
                                    require("../../Database Layer/db_connection.php");
                                    
                                    try {
                                        $sql = "SELECT COUNT(DISTINCT CONCAT(City, ',', State, ',', Country)) AS UniqueLocations
                                                FROM complain";

                                        // Fetch the result
                                        // Execute the query
                                        $result = $con->query($sql);
                                        
                                        // Check if result exists
                                        if ($result) {
                                            // Fetch the result as an associative array
                                            $row = $result->fetch_assoc();
                                            
                                            // Check if the result is not empty
                                            if ($row && isset($row['UniqueLocations'])) {
                                                // Output the result
                                            // Output the result
                                                echo '<p style="font-weight: bold; font-size: 40px; padding-left: 0.5%; ">' . $row['UniqueLocations'] . '</p>';
                                            } else {
                                                echo '<p style="font-weight: bold; font-size: 40px; padding-left: 0.5%; ">0</p>'; // No unique locations found
                                            }
                                        } else {
                                            echo '<p style="font-weight: bold">0</p>'; // No result found
                                        }
                                
                                        
                                        
                                    } catch(Exception $e) {
                                        // Handle errors
                                        echo "Error: " . $e->getMessage();
                                    }
                                ?>
                            </div>
                            <i class="fa-solid fa-map-location-dot" style = "font-size: 5vw"></i>  
                        </div>

                    </div>

                    <div class="container"> 
                        <div style="display: flex; align-items: center; justify-content: space-evenly;">
                            
                            <div style="margin: 0; padding-top: 2%; padding-left: 0.5%; font-size: 15px">
                                <p>Total Complaints in This week</p> 

                                <?php 
                                    require("../../Database Layer/db_connection.php");
                                    
                                    try {
                                        // Get the current date
                                        $currentDate = date('Y-m-d');
                                    
                                        // Calculate the start date of the current week (assuming Monday is the start of the week)
                                        $startDate = date('Y-m-d', strtotime('last monday', strtotime($currentDate)));
                                    
                                        // Calculate the end date of the current week (assuming Sunday is the end of the week)
                                        $endDate = date('Y-m-d', strtotime('next sunday', strtotime($currentDate)));
                                    
                                        // SQL query to count records within the current week
                                        $sql = "SELECT COUNT(*) AS TotalRecords FROM complain WHERE DateTime >= ? AND DateTime <= ?";
                                        
                                        // Prepare the statement
                                        $statement = $con->prepare($sql);
                                        
                                        // Bind parameters
                                        $statement->bind_param('ss', $startDate, $endDate);
                                        
                                        // Execute the query
                                        $statement->execute();
                                        
                                        // Bind the result
                                        $statement->bind_result($totalRecords);
                                        
                                        // Fetch the result
                                        $statement->fetch();
                                        
                                        // Output the total records for this week
                                        echo '<p style="font-weight: bold; font-size: 40px; padding-left:2%; ">' . $totalRecords . '</p>';
                                        
                                        // Close the statement
                                        $statement->close();
                                    } catch(Exception $e) {
                                        // Handle errors
                                        echo "Error: " . $e->getMessage();
                                    }
        
                                ?>
                            </div>
                            <i class="fa-solid fa-map-location-dot" style = "font-size: 5vw"></i>  
                        </div>

                    </div>

                    
                </div>

                <div class = "container-2" style="margin-top: 2%; margin-bottom: 2%">
                    <iframe
                        id="wazeFrame"
                        allowfullscreen
                        style="border: none; width: 94vw; height: 60vh; ">
                    </iframe>
                </div>


                <div style = "display: flex; gap: 1%">
                    <div class = "container-3">
                        <div class = "textbox" style = "align-items: center; display: flex; gap: 1%; padding: 2%">
                            Date: 
                            <input type="text" name="daterange" placeholder="Select date range">
                        </div>
                    </div>

                    <div class = "container-3">
                        <canvas id="myPieChart" style="width:100%; max-width: 100%"></canvas>
                    </div>
                </div>

            </div>


        </div>


    </body>

    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                const filteredData = filterData(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
                updateChart(myChart, filteredData);
            });
        });

        // Function to filter data based on date range
        function filterData(startDate, endDate) {
            return allData.filter(item => {
                const date = new Date(item.date);
                return date >= new Date(startDate) && date <= new Date(endDate);
            });
        }

        // Function to update the chart
        function updateChart(chart, data) {
            const countries = [...new Set(data.map(item => item.country))];
            const aggregatedData = countries.map(country => {
                return data.filter(item => item.country === country).reduce((sum, item) => sum + item.value, 0);
            });

            chart.data.labels = countries;
            chart.data.datasets[0].data = aggregatedData;
            chart.update();
        }
    </script>

    <!-- Chart data configuration-->
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                const startDate = start.format('YYYY-MM-DD');
                const endDate = end.format('YYYY-MM-DD');
                fetchComplaintData(startDate, endDate);
            });
        });

        function fetchComplaintData(startDate, endDate) {
            $.ajax({
                url: 'User Fetch Complaints.php',
                method: 'POST',
                data: {
                    start_date: startDate,
                    end_date: endDate
                },
                success: function(response) {
                    const data = JSON.parse(response);
                    updateChart(myChart, data);
                },
                error: function(error) {
                    console.error("Error fetching data:", error);
                }
            });
        }

        function updateChart(chart, data) {
            const dates = data.map(item => item.date);
            const values = data.map(item => item.value);

            chart.data.labels = dates;
            chart.data.datasets[0].data = values;
            chart.update();
        }

        const barColors = ["red", "green", "blue", "orange", "brown"];

        const myChart = new Chart("myChart", {
            type: "bar",
            data: {
                labels: [],
                datasets: [{
                    backgroundColor: barColors,
                    data: []
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: "Complaints",
                        font: {
                            size: 25,
                            family: 'Epilogue'
                        }
                    },
                    legend: {
                        display: false
                    },
                    tooltip: {
                        titleFont: {
                            size: 14,
                            family: 'Epilogue'
                        },
                        bodyFont: {
                            size: 12,
                            family: 'Epilogue'
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 14,
                                family: 'Epilogue'
                            }
                        }
                    },
                    y: {
                        ticks: {
                            font: {
                                size: 14,
                                family: 'Epilogue'
                            }
                        }
                    }
                }
            }
        });


    </script>

    <script>
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showCurrentPosition);
            } 
        }

        function showCurrentPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            // Construct the URL with the latitude and longitude
            var url = "https://embed.waze.com/iframe?zoom=14&lat=" + latitude + "&lon=" + longitude;

            // Update the src attribute of the iframe
            document.getElementById("wazeFrame").src = url;

            // Show marker on the map
            showMarker(latitude, longitude);
        }

        function showMarker(latitude, longitude) {
            // Get a reference to the iframe's content window
            var wazeFrame = document.getElementById("wazeFrame");
            var wazeMap = wazeFrame.contentWindow;

            // Call the Waze map's addMarker method if it exists
            if (wazeMap && typeof wazeMap.addMarker === 'function') {
                wazeMap.addMarker(latitude, longitude);
            } else {
                console.error('Waze map addMarker method not available or not a function.');
            }
        }
    </script>

    
    
    <script src="../General Components & Widget/User/User Component Script.js"></script>

</html>