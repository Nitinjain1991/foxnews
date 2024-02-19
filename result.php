<?php
// API endpoint URL
$url = 'https://api.ap.org/v3/elections/2024-02-24';

// API key
// $api_key = 'MVuVRXajdj6qGT4BDCHcL1ogD5H3jqvE';
$api_key = 'KLOLDjf5m2DcoiHVs6mijZkSz38dMQpA';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
$headers = array(
    'x-api-key: ' . $api_key,
    'Accept: application/json',
    'Accept-Encoding: gzip'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);
$data = json_decode($response, true);

// Encode the data as JSON
$json_data = json_encode($data);
$data = json_decode($json_data, true);
$races = ($data['races']);

function convertDateTime($dateTimeString)
{
    $dateTimeString = rtrim($dateTimeString, 'Z' . 'C');
    $dateTime = new DateTime($dateTimeString);
    $formattedDateTime = $dateTime->format('F j, Y \a\t g:i A T');
    return $formattedDateTime;
}
$lastUpdated = ($data['races'][0]['reportingUnits'][0]['lastUpdated']);
$formattedDateTime = convertDateTime($lastUpdated);
// echo $formattedDateTime . "</br>";

// Accessing and echoing the "first" and "last" names of the first candidate
$races = ($data['races']);
// var_dump($races);
// foreach($races as $a){
//     // var_dump($a);
//     echo $a['eventID']['electionDate'];
// }
// $first_name = $races[0]['reportingUnits'][0]['candidates'][0]['first'];
// $last_name = $races[0]['reportingUnits'][0]['candidates'][0]['last'];
$resultsType = $races[0]['resultsType'];
$currYear = date("Y");
// echo $json_data; 

// end election status

// 2nd API
$url_del = 'https://api.ap.org/v3/elections/delegates/2024?format=json';
$api_key_del = 'KLOLDjf5m2DcoiHVs6mijZkSz38dMQpA';
$ch_del = curl_init();
curl_setopt($ch_del, CURLOPT_URL, $url_del);
curl_setopt($ch_del, CURLOPT_HTTPGET, true);
$headers_del = array(
    'x-api-key: ' . $api_key,
    'Accept: application/json',
    'Accept-Encoding: gzip'
);
curl_setopt($ch_del, CURLOPT_HTTPHEADER, $headers_del);
curl_setopt($ch_del, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_del, CURLOPT_ENCODING, 'gzip');
$response_del = curl_exec($ch_del);
if (curl_errno($ch_del)) {
    echo 'Curl error: ' . curl_error($ch_del);
}
curl_close($ch_del);
$data_del = json_decode($response_del, true);
$json_data_del = json_encode($data_del);
$can_del = $data_del['delSum']['del'];

// print_r($json_data_del);

// Loop through each party's data
// foreach ($can_del as $party) {
//     // Extract party ID
//     $party_id = $party['pId'];

//     // Print party ID
//     // echo "</br> Party: $party_id\n";
//     // $dneed = $party['dNeed'];
//     // Loop counter
//     $counter = 0;
//     // echo $dneed;
//     // Loop through candidates in the party
//     foreach ($party['Cand'] as $candidate) {
//         // Increment the counter
//         $counter++;

//         $candidate_name = $candidate['cName'];
//         $candidate_dTot = $candidate['dTot'];

//         //   Print candidate details for the first two candidates in each party
//         if ($candidate_name === 'Phillips' || $candidate_name === 'Haley') {
//             echo "Candidate ID: $candidate_dTot, Name: $candidate_name\n";
//         }
//     }
// }
// echo $json_data_del;


