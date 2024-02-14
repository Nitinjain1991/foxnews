<?php
$url = 'https://api.ap.org/v3/elections/2024-02-08'; //for all election dates
// API key
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
$json_data = json_encode($data);
$data = json_decode($json_data, true);
$races = ($data['races']);
echo $json_data;
function convertDateTime($dateTimeString)
{
    $dateTimeString = rtrim($dateTimeString, 'Z' . 'C');
    $dateTime = new DateTime($dateTimeString);
    $formattedDateTime = $dateTime->format('F j, Y \a\t g:i A T');
    return $formattedDateTime;
}
$lastUpdated = ($data['races'][0]['reportingUnits'][0]['lastUpdated']);
$formattedDateTime = convertDateTime($lastUpdated);
$resultsType = $races[0]['resultsType'];
$currYear = date("Y");

//2nd api delegates 

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

// Filter candidates by party
$dem_candidates = array_filter($data_del['delSum']['del'][0]['Cand'], function ($candidate) {
    return $candidate['cName'] !== 'No Preference' && $candidate['cName'] !== 'Noncommitted Delegate' && !isset($candidate['dropoutDate']);
});

$gop_candidates = array_filter($data_del['delSum']['del'][1]['Cand'], function ($candidate) {
    return $candidate['cName'] !== 'No Preference' && $candidate['cName'] !== 'Total Write-Ins' && $candidate['cName'] !== 'Uncommitted' && !isset($candidate['dropoutDate']);
});

// Sort Democratic candidates by total votes
usort($dem_candidates, function ($a, $b) {
    return $b['dTot'] - $a['dTot'];
});

// Sort Republican candidates by total votes
usort($gop_candidates, function ($a, $b) {
    return $b['dTot'] - $a['dTot'];
});

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

        <div class="row mt-4 pt-2">
            <div class="col-md-6 pe-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="summary__title fw-extrabold">Democrats</h4>

                    <div class="summary_delegates_remaining text-white fw-extrabold" style="<?php echo $background_style; ?>"><?php echo $data_del['delSum']['del'][0]['dToBeChosen']; ?>
                        Delegates Left</div>
                </div>
                <?php
                foreach (array_slice($dem_candidates, 0, 2) as $index => $candidate) : ?>
                    <div class="d-flex justify-content-between align-items-center gap-2 mt-4">
                        <img src="assets/images/joe-biden.png" alt="joe-biden" class="w-100 h-100 object-fit-contain summary-candidate__image">

                        <div class="w-100 ms-1">
                            <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                                <h4 class="summary-candidate__name fw-extrabold m-0 text-black"><?php echo $candidate['cName']; ?></h4>
                                <p class="summary-candidate__count fw-extrabold m-0" style="<?php echo $party_clr; ?>">
                                    <?php echo $candidate['dTot']; ?></p>
                            </div>


                            <div class="position-relative">
                                <div class="<?php if ($index == 0) { ?> votes-to-win <?php } else { ?>summary-candidate__bar <?php } ?> ">
                                    <?php if ($index == 0) {
                                        echo $data_del['delSum']['del'][0]['dNeed'] . " to win";
                                    } ?>
                                </div>
                                <?php
                                $width_per = (($candidate['dTot'] / $data_del['delSum']['del'][0]['dVotes']) * 100)
                                ?>
                                <div class="progress">
                                    <div class="progress-bar" style="background: #1b4e81 !important; width: <?php echo $width_per; ?>%;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-md-6 ps-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="summary__title fw-extrabold">Republicans</h4>

                    <div class="summary_delegates_remaining text-white fw-extrabold" style="background: #c20017 !important;"><?php echo $data_del['delSum']['del'][1]['dToBeChosen']; ?>
                        Delegates Left</div>
                </div>

                <?php foreach (array_slice($gop_candidates, 0, 2) as $index => $candidate) : ?>
                    <div class="d-flex justify-content-between align-items-center gap-2 mt-4">
                        <img src="assets/images/joe-biden.png" alt="joe-biden" class="w-100 h-100 object-fit-contain summary-candidate__image" style="<?php if ($data_del['delSum']['del'][1]['pId'] == "GOP") { ?>border-color:#c20017 !important;background:#ffeaec !important;<?php }; ?>">

                        <div class="w-100 ms-1">
                            <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                                <h4 class="summary-candidate__name fw-extrabold m-0 text-black"><?php echo $candidate['cName']; ?></h4>
                                <p class="summary-candidate__count fw-extrabold m-0" style="color: #c20017 !important;">
                                    <?php echo $candidate['dTot']; ?></p>
                            </div>


                            <div class="position-relative">
                                <div class="<?php if ($index == 0) { ?> votes-to-win <?php } else { ?>summary-candidate__bar <?php } ?> ">
                                    <?php if ($index == 0) {
                                        echo $data_del['delSum']['del'][1]['dNeed'] . " to win";
                                    } ?>
                                </div>

                                <?php
                                $width_per = (($candidate['dTot'] / $data_del['delSum']['del'][1]['dVotes']) * 100);
                                ?>

                                <div class="progress">
                                    <div class="progress-bar" style="background: #c20017 !important; width: <?php echo $width_per; ?>%;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>