<?php

// API endpoint URL
$url = 'https://api.ap.org/v3/reports/Calendar-Elections2024-Live';

// API key
$api_key = 'KLOLDjf5m2DcoiHVs6mijZkSz38dMQpA';

// Initialize cURL session
$ch = curl_init();

// Set the URL
curl_setopt($ch, CURLOPT_URL, $url);

// Set method to GET
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

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
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);

// Access ElectionCalendar2024 data
$electionCalendar = $data['ElectionCalendar2024'];

// Sort event information by event date
usort($electionCalendar['EventInformation'], function($a, $b) {
    return strtotime($a['eventDate']) - strtotime($b['eventDate']);
});

// Print last calendar update information
echo "Last Calendar Update: " . $electionCalendar['lastCalendarUpdate']['lastUpdated'] . "<br><br>";

// Get today's date in Y-m-d format
$todayDate = date("Y-m-d");

// Print event information for future events
echo "<h2>Upcoming</h2>";
foreach ($electionCalendar['EventInformation'] as $event) {
    if ((strpos($event['calendarEvent'], 'Presidential') !== false || strpos($event['calendarEvent'], 'Republican') !== false || strpos($event['calendarEvent'], 'Caucus') !== false) && $event['eventDate'] >= $todayDate) {
        echo "Event Date: " . $event['eventDate'] . "<br>";
        echo "Event Day: " . date("d", strtotime($event['eventDate'])) . "<br>";
        echo "Day: " . $event['day'] . "<br>";
        echo "State: " . $event['state'] . "<br>";
        echo "Calendar Event: " . $event['calendarEvent'] . "<br>";
        echo "Tabulated by AP: " . $event['tabulatedByAP'] . "<br>";
        echo "State Postal: " . $event['statePostal'] . "<br>";
        if (isset($event['presPrimary'])) {
            echo "Presidential Primary: " . $event['presPrimary'] . "<br>";
        }
        if (isset($event['delegateEvent'])) {
            echo "Delegate Event: " . $event['delegateEvent'] . "<br>";
        }
        if (isset($event['govOrSenIncl'])) {
            echo "Gov/Sen Included: " . $event['govOrSenIncl'] . "<br>";
        }
        if (isset($event['notificationText'])) {
            echo "Notification Text: " . $event['notificationText'] . "<br>";
        }
        echo "<br>";
    }
}

// Print event information for past events
echo "<h2>Past</h2>";
foreach ($electionCalendar['EventInformation'] as $event) {
    if ((strpos($event['calendarEvent'], 'Presidential') !== false || strpos($event['calendarEvent'], 'Republican') !== false || strpos($event['calendarEvent'], 'Caucus') !== false) && $event['eventDate'] < $todayDate) {
        echo "Event Date: " . $event['eventDate'] . "<br>";
        echo "Event Day: " . date("d", strtotime($event['eventDate'])) . "<br>";
        echo "Day: " . $event['day'] . "<br>";
        echo "State: " . $event['state'] . "<br>";
        echo "Calendar Event: " . $event['calendarEvent'] . "<br>";
        echo "Tabulated by AP: " . $event['tabulatedByAP'] . "<br>";
        echo "State Postal: " . $event['statePostal'] . "<br>";
        if (isset($event['presPrimary'])) {
            echo "Presidential Primary: " . $event['presPrimary'] . "<br>";
        }
        if (isset($event['delegateEvent'])) {
            echo "Delegate Event: " . $event['delegateEvent'] . "<br>";
        }
        if (isset($event['govOrSenIncl'])) {
            echo "Gov/Sen Included: " . $event['govOrSenIncl'] . "<br>";
        }
        if (isset($event['notificationText'])) {
            echo "Notification Text: " . $event['notificationText'] . "<br>";
        }
        echo "<br>";
    }
}

