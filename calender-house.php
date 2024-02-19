<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2024 HOUSE AND SENATE CALENDAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: "Kanit", sans-serif;
        }

        .calender-par {
            padding: 42px 0px;
        }

        .calender-custom-container {
            max-width: 1225px;
            margin: 0px auto;
            padding: 0px 12px;
        }

        .examiner-logo {
            max-width: 440px;
        }

        .calender-title {
            font-style: normal;
            font-size: 44px;
            line-height: normal;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .highlight-spec p {
            font-style: normal;
            font-size: 18px;
            line-height: normal;
        }

        .highlight-spec span {
            width: 36px;
            height: 24px;
            display: inline-block;
            background-color: #ef4a23;
        }

        .calender-month h4 {
            font-size: 24px;
            font-style: normal;
            line-height: normal;
            font-weight: normal;
            text-transform: capitalize;
        }

        .calender-month th,
        .calender-month td {
            text-transform: capitalize;
            font-size: 18px;
            font-style: normal;
            line-height: normal;
            font-weight: normal;
            text-align: center;
            padding: 4px 14px;
            /* border: 1px solid #d3d3d36e; */
        }

        .calender-month table {
            width: 100%;
        }

        .selected-senate {
            background-color: #75c275;
            color: white !important;
        }

        .selected-house {
            background-color: #602367;
            color: white !important;
        }

        .selected-in-sec {
            background-color: #ef4a23;
            color: white !important;
        }

        @media (max-width:575px) {
            .calender-par {
                zoom: 44%;
            }

            .reponse-structure-grid {
                grid-template-columns: auto auto !important;
                column-gap: 14px;
            }

            .highlight-spec-container {
                width: 75% !important;
            }
        }

        @media (min-width:576px) and (max-width:1023px) {
            .calender-par {
                zoom: 56%;
            }
        }

        @media (min-width:1024px) and (max-width:1299px) {
            .calender-par {
                zoom: 70%;
            }
        }

        @supports (-webkit-touch-callout: none) {
            @media (max-width:575px) {
                .calender-par {
                    zoom: 25%;
                }

                .reponse-structure-grid {
                    grid-template-columns: auto auto !important;
                }

                .calender-title {
                    font-size: 20px !important;
                }

                .calender-month th,
                .calender-month td {
                    font-size: 10px;
                }

                .calender-month h4 {
                    font-size: 20px;
                    margin-bottom: 4px !important;
                }

                .highlight-spec-container {
                    width: 100% !important;
                }

                .highlight-spec p {
                    font-size: 13px;
                }

                .examiner-logo {
                    max-width: 570px !important;
                }
            }
        }
    </style>
</head>

<body>


    <section class="calender-par">
        <div class="calender-custom-container">
            <div class="text-center">
                <img src="assets/images/houseCalendar.jpg" alt="house claender washington examiner news" class="examiner-logo object-fit-contain">
                <h1 class="calender-title text-uppercase text-black mt-4">2024 HOUSE AND SENATE CALENDAR</h1>
            </div>

            <div class="d-flex align-items-center justify-content-between w-50 mx-auto my-4 highlight-spec-container">
                <div class="highlight-spec d-flex align-items-center gap-2">
                    <span></span>
                    <p class="fw-normal m-0">Both in Session</p>
                </div>
                <div class="highlight-spec d-flex align-items-center gap-2">
                    <span style="background-color: #602367;"></span>
                    <p class="fw-normal m-0">House Only</p>
                </div>
                <div class="highlight-spec d-flex align-items-center gap-2">
                    <span style="background-color: #75c275;"></span>
                    <p class="fw-normal m-0">Senate Only</p>
                </div>
            </div>

            <div class="d-grid justify-content-md-between mt-5 row-gap-2 row-gap-md-4 reponse-structure-grid" style="grid-template-columns: auto auto auto;">
                <!-- january -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">January</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="selected-senate">8</td>
                                    <td class="selected-in-sec">9</td>
                                    <td class="selected-in-sec">10</td>
                                    <td class="selected-in-sec">11</td>
                                    <td class="selected-in-sec">12</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>15</td>
                                    <td class="selected-in-sec">16</td>
                                    <td class="selected-in-sec">17</td>
                                    <td class="selected-in-sec">18</td>
                                    <td class="selected-in-sec">19</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td class="selected-senate">22</td>
                                    <td class="selected-senate">23</td>
                                    <td class="selected-senate">24</td>
                                    <td class="selected-senate">25</td>
                                    <td class="selected-senate">26</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td class="selected-house">29</td>
                                    <td>30</td>
                                    <td>31</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- february -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">February</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="selected-in-sec">1</td>
                                    <td class="selected-senate">2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="selected-house">5</td>
                                    <td class="selected-in-sec">6</td>
                                    <td class="selected-in-sec">7</td>
                                    <td class="selected-senate">8</td>
                                    <td class="selected-senate">9</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>12</td>
                                    <td class="selected-house">13</td>
                                    <td class="selected-house">14</td>
                                    <td class="selected-house">15</td>
                                    <td class="selected-house">16</td>
                                    <td>17</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td class="selected-senate">26</td>
                                    <td class="selected-senate">27</td>
                                    <td class="selected-senate">28</td>
                                    <td class="selected-senate">29</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- march -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">march</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="selected-senate">1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>4</td>
                                    <td class=" selected-in-sec">5</td>
                                    <td class=" selected-in-sec">6</td>
                                    <td class=" selected-in-sec">7</td>
                                    <td class=" selected-in-sec">8</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class=" selected-in-sec">11</td>
                                    <td class=" selected-in-sec">12</td>
                                    <td class=" selected-in-sec">13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>18</td>
                                    <td class=" selected-in-sec">19</td>
                                    <td class=" selected-in-sec">20</td>
                                    <td class=" selected-in-sec">21</td>
                                    <td class=" selected-in-sec">22</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- april -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">april</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="selected-senate">8</td>
                                    <td class="selected-in-sec">9</td>
                                    <td class="selected-in-sec">10</td>
                                    <td class="selected-in-sec">11</td>
                                    <td class="selected-in-sec">12</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="selected-in-sec">15</td>
                                    <td class="selected-in-sec">16</td>
                                    <td class="selected-in-sec">17</td>
                                    <td class="selected-in-sec">18</td>
                                    <td class="selected-senate">19</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td class="selected-in-sec">29</td>
                                    <td class="selected-in-sec">30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- may -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">may</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="selected-in-sec">1</td>
                                    <td class="selected-in-sec">2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="selected-house">6</td>
                                    <td class="selected-in-sec">7</td>
                                    <td class="selected-in-sec">8</td>
                                    <td class="selected-in-sec">9</td>
                                    <td class="selected-senate">10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>13</td>
                                    <td class="selected-in-sec">14</td>
                                    <td class="selected-in-sec">15</td>
                                    <td class="selected-in-sec">16</td>
                                    <td class="selected-in-sec">17</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td class="selected-senate">20</td>
                                    <td class="selected-in-sec">21</td>
                                    <td class="selected-in-sec">22</td>
                                    <td class="selected-in-sec">23</td>
                                    <td class="selected-in-sec">24</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- june -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">june</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="selected-in-sec">3</td>
                                    <td class="selected-in-sec">4</td>
                                    <td class="selected-in-sec">5</td>
                                    <td class="selected-in-sec">6</td>
                                    <td class="selected-senate">7</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>10</td>
                                    <td class="selected-in-sec">11</td>
                                    <td class="selected-in-sec">12</td>
                                    <td class="selected-in-sec">13</td>
                                    <td class="selected-in-sec">14</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="selected-senate">17</td>
                                    <td class="selected-senate">18</td>
                                    <td>19</td>
                                    <td class="selected-senate">20</td>
                                    <td class="selected-senate">21</td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>24</td>
                                    <td class="selected-house">25</td>
                                    <td class="selected-house">26</td>
                                    <td class="selected-house">27</td>
                                    <td class="selected-house">28</td>
                                    <td>29</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- July -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">July</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="selected-in-sec">8</td>
                                    <td class="selected-in-sec">9</td>
                                    <td class="selected-in-sec">10</td>
                                    <td class="selected-in-sec">11</td>
                                    <td class="selected-senate">12</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td class="selected-house">22</td>
                                    <td class="selected-in-sec">23</td>
                                    <td class="selected-in-sec">24</td>
                                    <td class="selected-in-sec">25</td>
                                    <td class="selected-senate">26</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td class="selected-in-sec">29</td>
                                    <td class="selected-in-sec">30</td>
                                    <td class="selected-in-sec">31</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- august -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">august</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="selected-in-sec">1</td>
                                    <td class="selected-senate">2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
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
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- september -->
                <div class="col">
                    <div class="calender-month">
                        <h4 class="mb-3">september</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="selected-in-sec">9</td>
                                    <td class="selected-in-sec">10</td>
                                    <td class="selected-in-sec">11</td>
                                    <td class="selected-in-sec">12</td>
                                    <td class="selected-senate">13</td>
                                    <td>14</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="selected-senate">16</td>
                                    <td class="selected-in-sec">17</td>
                                    <td class="selected-in-sec">18</td>
                                    <td class="selected-in-sec">19</td>
                                    <td class="selected-in-sec">20</td>
                                    <td>21</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td class="selected-in-sec">23</td>
                                    <td class="selected-in-sec">24</td>
                                    <td class="selected-in-sec">25</td>
                                    <td class="selected-in-sec">26</td>
                                    <td class="selected-in-sec">27</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- october -->
                <div class="col mt-md-4">
                    <div class="calender-month">
                        <h4 class="mb-3">october</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- november -->
                <div class="col mt-md-4">
                    <div class="calender-month">
                        <h4 class="mb-3">november</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>11</td>
                                    <td class="selected-in-sec">12</td>
                                    <td class="selected-in-sec">13</td>
                                    <td class="selected-in-sec">14</td>
                                    <td class="selected-in-sec">15</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="selected-in-sec">18</td>
                                    <td class="selected-in-sec">19</td>
                                    <td class="selected-in-sec">20</td>
                                    <td class="selected-in-sec">21</td>
                                    <td class="selected-senate">22</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- december -->
                <div class="col mt-md-4">
                    <div class="calender-month">
                        <h4 class="mb-3">december</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>su</th>
                                    <th>mo</th>
                                    <th>tu</th>
                                    <th>we</th>
                                    <th>th</th>
                                    <th>fr</th>
                                    <th>sa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="selected-senate">2</td>
                                    <td class="selected-in-sec">3</td>
                                    <td class="selected-in-sec">4</td>
                                    <td class="selected-in-sec">5</td>
                                    <td class="selected-in-sec">6</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="selected-in-sec">9</td>
                                    <td class="selected-in-sec">10</td>
                                    <td class="selected-in-sec">11</td>
                                    <td class="selected-in-sec">12</td>
                                    <td class="selected-senate">13</td>
                                    <td>14</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="selected-in-sec">16</td>
                                    <td class="selected-in-sec">17</td>
                                    <td class="selected-in-sec">18</td>
                                    <td class="selected-in-sec">19</td>
                                    <td class="selected-senate">20</td>
                                    <td>21</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>