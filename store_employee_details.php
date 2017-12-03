<?php
 
	$mysqli = new mysqli('localhost', 'root', '', 'nineleaps_db');

	if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    // receiving the post params
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $name = $firstName . " ". $lastName;
    $employeeRole = $_POST['employee_role'];
    $reportingManager = $_POST['reporting_manager'];

    $stmt = $mysqli->prepare("INSERT INTO nineleaps_data_table(employee_name, designation, reporting_manager) values (?, ?, ?)");
    $stmt->bind_param('sss', $name, $employeeRole, $reportingManager);
    $stmt->execute();
	 
    
?>