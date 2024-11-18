<?php
header('Content-Type: application/json'); // Set JSON header first

include('NepaliCalender.php');

// Parse JSON input
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
    http_response_code(400);
    exit;
}

$nep_date = $data['initialDate'] ?? null;
$selected_value = $data['selectedValue'] ?? null;

// Validate inputs
if (!$nep_date || !$selected_value || !is_numeric($selected_value)) {
    echo json_encode(['status' => 'error', 'message' => 'Missing or invalid parameters']);
    http_response_code(400);
    exit;
}

// Function to convert English to Nepali date
function getNepaliDate($date) {
    $ndate = NepaliCalender::getInstance()->eng_to_nep($date);
    $ndate = $ndate['year'] . '-' . $ndate['month'] . '-' . $ndate['date'];
    return $ndate;
}

// Function to convert Nepali to English date
function getEnglishDate($date) {
    $year = date('Y', strtotime($date));
    $month = date('m', strtotime($date));
    $day = date('d', strtotime($date));
    $edate = NepaliCalender::getInstance()->nep_to_eng($year, $month, $day);
    $date = $edate['year'] . '-' . $edate['month'] . '-' . $edate['date'];
    return $date;
}

try {
    // Convert Nepali to English date
    $eng_date = getEnglishDate($nep_date);

    // Modify date with selected value
    $date = new DateTime($eng_date);
    $date->modify("+$selected_value days");
    $new_date = $date->format('Y-m-d');

    // Convert back to Nepali date
    $new_nep_date = getNepaliDate($new_date);

    // Return JSON response
    echo json_encode(['status' => 'success', 'newNepaliDate' => $new_nep_date]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'An error occurred', 'details' => $e->getMessage()]);
    http_response_code(500);
}
