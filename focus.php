<?php include("header.php") ?>
<html>

<head>
  <title>FOCUS AREA</title>
</head>
<style>
  body {
    background-image: url("https://www.transparenttextures.com/patterns/white-wall-3.png");

  }

  .facility-heading {
    font-size: 26px;
    background: linear-gradient(90deg, #321575 0%, #FF057C 100%);
    -webkit-background-clip: text;
    color: transparent;
    padding-bottom: 20px;
    width: 100%;
    text-align: center;
    margin-top: 100px;
  }

  @media (max-width:1044px) {
    .facility-heading {
      margin-top: 120px;
    }
  }

  @media (max-width:582px) {
    .facility-heading {
      margin-top: 150px;
    }
  }

  @media (max-width:370px) {
    .facility-heading {
      margin-top: 185px;
    }
  }

  @media (max-width:302px) {
    .facility-heading {
      margin-top: 200px;
    }
  }

  .bodyContainer {
    padding: 10px 20% 50px 20%;

  }

  .main {
    height: 70%;
    width: 100%;
    margin-bottom: 50px;
  }

  .iconImage {
    height: 11%;
    width: 11%;
  }
</style>

<link rel="stylesheet" href="assets/css/focus.css">

<body class="back">
  <h2 class="facility-heading">FOCUS AREA</h2>
  <!-- <div class="container">
    <table id="myTable">

      <tr>
        <th class="one">Entry</th>
        <th class="one">Generic Category</th>
        <th class="one">Number</th>
      </tr>
      <tr>
        <td class="onee">01</td>
        <td class="onee">Health & Wellness products</td>
        <td class="onee">10</td>
      </tr>
      <tr>
        <td class="two">02</td>
        <td class="two">Home / Domestic products</td> 
        <td class="two">13</td>
      </tr>
      <tr>
        <td class="onee">03</td>
        <td class="onee">Agriculture facilitating products</td>
        <td class="onee">07</td>
      </tr>
      <tr>
        <td class="two">04</td>
        <td class="two">Industrial / Scientific aids</td>
        <td class="two">07</td>
      </tr>
      <tr>
        <td class="onee">05</td>
        <td class="onee">Detergents/ cosmetics</td>
        <td class="onee">07</td>
      </tr>
      <tr>
        <td class="two"></td>
        <td class="two">Total</td>
        <td class="two">44</td>

      </tr>

    </table>
  </div> -->


  <div class="bodyContainer">
    <div class="row">
      <div class="col-lg-4">
        <div class="main">
          <div class="single-icon-box icon-box-img-7">
            <div class="icon-box-content">
              <h6 class="iconbox-content-heading">
                <i class="fa fa-briefcase-medical"></i> Health & Wellness products
              </h6>
              <!-- <div class="iconbox-content-body">
                <p>3D printing is a process that builds objects layer by layer using materials like plastics or metals, enabling efficient and precise creation of physical items from digital designs.</p>

              </div> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="main">
          <div class="single-icon-box icon-box-img-8">
            <div class="icon-box-content">
              <h6 class="iconbox-content-heading">
                <img src="assets/img/homeIcon.png" alt="home" class="iconImage">
                </img>&nbsp;&nbsp;&nbsp;&nbsp;Home / Domestic products
              </h6>
              <!-- <div class="iconbox-content-body">
                <p>IoT is a network of smart devices with sensors and connectivity, enabling seamless data exchange for improved automation and efficiency in diverse applications.</p>
              </div> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="main">
          <div class="single-icon-box icon-box-img-9">
            <div class="icon-box-content">
              <h6 class="iconbox-content-heading"><i class="fas fa-tractor"></i> Agriculture facilitating products</h6>
              <!-- <div class="iconbox-content-body">
                <p>Robotics encompasses designing and operating robots for autonomous or guided tasks, integrating engineering and technology to achieve functions ranging from manufacturing to exploration.</p>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="main">
          <div class="single-icon-box icon-box-img-10">
            <div class="icon-box-content">
              <h6 class="iconbox-content-heading">
                <i class="fa fa-microscope"></i> Industrial / Scientific aids
              </h6>
              <!-- <div class="iconbox-content-body">
                <p>3D printing is a process that builds objects layer by layer using materials like plastics or metals, enabling efficient and precise creation of physical items from digital designs.</p>

              </div> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="main">
          <div class="single-icon-box icon-box-img-11">
            <div class="icon-box-content">
              <h6 class="iconbox-content-heading">
                <img src="assets/img/detergentIcon.png" alt="detergent" class="iconImage">
                </img>&nbsp;&nbsp;&nbsp;&nbsp;Detergents / cosmetics
              </h6>
              <!-- <div class="iconbox-content-body">
                <p>IoT is a network of smart devices with sensors and connectivity, enabling seamless data exchange for improved automation and efficiency in diverse applications.</p>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php") ?>