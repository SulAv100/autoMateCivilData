<?php
header('Content-Type: application/json'); // Ensure JSON output

require './init.php'; // Assuming init.php has the database connection setup

// Check if testName and printCount are set
// printf($_POST['testName']);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['testName'], $_POST['printCount'])) {
    $testName = $_POST['testName'];
    $printCount = $_POST['printCount'];

    // Prepare and execute the SQL statement to insert or update the print count
    $stmt = $conn->prepare("INSERT INTO countprint (test_name, print_count) VALUES (?, ?) 
                            ON DUPLICATE KEY UPDATE print_count = ?");
    $stmt->bind_param("sii", $testName, $printCount, $printCount);

    if ($stmt->execute()) {
        echo "Print count updated successfully.";
    } else {
        echo "Error updating print count: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
