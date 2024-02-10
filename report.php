<?php

// API endpoint URL
$url = 'https://api.ap.org/v3/reports';

// API key
$api_key = 'KLOLDjf5m2DcoiHVs6mijZkSz38dMQpA';

// Initialize cURL session
$ch = curl_init();

// Set the URL
curl_setopt($ch, CURLOPT_URL, $url);

// Set method to GET
curl_setopt($ch, CURLOPT_HTTPGET, true);

// Set headers
$headers = array(
    'x-api-key: ' . $api_key,
    'Accept: application/json', // Change to 'Accept: application/xml' for XML response
    'Accept-Encoding: gzip'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Return the response as a string instead of outputting it directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Enable decompression of gzip-encoded responses
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');

// Execute the cURL session
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);

// Encode the data as JSON
$json_data = json_encode($data);

// Print the response
echo $json_data;
?>
