<?php
    function getReportingManaagers(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nineleaps_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $response = array();
        $sql = "SELECT employee_name FROM `nineleaps_data_table`  WHERE employee_name IS NOT NULL ORDER BY `s_no` ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // return $result;
            while($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        } else {
            // echo "0 results";
            return "No Managers Found";
        }

        $conn->close();
    }
?> 