<?php include("header.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>bittbi.EQUIPMENTS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400" />
    <link rel="stylesheet" href="./assets/css/equip.css" />
    <link rel="stylesheet" href="assets/css/sel.css">
</head>
<style>
    .facility-heading {
        margin-top: 80px;
        font-size: 26px;
        background: linear-gradient(90deg, #321575 0%, #FF057C 100%);
        -webkit-background-clip: text;
        color: transparent;
        padding-bottom: 20px;

    }

    @media (max-width:582px) {
        .facility-heading {
            margin-top: 100px;
        }
    }

    @media (max-width:412px) {
        .facility-heading {
            margin-top: 120px;
        }
    }

    @media (max-width:369px) {
        .facility-heading {
            margin-top: 140px;
        }
    }

    @media (max-width:302px) {
        .facility-heading {
            margin-top: 160px;
        }
    }


    body {
        background-color: #5c008a;
        background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
        /* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
    }

    .image-container {
        flex: 1 0 auto;
        margin: 5px;
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
        display: flex;
        align-items: baseline;
        max-inline-size: 100%;
        block-size: auto;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
        margin-left: 15px;
    }

    .container {
        width: 100%;
        max-width: 960px;
        /* Or your desired max-width */
        margin: 0 auto;
        /* Center horizontally */
    }

    .content-body p {
        color: #000000;
        font-size: 17px;
        text-align: justify;
        margin-bottom: 25px;
    }

    .content-body {
        flex: 1 0 auto;
        /* Grow evenly within available space */
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        /* Allow items to wrap onto multiple lines */
    }

    .checklist {
        margin: 0;
        /* Remove inline padding */
    }
</style>

<body>
    <div class="icon-box-area pt-70 pb-70" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center feature-heading">
                    <h2 class="facility-heading">LIST OF LAB EQUIPMENTS</h2>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-66"> -->
                    <div class="content-body">
                        <div class="image-container">
                            <p class="checklist">Gas Chromatography (GC)</p>
                            <!-- <img src="../assets/img/b1.png" alt="Overall Image"> -->
                        </div>
                        <div class="image-container">
                            <p class="checklist">High Performance Thin Layer Chromatography (HPTLC)</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Sonicator</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">UV-Vis Spectrophotometer</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Ultra Purification Water System</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Autopipettors and Pipette -man Channel</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">PH Meter</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Incubator</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Colorimeter</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Shaker Incubator</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Deep freezer</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Fermentor (7 Ltrs.) - Autoclavable Benchtop</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Fermentor (3.7 Ltrs.) – Sterilizable in-situ Benchtop</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Viscometer with Temperature Probe</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Dynomill, Homogenizer</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Ultrasonic Processor</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">French Press</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Ice Flaking Machine</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Autoclave-Vertical</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Gas Analyzer</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Ultrasonic Processor</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Gene Pulser X-cell Total System with Gene Pulser / Micro Pulser</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Mastercycler EP Gradient</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Micro filtration</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Ultra filtration</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Immunology Lab</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Molecular Biology & Genetic Engineering Lab</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Downstream Processing & Protein Engineering Lab</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Bioprocess and Fermentation Lab</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Bioorganic and Biochemistry Lab</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Chemical Engineering Lab</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Instrumental Analysis Lab</p>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <!-- <div class="row">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-11">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Gas Chromatography (GC)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-12">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>High Performance Thin Layer Chromatography (HPTLC)</h6>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-13">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Sonicator</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Additional Section -->
            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-14">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>UV-Vis Spectrophotometer</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-15">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Ultra Purification Water System</h6>
                        </div>
                    </div>
                </div> -->

            <!-- <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-16">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Autopipettors and Pipette -man Channel</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-17">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>pH Meter</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-18">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Incubator</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-19">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Colorimeter</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-20">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Shaker Incubator</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-21">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Deep freezer</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-22">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Fermentor (7 Ltrs.) – Autoclavable Benchtop</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-23">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Fermentor (3.7 Ltrs.) – Sterilizable in-situ Benchtop</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-24">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Viscometer with Temperature Probe</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-25">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Dynomill, Homogenizer</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-26">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Ultrasonic Processor</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-27">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>French Press</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-28">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Ice Flaking Machine</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-29">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Autoclave-Vertical</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-30">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Gas Analyzer</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-31">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Gene Pulser X-cell Total System with Gene Pulser / Micro Pulser</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-32">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Mastercycler EP Gradient</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-33">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Micro filtration</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-34">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Ultra filtration</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-35">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Immunology Lab</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-36">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Molecular Biology & Genetic Engineering Lab</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-37">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Downstream Processing & Protein Engineering Lab</h6>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- 
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-38">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Bioprocess and Fermentation Lab</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-39">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Bioorganic and Biochemistry Lab</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-40">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Chemical Engineering Lab</h6>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <div class="single-icon-box icon-box-img-41">
                        <div class="icon-box-content1">
                            <h6 class="iconbox-content-heading1"><i class="fas fa-briefcase"></i>Instrumental Analysis Lab</h6>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End of Additional Section -->
        </div>
    </div>
</body>

<?php include("footer.php") ?>