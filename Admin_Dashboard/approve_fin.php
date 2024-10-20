<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection
include('db_conn.php');

// Start the session
session_start();

// Check if 'id' is set in the POST request
if (isset($_POST['id'])) {
    $vID = $_POST['id'];

    // Prepare the SQL update query
    $stmt = $connection->prepare("UPDATE adv_reg SET stat = ? WHERE id = ?");
    $newStatus = 2; // Assuming 2 is the status you want to set
    $stmt->bind_param("ii", $newStatus, $vID); // Assuming 'id' is an integer

    // Execute the query
    if ($stmt->execute()) {
        echo "Advisor approved successfully.";
        // Redirect or show a success message
        header("Location: fin_approve.php"); // Change to the page you want to redirect to
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

// Close the database connection
$connection->close();
?>
