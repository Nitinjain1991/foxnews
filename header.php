<?php
// Function to convert state name to abbreviation
function getStateAbbreviation($state)
{
    // List of state abbreviations
    $state_abbreviations = array(
        'ALABAMA' => 'AL',
        'ALASKA' => 'AK',
        'ARIZONA' => 'AZ',
        'ARKANSAS' => 'AR',
        'CALIFORNIA' => 'CA',
        'COLORADO' => 'CO',
        'CONNECTICUT' => 'CT',
        'DELAWARE' => 'DE',
        'FLORIDA' => 'FL',
        'GEORGIA' => 'GA',
        'HAWAII' => 'HI',
        'IDAHO' => 'ID',
        'ILLINOIS' => 'IL',
        'INDIANA' => 'IN',
        'IOWA' => 'IA',
        'KANSAS' => 'KS',
        'KENTUCKY' => 'KY',
        'LOUISIANA' => 'LA',
        'MAINE' => 'ME',
        'MARYLAND' => 'MD',
        'MASSACHUSETTS' => 'MA',
        'MICHIGAN' => 'MI',
        'MINNESOTA' => 'MN',
        'MISSISSIPPI' => 'MS',
        'MISSOURI' => 'MO',
        'MONTANA' => 'MT',
        'NEBRASKA' => 'NE',
        'NEVADA' => 'NV',
        'NEW HAMPSHIRE' => 'NH',
        'NEW JERSEY' => 'NJ',
        'NEW MEXICO' => 'NM',
        'NEW YORK' => 'NY',
        'NORTH CAROLINA' => 'NC',
        'NORTH DAKOTA' => 'ND',
        'OHIO' => 'OH',
        'OKLAHOMA' => 'OK',
        'OREGON' => 'OR',
        'PENNSYLVANIA' => 'PA',
        'RHODE ISLAND' => 'RI',
        'SOUTH CAROLINA' => 'SC',
        'SOUTH DAKOTA' => 'SD',
        'TENNESSEE' => 'TN',
        'TEXAS' => 'TX',
        'UTAH' => 'UT',
        'VERMONT' => 'VT',
        'VIRGINIA' => 'VA',
        'WASHINGTON' => 'WA',
        'WEST VIRGINIA' => 'WV',
        'WISCONSIN' => 'WI',
        'WYOMING' => 'WY',
        // Add more if needed
    );

    // Convert state name to abbreviation if it exists in the array, otherwise return the original state name
    return isset($state_abbreviations[strtoupper($state)]) ? $state_abbreviations[strtoupper($state)] : $state;
}
// Function to format the date
function formatDate($date)
{
    return date('M. d', strtotime($date));
}

// API endpoint URL
$url_first = 'https://api.ap.org/v3/reports/Calendar-Elections2024-Live';

// API key
$api_key = 'KLOLDjf5m2DcoiHVs6mijZkSz38dMQpA';

// Initialize cURL session
$ch_first = curl_init();

// Set the URL
curl_setopt($ch_first, CURLOPT_URL, $url_first);

// Set method to GET
curl_setopt($ch_first, CURLOPT_CUSTOMREQUEST, 'GET');

// Set headers
$headers_first = array(
    'x-api-key: ' . $api_key,
    'Accept: application/json', // Change to 'Accept: application/xml' for XML response
    'Accept-Encoding: gzip'
);
curl_setopt($ch_first, CURLOPT_HTTPHEADER, $headers_first);

// Return the response as a string instead of outputting it directly
curl_setopt($ch_first, CURLOPT_RETURNTRANSFER, true);

// Enable decompression of gzip-encoded responses
curl_setopt($ch_first, CURLOPT_ENCODING, 'gzip');

// Execute the cURL session
$response_first = curl_exec($ch_first);

// Check for errors
if (curl_errno($ch_first)) {
    echo 'Curl error: ' . curl_error($ch_first);
}

// Close cURL session
curl_close($ch_first);

// Decode JSON response
$data_first = json_decode($response_first, true);


//second api 

$url = 'https://api.ap.org/v3/elections/2024-02-08?resultsType=l';

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

//Third Api 


// API endpoint URL
$url_sec = 'https://api.ap.org/v3/elections/delegates/2024?party=GOP&format=json';

// API key
$api_key = 'KLOLDjf5m2DcoiHVs6mijZkSz38dMQpA';

