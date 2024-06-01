<?php
    // Include database connection
    require("../../Database Layer/db_connection.php");

    // Get the start and end dates from the POST request
    $start_date = $_POST['start'];
    $end_date = $_POST['end'];

    try {
        // SQL query to count complaints within the selected date range
        $sql = "SELECT DATE(DateTime) AS Date, COUNT(*) AS TotalComplaints 
                FROM complain 
                WHERE DateTime BETWEEN ? AND ?
                GROUP BY DATE(DateTime)";
        
        // Prepare the statement
        $statement = $con->prepare($sql);
        
        // Bind parameters
        $statement->bind_param('ss', $start_date, $end_date);
        
        // Execute the query
        $statement->execute();
        
        // Bind the result
        $statement->bind_result($date, $totalComplaints);

        // Fetch the results into an array
        $complaintData = array();
        while ($statement->fetch()) {
            $complaintData[] = array("x" => $date, "y" => $totalComplaints);
        }

        // Close the statement
        $statement->close();

        // Encode the data as JSON and output
        echo json_encode($complaintData);
    } catch(Exception $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
?>
