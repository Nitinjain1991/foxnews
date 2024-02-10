<?php
//delegates count
// API endpoint URL
$url_delegates = 'https://api.ap.org/v3/elections/delegates/2024?format=json';

// API key
$api_key = 'KLOLDjf5m2DcoiHVs6mijZkSz38dMQpA';

// Initialize cURL session for delegates endpoint
$ch_delegates = curl_init();
// Set the URL for delegates endpoint
curl_setopt($ch_delegates, CURLOPT_URL, $url_delegates);

// Set method to GET for delegates endpoint
curl_setopt($ch_delegates, CURLOPT_HTTPGET, true);

// Set headers for delegates endpoint
$headers = array(
    'x-api-key: ' . $api_key,
    'Accept: application/json',
    'Accept-Encoding: gzip'
);
curl_setopt($ch_delegates, CURLOPT_HTTPHEADER, $headers);

// Return the response as a string instead of outputting it directly for delegates endpoint
curl_setopt($ch_delegates, CURLOPT_RETURNTRANSFER, true);

// Enable decompression of gzip-encoded responses for delegates endpoint
curl_setopt($ch_delegates, CURLOPT_ENCODING, 'gzip');

// Execute the cURL session for delegates endpoint
$response_delegates = curl_exec($ch_delegates);

// Check for errors for delegates endpoint
if (curl_errno($ch_delegates)) {
    echo 'Curl error (Delegates): ' . curl_error($ch_delegates);
}

// Close cURL session for delegates endpoint
curl_close($ch_delegates);

// Decode JSON response for delegates endpoint
$data_delegates = json_decode($response_delegates, true);

// Encode the data as JSON for delegates endpoint
$json_data_delegates = json_encode($data_delegates);

// Decode JSON data into associative array for delegates endpoint
$data_delegates = json_decode($json_data_delegates, true);


$candi_data_delegates = ($data_delegates['delSum'][0]['del'][0]['Cand']);
// $electionDate = $elections[0]['electionDate'];
////////////////////
// API endpoint URL
$url = 'https://api.ap.org/v3/elections/2024-02-08'; //for all elction dates

$url_del = 'https://api.ap.org/v3/elections/delegates/2024?format=json';

// API key
// $api_key = 'MVuVRXajdj6qGT4BDCHcL1ogD5H3jqvE';
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
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);

// Encode the data as JSON      
$json_data = json_encode($data);

// var_dump($json_data);// Decode JSON data into associative array
$data = json_decode($json_data, true);

// Accessing and echoing the "first" and "last" names of the first candidate
// $races = ($data['races']);
$elections = ($data['elections']);
// foreach ($elections as $ele) {
//     // var_dump ($ele);
//     $date =  $ele['electionDate'] . '<br/>';
//     if (strpos($date, '2024') !== false) {
//         echo $date . '<br/>';
//     }
// }
$electionDate = $elections[0]['electionDate'];
// $first_name = $races[0]['reportingUnits'][0]['candidates'][0]['first'];
// $last_name = $races[0]['reportingUnits'][0]['candidates'][0]['last'];
// $resultsType = $races[0]['resultsType'];
$currYear = date("Y");

// echo "First Name: " . $first_name . "<br>";
// echo "Last Name: " . $last_name . "<br>";
// Print the response
echo $data_delegates;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoxNews</title>
    <link rel="stylesheet" href="assets/css/Bootstrap.css">
    <link rel="stylesheet" href="assets/css/index.css">

</head>

