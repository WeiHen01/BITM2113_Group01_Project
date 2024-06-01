<?php
    require("../../Database Layer/db_connection.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $startDate = $_POST['start_date'];
        $endDate = $_POST['end_date'];

        try {
            $sql = "SELECT DateTime, COUNT(*) AS Value FROM complain WHERE DateTime >= ? AND DateTime <= ? GROUP BY DateTime";
            $statement = $con->prepare($sql);
            $statement->bind_param('ss', $startDate, $endDate);
            $statement->execute();
            $result = $statement->get_result();
            $data = [];

            while ($row = $result->fetch_assoc()) {
                $data[] = ['date' => $row['DateTime'], 'value' => $row['Value']];
            }

            echo json_encode($data);
            $statement->close();
        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>