// Initialize cURL session
$ch_sec = curl_init();

// Set the URL
curl_setopt($ch_sec, CURLOPT_URL, $url_sec);

// Set method to GET
curl_setopt($ch_sec, CURLOPT_CUSTOMREQUEST, 'GET');

// Set headers
$headers_sec = array(
    'x-api-key: ' . $api_key,
    'Accept: application/json', // Change to 'Accept: application/xml' for XML response
    'Accept-Encoding: gzip'
);
curl_setopt($ch_sec, CURLOPT_HTTPHEADER, $headers_sec);

// Return the response as a string instead of outputting it directly
curl_setopt($ch_sec, CURLOPT_RETURNTRANSFER, true);

// Enable decompression of gzip-encoded responses
curl_setopt($ch_sec, CURLOPT_ENCODING, 'gzip');

// Execute the cURL session
$response_sec = curl_exec($ch_sec);

// Check for errors
if (curl_errno($ch_sec)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch_sec);

// Decode JSON response
$data_sec = json_decode($response_sec, true);

// Encode the data as JSON
$json_data_sec = json_encode($data_sec);

// echo $json_data_sec ;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>foxnews</title>
    <link rel="stylesheet" href="assets/css/Bootstrap.css">
    <style>
        .custom-container {
            /* max-width: 1640px;  */
            margin: 0px auto;
            padding-left: 48px;
            padding-right: 48px;
        }

        .decision-updates p>a {
            text-decoration: none !important;
        }

        .decision-updates p {
            font-size: 14px;
            line-height: normal;
            color: #003bf5;
        }

        .decision-updates>img {
            max-height: 80px;
        }

        .decision-updates p img {
            max-width: 20px;
            max-height: 20px;
        }

        .upnext-area .highlight-title {
            font-size: 24px;
            font-weight: bolder;
            color: #003bf5;
            text-transform: uppercase;
        }

        .upnext-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .upnext-area .party-next {
            font-size: 16px;
            font-weight: 600;
            color: #040404;
            text-transform: uppercase;
        }

        .next-event-date {
            font-weight: bolder;
            text-transform: uppercase;
            border-radius: 4px;
            padding: 2px 16px;
            background-color: #132037;
            color: white;
            display: inline-block;
        }

        .highlight-result {
            background-color: #f9d64b;
            color: white;
            font-weight: 500;
            text-transform: uppercase;
            color: black;
            padding: 4px;
            font-size: 14px;
        }

        .election-winner {
            height: 149px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .national-leader>h4,
        .election-winner>h4 {
            font-weight: bold;
            text-transform: uppercase;
            color: black;
            font-size: 30px;
        }

        .national-leader>h5,
        .election-winner>h5 {
            font-weight: normal;
            text-transform: uppercase;
            color: black;
            font-size: 16px;
        }

        .chance-to-win {
            font-weight: bold;
            font-size: 16px;
            line-height: normal;
            color: black;
        }

        .more-flex-things {
            font-size: 16px;
            font-weight: normal;
            color: #003bf5;
            text-transform: capitalize;
        }

        .election-candidate img {
            max-width: 80px;
            position: relative;

        }

        .election-candidate .container-candidates {
            background-color: #cc3c34;
            border-radius: 50%;
            overflow: hidden;
            width: 70px;
            height: 70px;
            margin: 0px auto;
            display: flex;
        }

        .election-candidate {
            background-color: #fcf5f5;
            height: 100%;
            padding: 4px 0px;
        }

        .election-candidate h4 {
            font-size: 20px;
            font-weight: normal;
            line-height: normal;
            text-transform: capitalize;
        }

        .national-leader .highlight-result,
        .national-leader h5 {
            font-size: 11px;
        }

        .national-leader h4 {
            font-size: 13px;
        }

        .delegates-container p {
            font-size: 16px;
            text-transform: capitalize;
            font-weight: 600;
        }

        .delegates-container .candidate-highlighter {
            width: 10px;
            height: 10px;
            background-color: #cc3c34;
            display: inline-block;
            border-radius: 50%;
        }

        .delegates-container .progress-bar {
            background: #cc3c34;
        }

        .delegates-container .progress {
            height: 10px !important;
            border-radius: 0px;
            background-color: #80808030;
        }

        .more-data-blog {
            height: 149px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .more-data-blog>a {
            width: 100%;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 700;
            font-style: normal;
            color: #3b3b3b;
            height: 50%;
            display: inline-block;
            border: 1px solid #dadada;
            background-color: #f2f2f2;
        }

        .updating-animation {
            animation: updatetime 4s ease-in-out;
        }

        @keyframes updatetime {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(540deg);
            }
        }

        @media (min-width:1300px) and (max-width:1600px) {
            .custom-container.adjustments-view {
                zoom: 70%;
            }
        }
    </style>
</head>

<body>

    <section class="py-5">
        <div class="custom-container adjustments-view">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="decision-updates ">
                                <img src="assets/images/decision-2024.jpg" alt="decision-2024f" class=" w-100 h-100 object-fit-contain">
                                <p class="fw-medium text-uppercase d-flex align-items-center justify-content-center gap-1">
                                    <a href="" class="link-underline-opacity-0 d-flex align-items-center">
                                        <svg width="12" height="12" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" data-update-toggle="true" class="updating-animation me-1">
                                            <path d="M9.63359 0.816406L8.61797 1.83203C7.73906 0.953125 6.52812 0.40625 5.2 0.40625C2.60234 0.40625 0.473437 2.45703 0.35625 5.01562C0.336719 5.15234 0.453906 5.25 0.590625 5.25H1.1375C1.25469 5.25 1.35234 5.17188 1.37187 5.03516C1.48906 3.02344 3.14922 1.42188 5.2 1.42188C6.25469 1.42188 7.21172 1.85156 7.89531 2.55469L6.84062 3.60938C6.68437 3.76562 6.80156 4 6.99687 4H9.80937C9.92656 4 10.0437 3.90234 10.0437 3.76562V0.972656C10.0437 0.777344 9.78984 0.660156 9.63359 0.816406ZM9.78984 5.25H9.24297C9.12578 5.25 9.02812 5.34766 9.00859 5.48438C8.89141 7.49609 7.23125 9.07812 5.2 9.07812C4.12578 9.07812 3.16875 8.66797 2.48516 7.96484L3.53984 6.91016C3.69609 6.75391 3.57891 6.5 3.38359 6.5H0.590625C0.453906 6.5 0.35625 6.61719 0.35625 6.73438V9.54688C0.35625 9.74219 0.590625 9.85938 0.746875 9.70312L1.7625 8.6875C2.64141 9.56641 3.85234 10.0938 5.2 10.0938C7.77812 10.0938 9.90703 8.0625 10.0242 5.50391C10.0437 5.36719 9.92656 5.25 9.78984 5.25Z" fill="#0a58ca" class="jsx-404944366"></path>
                                        </svg>
                                        updated: 5:35 pm et
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- upnext event -->
                        <div class="col-4 border-start border-end" style="border-color: #132037;height: 149px;">
                            <div class="upnext-area text-center">
                                <?php
                                // Get current date in yyyy-mm-dd format
                                $current_date = date('Y-m-d');

                                // Flag to check if event for current date is found
                                $event_found = false;

                                // Iterate through events
                                foreach ($data_first['ElectionCalendar2024']['EventInformation'] as $event) {
                                    if ($event['eventDate'] == $current_date) {
                                        // Event for current date found
                                        $event_found = true;
                                        // Print event details
                                        printEventDetails($event);
                                        break;
                                    } elseif ($event['eventDate'] > $current_date) {
                                        // Print next event details
                                        $event_found = true;
                                        printEventDetails($event);
                                        break;
                                    }
                                }

                                // If event for current or future date not found
                                if (!$event_found) {
                                    echo "No upcoming events found.";
                                }
                                // Function to print event details
                                function printEventDetails($event)
                                {
                                ?>
                                    <p class="highlight-title m-0">up next</p>
                                    <p class="party-next m-0"><?php echo  getStateAbbreviation($event['state']); ?><?php echo " " . $event['calendarEvent']; ?></p>
                                    <div class="next-event-date mt-1">
                                        <?php echo formatDate($event['eventDate']); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        foreach ($data['races'] as $race) {
                            // Iterate over candidates in the race
                            $Office_Name =  strtoupper($race['officeName']);
                            if ($race['party'] == "GOP") {
                                $party = "REPUBLICAN";
                            }
                            foreach ($race['reportingUnits'] as $reportingUnit) {
                                $State_Name = strtoupper($reportingUnit['stateName']);
                            }
                        }
                        ?>
                        <!-- project winner -->
                        <div class="col-4">
                            <div class="election-winner">
                                <p class="mb-1 d-flex align-items-center justify-content-center gap-1 highlight-result">projected winner <img src="assets/images/right-marks.png" alt="right-marks" width="20px" class="object-fit-contain"></p>
                                <h4 class="mb-1"><?php echo $State_Name ?></h4>
                                <h5 class="mb-1"><?php echo $party . " " . $Office_Name ?> </h5>
                                <p class="chance-to-win mb-0">98.9% in </p>
                                <a href="" class="more-flex-things">full result &rarr;</a>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- candidates data -->
                <div class="col-4">
                    <div class="row border-end pe-2" style="border-color: #132037;">
                        <?php
                        // Initialize total count
                        $totalCount = 0;
                        // Iterate over races
                        foreach ($data['races'] as $race) {
                            // Iterate over candidates in the race
                            foreach ($race['reportingUnits'][0]['candidates'] as $candidate) {
                                // Add vote count to total count
                                $totalCount += $candidate['voteCount'];
                            }
                        }
                        foreach ($data['races'] as $race) {
                            // Iterate over candidates in the race
                            foreach ($race['reportingUnits'][0]['candidates'] as $candidate) {
                                // Print candidate name and vote count
                                // echo $candidate['last'] . "<br>";

                                $percentage = (($candidate['voteCount'] / $totalCount) * 100);
                                $rounded_percentage = round($percentage, 1);
                                // echo $rounded_percentage . "%" . "<br><br>";


                        ?>
                                <div class="col-6">
                                    <div class="election-candidate text-center">
                                        <div class="container-candidates">
                                            <img src="assets/images/donald-trump.png" alt="donald-trump" class="object-fit-contain">
                                        </div>
                                        <h4 class="my-2 text-center"><?php echo $candidate['last'] ?></h4>

                                        <p class="mb-1 d-flex align-items-center justify-content-center gap-1">
                                            <?php if (isset($candidate['winner']) && $candidate['winner'] == "X") { ?>
                                                <img src="assets/images/right-marks.png" alt="right-marks" width="20px" class="object-fit-contain highlight-result">
                                            <?php } ?>
                                            <?php echo $rounded_percentage . "%" ?>
                                        </p>

                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- leaders and delegates counter -->
                <div class="col-4">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="national-leader">
                                <p class="mb-1 d-flex align-items-center justify-content-center gap-1 highlight-result text-uppercase fw-bold"><?php echo $data_sec['delSum']['del'][0]['dNeed']; ?> needed to win</p>
                                <h4 class="mb-1">national leaders</h4>
                                <h5 class="mb-1"><?php $pId = $data_sec['delSum']['del'][0]['pId'];
                                                    if ($pId == "GOP") {
                                                        echo "REPUBLICAN";
                                                    }
                                                    ?> president</h5>
                                <a href="" class="more-flex-things">full breakdown &rarr;</a>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row flex-wrap delegates-container">
                                <?php
                                // Get the candidates array
                                $candidates = $data_sec['delSum']['del'][0]['Cand'];
                                // var_dump($candidates);
                                // Sort candidates by dTot in descending order
                                usort($candidates, function ($a, $b) {
                                    return $b['dTot'] - $a['dTot'];
                                });
                                // Select top 4 candidates
                                $top_candidates = array_slice($candidates, 0, 4);

                                $total_v = $data_sec['delSum']['del'][0]['dVotes'];
                                // Print the top candidates
                                foreach ($top_candidates as $candid) {
                                    $width_per = (($candid['dTot'] / $total_v) * 100);

                                ?>
                                    <div class="col-6">
                                        <p class="mb-1"><span class="candidate-highlighter me-1"></span><?php echo $candid['cName'] . "\n" . $candid['dTot'] ?></p>
                                        <div class="progress">
                                            <div class="progress-bar w-25" style="background: #c20017 !important; width: <?php echo $width_per; ?>% !important;"></div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>

                        <div class="col-3 border-start" style="border-color: #132037;">
                            <div class="more-data-blog">
                                <a href="" class="d-flex align-items-center justify-content-center text-decoration-none">full coverage</a>
                                <a href="" class="d-flex align-items-center justify-content-center text-decoration-none">thursday's blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/js/Bootstrap.js"></script>
</body>

</html>