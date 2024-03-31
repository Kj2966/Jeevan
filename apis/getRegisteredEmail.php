<?php
include('../db/config.php');

// Retrieve email from the POST data
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

if(isset($input['email'])) {
    $email = $input['email'];

    // Prepare SQL statement to check if email exists
    $stmt = $con->prepare("SELECT * FROM `login` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if email exists
    if ($result->num_rows > 0) {
        // Email already exists
        $response = array('status' => 'error', 'message' => 'Email already exists');
    } else {
        // Email does not exist
        $response = array('status' => 'success', 'message' => 'Email does not exist');
    }

    // Send response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);

    // Close database connection
    $stmt->close();
} else {
    // Handle invalid input
    $response = array('status' => 'error', 'message' => 'Invalid input data');
    header('Content-Type: application/json');
    echo json_encode($response);
}
$con->close();
?>
