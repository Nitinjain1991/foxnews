<!-- <?php
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
        usort($electionCalendar['EventInformation'], function ($a, $b) {
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

        ?> -->



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2024 Presidential Election Calendar: Primary, Caucus &amp; Event Dates</title>

    <link href="assets/css/Bootstrap.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

        * {
            scroll-behavior: smooth;
            font-family: "Oswald", sans-serif;
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

        .cal-custom-container {
            max-width: 1220px;
            margin: 0px auto;
            padding: 32px 12px;
        }

        .cal-custom-container .page-title {
            font-size: 32px;
        }

        .expanded-content p {
            font-size: 14px;
            line-height: 1.5;
            font-style: normal;
            font-weight: normal;
            margin-bottom: 24px;
        }

        .collapse:not(.show) {
            display: block !important;
            max-height: 90px !important;
            overflow: hidden !important;
        }

        button.read-more {
            background: transparent !important;
            border: none !important;
            border-bottom: 1px solid black !important;
            font-style: normal;
            font-weight: light;
            font-size: 14px;
            text-transform: capitalize;
            position: relative;
        }

        .read-more[aria-expanded="true"],
        .read-more.collapsed {
            color: transparent;
        }

        .read-more.collapsed::before {
            content: "+ read all";
            position: absolute;
            top: 0px;
            left: 0px;
            color: black;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            text-transform: inherit;
        }

        .read-more[aria-expanded="true"]::before {
            content: "- view less";
            position: absolute;
            top: 0px;
            left: 0px;
            color: black;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            text-transform: inherit;
        }

        .upcoming-or-past {
            background: #f2f2f2;
            padding: 6px;
        }

        .upcoming-or-past .section-title {
            line-height: 35px;
            text-transform: capitalize;
            font-size: 24px;
        }

        .upcoming-or-past .link-back {
            border: none;
            line-height: 16px;
            -webkit-letter-spacing: 0.2px;
            -moz-letter-spacing: 0.2px;
            -ms-letter-spacing: 0.2px;
            letter-spacing: 0.2px;
            background: none;
            color: var(--jump-link-color, #3061ff);
            font-size: 16px;
        }

        .calender-month .month-title {
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            line-height: normal;
            text-transform: uppercase;
            margin-bottom: 0px;
        }

        .calender-month table td {
            height: 18px;
            width: 18px;
            font-size: 10px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        .calender-month .direction-arrow-left {
            position: absolute;
            top: 6px;
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .pointer {
            cursor: pointer;
        }

        .light-shade {
            color: #555555;
            background: #ebebeb;
            font-weight: bolder;
        }

        .dark-shade {
            color: #ffffff;
            background: #555555;
            font-weight: bolder;
        }

        .date-box {
            width: 25px;
            height: 25px;
            background: #555555;
            color: #ffffff;
            flex: none;
            font-size: 16px;
            font-weight: bold;
        }

        .state-name {
            font-size: 20px;
            line-height: 24px;
            margin-right: 8px;
            font-weight: 600;
            color: #2a2a2a;
        }

        .delegate-pill-gop {
            padding: 0 2px;
            border-radius: 2px;
            background: #d42f37;
            font-size: 14px;
        }

        .delegate-pill-dem {
            padding: 0 2px;
            border-radius: 2px;
            background: #009af4;
            font-size: 14px;
        }

        .delegates-label {
            font-size: 16px;
            font-weight: lighter;
            line-height: normal;
            font-style: normal;
            text-transform: capitalize;
        }

        .election-labels-list {
            font-size: 16px;
            font-weight: normal;
            line-height: 24px;
            font-style: normal;
        }

        .election-labels-dot {
            content: "";
            min-height: 4px;
            min-width: 4px;
            background-color: black;
            display: inline-block;
            margin-top: 10px;
            border-radius: 50%;
        }

        .callout-calendar {
            font-size: 13px;
            font-weight: 400;
            font-style: normal;
            line-height: normal;
        }
    </style>


</head>

<body>

    <section>
        <div class="cal-custom-container">
            <div class="d-flex align-items-center mb-2">
                <svg width="12" height="12" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" data-update-toggle="true" class="updating-animation me-1">
                    <path d="M9.63359 0.816406L8.61797 1.83203C7.73906 0.953125 6.52812 0.40625 5.2 0.40625C2.60234 0.40625 0.473437 2.45703 0.35625 5.01562C0.336719 5.15234 0.453906 5.25 0.590625 5.25H1.1375C1.25469 5.25 1.35234 5.17188 1.37187 5.03516C1.48906 3.02344 3.14922 1.42188 5.2 1.42188C6.25469 1.42188 7.21172 1.85156 7.89531 2.55469L6.84062 3.60938C6.68437 3.76562 6.80156 4 6.99687 4H9.80937C9.92656 4 10.0437 3.90234 10.0437 3.76562V0.972656C10.0437 0.777344 9.78984 0.660156 9.63359 0.816406ZM9.78984 5.25H9.24297C9.12578 5.25 9.02812 5.34766 9.00859 5.48438C8.89141 7.49609 7.23125 9.07812 5.2 9.07812C4.12578 9.07812 3.16875 8.66797 2.48516 7.96484L3.53984 6.91016C3.69609 6.75391 3.57891 6.5 3.38359 6.5H0.590625C0.453906 6.5 0.35625 6.61719 0.35625 6.73438V9.54688C0.35625 9.74219 0.590625 9.85938 0.746875 9.70312L1.7625 8.6875C2.64141 9.56641 3.85234 10.0938 5.2 10.0938C7.77812 10.0938 9.90703 8.0625 10.0242 5.50391C10.0437 5.36719 9.92656 5.25 9.78984 5.25Z" fill="#000000" class="jsx-404944366"></path>
                </svg>
                <p class="mb-0 ms-1 fw-light    ">Last update Feb. 14, 11:59 AM ET</p>
            </div>
            <h1 class="page-title mt-0 mb-4 fw-semibold">2024 Primary Elections Calendar</h1>

            <div class="expanded-content">
                <div class="collapse" id="collapseWidthExample">
                    <p>The Republican presidential primary began on Jan. 15 with the Iowa caucuses followed by New Hampshire. Former President Donald Trump won both contests.</p>
                    <p>In a bid to make South Carolina's Feb. 3 vote the first Democratic contest, the Democratic National Committee told candidates not to put their names on the New Hampshire ballot and didn't hold a caucus in Iowa on the same day. President Joe Biden won the New Hampshire primary as a write-in candidate.</p>
                    <p>The South Carolina Republican primary will be held separately, on Feb. 24.</p>
                    <p>The first big multistate contest will be on Super Tuesday on March 5, when 16 states and one territory will vote. The final states to hold presidential primary contests will vote in June. </p>
                    <p>Most states will also hold primaries for down-ballot contests, some on the same day as their presidential primary and others on different dates. </p>
                    <p class="mb-0">The Republican National Convention will take place in Milwaukee from July 15 to July 18. The Democratic National Convention will be held in Chicago from Aug. 19 to Aug. 22.</p>
                </div>
                <button class="mt-2 read-more" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    + read all
                </button>

            </div>

            <div class="cal-container row">
                <!-- main column -->
                <div class="col-9">
                    <div class="upcoming-or-past d-flex align-items-center gap-2 mt-5">
                        <span class="section-title fw-semibold mb-0">Upcoming</span>
                        <a href="" class="link-back">Skip to Past Dates</a>
                    </div>

                    <!-- from february month -->
                    <div class="row mt-3 position-relative">
                        <div class="col-2">
                            <div class="calender-month position-sticky" style="top: 20px;">
                                <h4 class="month-title">FEBRUARY</h4>
                                <div class="position-relative">
                                    <svg class="direction-arrow-left pointer " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.33398" y="1.33325" width="13.3333" height="0.666667" fill="black"></rect>
                                        <path d="M11.8626 7.66675L8.33403 4.13815L8.33403 14.6667L7.66737 14.6667L7.66737 4.13815L4.0007 7.66675L3.5293 7.19534L8.0007 3.00008L12.334 7.19534L11.8626 7.66675Z" fill="black"></path>
                                    </svg>
                                </div>

                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td class="light-shade">3</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>5</td>
                                            <td class="light-shade">6</td>
                                            <td>7</td>
                                            <td class="light-shade">8</td>
                                            <td>9</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td class="dark-shade">24</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>26</td>
                                            <td class="dark-shade">27</td>
                                            <td>28</td>
                                            <td>29</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-10 border-start" style="border-color: black !important;">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex align-items-start gap-2 h-100">
                                        <div class="date-box d-flex align-items-center justify-content-center">24</div>

                                        <div class="d-flex flex-column justify-content-between h-100 row-gap-2">
                                            <div class="d-flex flex-column row-gap-2">
                                                <span class="state-name">South Carolina</span>

                                                <div class=" d-flex align-items-center gap-2">
                                                    <div class="delegate-pill-gop text-white">R 50</div>
                                                    <span class="delegates-label">delegates</span>
                                                </div>

                                                <p class="election-labels-list mb-0 d-flex align-items-start gap-2">
                                                    <span class="election-labels-dot"></span>
                                                    Republican Presidential Primary
                                                </p>
                                            </div>

                                            <a href="" class="callout-calendar d-flex align-items-center gap-2 text-decoration-none" data-icid="elections_calendar">Plan your vote in S.C.
                                                <svg width="20" height="20" viewBox="0 0 14 13" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="jsx-3116304872 callout-arrow clear-blue">
                                                    <path d="M7.875 9.63777L10.9625 6.77079L1.75 6.77079L1.75 6.22913L10.9625 6.22913L7.875 3.24996L8.28748 2.86694L11.9583 6.49996L8.28748 10.0208L7.875 9.63777Z" class="jsx-3116304872"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="d-flex align-items-start gap-2 h-100">
                                        <div class="date-box d-flex align-items-center justify-content-center">27</div>

                                        <div class="d-flex flex-column justify-content-between h-100 row-gap-2">
                                            <div class="d-flex flex-column row-gap-2">
                                                <span class="state-name">Michigan</span>

                                                <div class=" d-flex align-items-center gap-2">
                                                    <div class="delegate-pill-dem text-white">D 117</div>
                                                    <div class="delegate-pill-gop text-white">R 50</div>
                                                    <span class="delegates-label">delegates</span>
                                                </div>

                                                <p class="election-labels-list mb-0 d-flex align-items-start gap-2">
                                                    <span class="election-labels-dot"></span>
                                                    Presidential Primary
                                                </p>
                                            </div>

                                            <a href="" class="callout-calendar d-flex align-items-center gap-2 text-decoration-none" data-icid="elections_calendar">Plan your vote in S.C.
                                                <svg width="20" height="20" viewBox="0 0 14 13" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="jsx-3116304872 callout-arrow clear-blue">
                                                    <path d="M7.875 9.63777L10.9625 6.77079L1.75 6.77079L1.75 6.22913L10.9625 6.22913L7.875 3.24996L8.28748 2.86694L11.9583 6.49996L8.28748 10.0208L7.875 9.63777Z" class="jsx-3116304872"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- march month -->
                    <div class="row mt-5 position-relative">
                        <div class="col-2">
                            <div class="calender-month position-sticky" style="top: 20px;">
                                <h4 class="month-title">march</h4>
                                <div class="position-relative">
                                    <svg class="direction-arrow-left pointer " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.33398" y="1.33325" width="13.3333" height="0.666667" fill="black"></rect>
                                        <path d="M11.8626 7.66675L8.33403 4.13815L8.33403 14.6667L7.66737 14.6667L7.66737 4.13815L4.0007 7.66675L3.5293 7.19534L8.0007 3.00008L12.334 7.19534L11.8626 7.66675Z" fill="black"></path>
                                    </svg>
                                </div>

                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td class="light-shade">3</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>5</td>
                                            <td class="light-shade">6</td>
                                            <td>7</td>
                                            <td class="light-shade">8</td>
                                            <td>9</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td class="dark-shade">24</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>26</td>
                                            <td class="dark-shade">27</td>
                                            <td>28</td>
                                            <td>29</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-10 border-start" style="border-color: black !important;">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex align-items-start gap-2 h-100">
                                        <div class="date-box d-flex align-items-center justify-content-center">24</div>

                                        <div class="d-flex flex-column justify-content-between h-100 row-gap-2">
                                            <div class="d-flex flex-column row-gap-2">
                                                <span class="state-name">South Carolina</span>

                                                <div class=" d-flex align-items-center gap-2">
                                                    <div class="delegate-pill-gop text-white">R 50</div>
                                                    <span class="delegates-label">delegates</span>
                                                </div>

                                                <p class="election-labels-list mb-0 d-flex align-items-start gap-2">
                                                    <span class="election-labels-dot"></span>
                                                    Republican Presidential Primary
                                                </p>
                                            </div>

                                            <a href="" class="callout-calendar d-flex align-items-center gap-2 text-decoration-none" data-icid="elections_calendar">Plan your vote in S.C.
                                                <svg width="20" height="20" viewBox="0 0 14 13" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="jsx-3116304872 callout-arrow clear-blue">
                                                    <path d="M7.875 9.63777L10.9625 6.77079L1.75 6.77079L1.75 6.22913L10.9625 6.22913L7.875 3.24996L8.28748 2.86694L11.9583 6.49996L8.28748 10.0208L7.875 9.63777Z" class="jsx-3116304872"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="d-flex align-items-start gap-2 h-100">
                                        <div class="date-box d-flex align-items-center justify-content-center">27</div>

                                        <div class="d-flex flex-column justify-content-between h-100 row-gap-2">
                                            <div class="d-flex flex-column row-gap-2">
                                                <span class="state-name">Michigan</span>

                                                <div class=" d-flex align-items-center gap-2">
                                                    <div class="delegate-pill-dem text-white">D 117</div>
                                                    <div class="delegate-pill-gop text-white">R 50</div>
                                                    <span class="delegates-label">delegates</span>
                                                </div>

                                                <p class="election-labels-list mb-0 d-flex align-items-start gap-2">
                                                    <span class="election-labels-dot"></span>
                                                    Presidential Primary
                                                </p>
                                            </div>

                                            <a href="" class="callout-calendar d-flex align-items-center gap-2 text-decoration-none" data-icid="elections_calendar">Plan your vote in S.C.
                                                <svg width="20" height="20" viewBox="0 0 14 13" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="jsx-3116304872 callout-arrow clear-blue">
                                                    <path d="M7.875 9.63777L10.9625 6.77079L1.75 6.77079L1.75 6.22913L10.9625 6.22913L7.875 3.24996L8.28748 2.86694L11.9583 6.49996L8.28748 10.0208L7.875 9.63777Z" class="jsx-3116304872"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-3"></div>
        </div>
        </div>
    </section>








    <script src="assets/js/Bootstrap.js"></script>
</body>

</html>