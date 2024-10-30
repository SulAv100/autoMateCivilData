<?php
// Include database connection
require_once 'init.php'; 
// print("sth");

// Check if form data was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get sample name and tests
    $sampleName = $_POST['sampleName'];
    $sampleTests = $_POST['tests']; // This is an array

    // Convert tests array to a comma-separated string
    $sampleTestsString = implode(',', $sampleTests);

    // Prepare SQL to insert data into the samples table
    $sql = "INSERT INTO samples (sampleName, sampleTests) VALUES (?, ?)";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters and execute
        $stmt->bind_param("ss", $sampleName, $sampleTestsString);

        if ($stmt->execute()) {
            // echo "Sample and tests added successfully.";
            header("Location: ../success.php");
            exit;
        } else {
            echo "Error: Could not execute query: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Could not prepare query: " . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>