///////////////////////
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


    <div class="custom-container">

        <div class="d-flex justify-content-center align-items-center gap-3 data-jhdsfj ">
            <div class="status-area d-inline-flex align-items-center gap-1">
                <span></span>
                <h5 class="fw-bold text-uppercase m-0">
                    <?php echo $resultsType ?> UPDATES
                </h5>
            </div>

            <p class="fw-normal m-0">Last Updated: <?php echo $formattedDateTime ?></p>
        </div>

        <h1 class="title fw-extrabold my-3 text-center">
            <?php echo $currYear ?>
            Primary &amp; Caucus
            Results</h1>

        <h2 class="description">Read below for the 2024 primary election results,
            today's races, recent primary races, 2024 primary news and the 2024
            primary schedule with Fox News. Stay up-to-date on all things 2024
            primary elections related.</h2>

        <!-- <div class="row mt-4">
            <?php
            foreach ($can_del as $party) {
                // Extract party ID
                $party_id = $party['pId'];
                // Determine the background color based on party ID
                $background_style = ($party_id == "GOP") ? "background: #c20017 !important;" : "";
                $party_clr = ($party_id == "GOP") ? "color: #c20017 !important;" : "";
                // Print party ID
                // echo "</br> Party: $party_id\n";
                // $dneed = $party['dNeed'];

                // Loop counter
                $counter = 0;

                // Loop through candidates in the party
                foreach ($party['Cand'] as $candidate) {
                    // Increment the counter
                    $counter++;

                    // Print candidate details for the first two candidates in each party
                    if ($counter <= 1) {
                        $candidate_del = $candidate['dTot'];
                        $candidate_name = $candidate['cName'];
            ?>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="summary__title fw-extrabold"><?php echo "</br> Party: $party_id\n"; ?></h4>

                                <div class="summary_delegates_remaining text-white fw-extrabold" style="<?php echo $background_style; ?>">3,843
                                    Delegates Left</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center gap-2 mt-2">
                                <img src="assets/images/joe-biden.png" alt="joe-biden" class="w-100 h-100 object-fit-contain summary-candidate__image">

                                <div class="w-100 ms-1">
                                    <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                                        <h4 class="summary-candidate__name fw-extrabold m-0 text-black"><?php echo "$candidate_name\n"; ?></h4>
                                        <p class="summary-candidate__count fw-extrabold m-0" style="<?php echo $party_clr; ?>">
                                            <?php echo $candidate_del ?></p>
                                    </div>

                                    <div class="position-relative">
                                        <div class="votes-to-win summary-candidate__bar">
                                            1968 to win
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar w-25" style="<?php echo $background_style; ?>" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <?php
                            }
                        }
                    } ?>
        </div> -->

        <div class="row mt-4">
            <?php
            foreach ($can_del as $party) {
                // Extract party ID
                $party_id = $party['pId'];
                // Determine the background color based on party ID
                $background_style = ($party_id == "GOP") ? "background: #c20017 !important;" : "background: #1b4e81 !important;";
                $party_clr = ($party_id == "GOP") ? "color: #c20017 !important;" : "";

                //     $del_counts = '<div class="d-flex justify-content-between align-items-center">
                //     <h4 class="summary__title fw-extrabold">' . "</br> Party: $party_id\n" . '</h4>

                //     <div class="summary_delegates_remaining text-white fw-extrabold" style="' . $background_style . '">
                //         ' . ($party_id == "Dem" ? "$dneed (Dem) " : "") . ($party_id == "GOP" ? "$dneed (Gop) " : "") . '
                //         Delegates Left
                //     </div>
                // </div>';
                // Print party ID
                // echo "</br> Party: $party_id\n";
                // Loop counter
                $counter = 0;
                // Loop through candidates in the party
                foreach ($party['Cand'] as $candidate) {

                    // Increment the counter
                    $counter++;
                    // Print candidate details for the first two candidates in each party
                    $candidate_del = $candidate['dTot'];
                    $candidate_name = $candidate['cName'];
                    $dToBeChosen = $party['dToBeChosen'];
                    $dNeed = $party['dNeed'];
                    $dVotes = $party['dVotes'];

                    $del_counts = '<div class="d-flex justify-content-between align-items-center">
                <h4 class="summary__title fw-extrabold">' . "</br> Party: $party_id\n" . '</h4>
            
                <div class="summary_delegates_remaining text-white fw-extrabold" style="' . $background_style . '">
                    ' . ($party_id == "Dem" ? number_format($dToBeChosen) : "") . ($party_id == "GOP" ? number_format($dToBeChosen) : "") . '
                    Delegates Left
                </div>
            </div>';
                    // echo $counter . "</br>";
                    if ($party_id == 'Dem') {
                        $cdel[] = $candidate_del;
                        rsort($cdel);

                        if (($candidate_del == $cdel[0]) || (($candidate_del == $cdel[1]) && $candidate_name == 'Phillips')) {
            ?>
                            <div class="col-6">
                                <?php if (($candidate_del == $cdel[0]) || (($candidate_del == $cdel[1]) && $candidate_name == 'Phillips')) {
                                    //echo $candidate_name; 
                                ?>
                                    <div class="col-12">
                                        <?php echo $del_counts ?>
                                        <div class="d-flex justify-content-between align-items-center gap-2 mt-2">
                                            <img src="assets/images/joe-biden.png" alt="joe-biden" class="w-100 h-100 object-fit-contain summary-candidate__image">

                                            <div class="w-100 ms-1">
                                                <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                                                    <h4 class="summary-candidate__name fw-extrabold m-0 text-black"><?php echo "$candidate_name\n"; ?></h4>
                                                    <p class="summary-candidate__count fw-extrabold m-0" style="<?php echo $party_clr; ?>">
                                                        <?php echo $candidate_del ?></p>
                                                </div>

                                                <div class="position-relative">
                                                    <!-- <?php
                                                            if ($candidate_del == $cdel[0]) {
                                                            ?>
                                                        <div class="votes-to-win">
                                                            1968 to win
                                                        </div>
                                                    <?php
                                                            }
                                                    ?> -->

                                                    <div class="<?php
                                                                if ($candidate_del == $cdel[0]) {
                                                                ?>votes-to-win<?php
                                                                            } else {
                                                                                ?>
                                                                                summary-candidate__bar
                                                                                <?php
                                                                            }
                                                                                ?>">
                                                        <?php
                                                        if ($candidate_del == $cdel[0]) echo $dNeed . " to win"
                                                        ?>
                                                    </div>

                                                    <div class="progress">
                                                        <?php
                                                        $value = $candidate_del;
                                                        $maxValue = $dVotes;
                                                        // echo $value;
                                                        // echo $maxValue;
                                                        $percentage = ($value / $maxValue) * 100;

                                                        $cand_del_bar = 'width: ' . $percentage . '% !important;';
                                                        ?>

                                                        <div class="progress-bar" style="<?php echo $cand_del_bar . $background_style; ?>" role="progressbar" aria-valuenow="<?php echo $value; ?>" aria-valuemin="100" aria-valuemax="<?php echo $maxValue; ?>"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                            </div>
                        <?php
                        }
                    } else {
                        $gdel[] = $candidate_del;
                        rsort($gdel);
                        if (($candidate_del == $gdel[0]) || ($candidate_del == $gdel[1])) {
                            //echo $candidate_name;
                        ?>
                            <div class="col-6">
                                <?php echo $del_counts ?>

                                <div class="d-flex justify-content-between align-items-center gap-2 mt-2">
                                    <img src="assets/images/joe-biden.png" alt="joe-biden" class="w-100 h-100 object-fit-contain summary-candidate__image">

                                    <div class="w-100 ms-1">
                                        <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                                            <h4 class="summary-candidate__name fw-extrabold m-0 text-black"><?php echo "$candidate_name\n"; ?></h4>
                                            <p class="summary-candidate__count fw-extrabold m-0" style="<?php echo $party_clr; ?>">
                                                <?php echo $candidate_del ?></p>
                                        </div>

                                        <div class="position-relative">
                                            <!-- <?php
                                                    if ($candidate_del == $cdel[0]) {
                                                    ?>
                                                        <div class="votes-to-win">
                                                            1968 to win
                                                        </div>
                                                    <?php
                                                    }
                                                    ?> -->

                                            <div class="<?php
                                                        if ($candidate_del == $gdel[0]) {
                                                        ?>votes-to-win<?php
                                                                    } else {
                                                                        ?>
                                                                                summary-candidate__bar
                                                                                <?php
                                                                            }
                                                                                ?>">
                                                <?php
                                                if ($candidate_del == $gdel[0]) echo $dNeed . " to win"
                                                ?>
                                            </div>

                                            <div class="progress">
                                                <?php
                                                $value = $candidate_del;
                                                $maxValue = $dVotes;
                                                // echo $value;
                                                // echo $maxValue;
                                                $percentage = ($value / $maxValue) * 100;

                                                $cand_del_bar = 'width: ' . $percentage . '% !important;';
                                                ?>

                                                <div class="progress-bar" style="<?php echo $cand_del_bar . $background_style; ?>" role="progressbar" aria-valuenow="<?php echo $value; ?>" aria-valuemin="100" aria-valuemax="<?php echo $maxValue; ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    // // echo $party_id;
                    // var_dump($cdel);
                    // foreach($cdel as $aa){
                    //     // echo $aa.'<br/>';
                    // }
                    // if (
                    //     $candidate_name === 'Phillips'
                    //     || $counter == 2
                    // ) {
                    ?>

            <?php
                    // }
                }
            } ?>
        </div>

    </div>



    <script src="assets/js/Bootstrap.js"></script>
</body>

</html>