<body>

    <h2><?php print_r($candi_data_delegates) ?></h2>
    <div class="custom-container">

        <div class="d-flex justify-content-center align-items-center gap-3 data-jhdsfj ">
            <div class="status-area d-inline-flex align-items-center gap-1">
                <span></span>
                <h5 class="fw-bold text-uppercase m-0">
                    <?php echo $resultsType ?> UPDATES
                </h5>
            </div>

            <p class="fw-normal m-0">Last Updated: February 9, 2024 at 6:42 AM
                ET</p>
        </div>

        <h1 class="title fw-extrabold my-3 text-center">
            <?php echo $currYear ?>
            Primary &amp; Caucus
            Results</h1>

        <h2 class="description">Read below for the 2024 primary election results,
            today's races, recent primary races, 2024 primary news and the 2024
            primary schedule with Fox News. Stay up-to-date on all things 2024
            primary elections related. </h2>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="summary__title fw-extrabold">Democrats</h4>

                    <div class="summary_delegates_remaining text-white fw-extrabold">3,843
                        Delegates Left</div>
                </div>

                <div class="d-flex justify-content-between align-items-center gap-2 mt-2">
                    <img src="assets/images/joe-biden.png" alt="joe-biden" class="w-100 h-100 object-fit-contain summary-candidate__image">

                    <div class="w-100 ms-1">
                        <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                            <h4 class="summary-candidate__name fw-extrabold m-0 text-black">Biden</h4>
                            <p class="summary-candidate__count fw-extrabold m-0">
                                91</p>
                        </div>

                        <div class="position-relative">
                            <div class="votes-to-win summary-candidate__bar">
                                1968 to win
                            </div>
                            <div class="progress">
                                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center gap-2 mt-4">
                    <img src="assets/images/dean-phillips.png" alt="dean-phillips" class="w-100 h-100 object-fit-contain summary-candidate__image">

                    <div class="w-100 ms-1">
                        <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                            <h4 class="summary-candidate__name fw-extrabold m-0 text-black">phillips</h4>
                            <p class="summary-candidate__count fw-extrabold m-0">
                                0</p>
                        </div>

                        <div class="position-relative">
                            <div class="votes-to-win summary-candidate__bar">
                                2456 to win
                            </div>
                            <div class="progress">
                                <div class="progress-bar w-0" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ps-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="summary__title fw-extrabold">Republicans</h4>

                    <div class="summary_delegates_remaining text-white fw-extrabold" style="background-color: #d20f26;">3,843
                        Delegates Left</div>
                </div>

                <div class="d-flex justify-content-between align-items-center gap-2 mt-2">
                    <img src="assets/images/donald-trump.png" alt="donald-trump" class="w-100 h-100 object-fit-contain summary-candidate__image" style="background-color: #ffeaec;border-color: #d20f26;">

                    <div class="w-100 ms-1">
                        <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                            <h4 class="summary-candidate__name fw-extrabold m-0 text-black">trump</h4>
                            <p class="summary-candidate__count fw-extrabold m-0" style="color: #d20f26;">
                                63</p>
                        </div>

                        <div class="position-relative">
                            <div class="votes-to-win summary-candidate__bar">
                                1215 to win
                            </div>
                            <div class="progress">
                                <div class="progress-bar w-25" style="background-color: #d20f26;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center gap-2 mt-4">
                    <img src="assets/images/nikki-haley.png" alt="nikki-haley" class="w-100 h-100 object-fit-contain summary-candidate__image" style="background-color: #ffeaec;border-color: #d20f26;">

                    <div class="w-100 ms-1">
                        <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                            <h4 class="summary-candidate__name fw-extrabold m-0 text-black">haley</h4>
                            <p class="summary-candidate__count fw-extrabold m-0" style="color: #d20f26;">
                                17</p>
                        </div>

                        <div class="position-relative">
                            <div class="votes-to-win summary-candidate__bar">
                                1215 to win
                            </div>
                            <div class="progress">
                                <div class="progress-bar w-25" style="background-color: #d20f26;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>



    <!-- <h1 class=""><?php echo $first_name ?></h1>
    <h1 class=""><?php echo $resultsType ?></h1> -->
    <?php
    foreach ($elections as $ele) {
        // var_dump ($ele);
        $date =  $ele['electionDate'] . '<br/>';
        if (strpos($date, '2024') !== false) { ?>
            <h1><?php
                echo $date ?></h1>
    <?php
        }
    } ?></h1>
    <script src="assets/js/Bootstrap.js"></script>
</body>

</html>