<?php

// API endpoint
$api_url = 'https://api.ap.org/v3/reports';

// API key
$api_key = 'MVuVRXajdj6qGT4BDCHcL1ogD5H3jqvE'; // Replace 'YOUR_API_KEY_HERE' with your actual API key

// Optional parameters
$election_date = '2022-06-28'; // Date of the election
$type = 'delegates'; // Type of report (e.g., delegates)
$subtype = 'delsum'; // Subtype of report (e.g., delsum)

// Build the query parameters
$query_params = http_build_query([
    'electionDate' => $election_date,
    'type' => $type,
    'subtype' => $subtype
]);

// Append API key to headers
$headers = [
    'x-api-key: ' . $api_key,
    'Accept-Encoding: gzip'
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt_array($ch, [
    CURLOPT_URL => $api_url . '?' . $query_params,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => 'gzip', // Enable decompression of gzip-encoded responses
]);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $decoded_response = json_decode($response, true);
    
    // Print the response
    echo json_encode($decoded_response); // Output the response as JSON
}

// Close cURL session
curl_close($ch);

?>
