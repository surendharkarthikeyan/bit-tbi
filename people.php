<?php include("header.php") ?>

<html>

<head>
  <title>PEOPLE TBI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/people.css">
</head>
<style>
  .facility-heading {
    font-size: 26px;
    background: linear-gradient(90deg, #321575 0%, #FF057C 100%);
    -webkit-background-clip: text;
    color: transparent;
    /* padding-bottom: 20px; */
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

  .fac-heading {
    font-size: 18px;
    background: linear-gradient(90deg, #321575 0%, #FF057C 100%);
    -webkit-background-clip: text;
    color: transparent;
    /* padding-bottom: 20px; */
    width: 100%;
    text-align: center;
  }

  .container2 {
    margin-bottom: 40px;
  }

  body {
    background-image: url("https://www.transparenttextures.com/patterns/white-wall-3.png");
  }
</style>

<body>
  <h2 class="facility-heading">PEOPLE OF TBI</h2>

  <div class="container2" style="overflow-x:auto;">
    <!-- <table id="myTable">
        <tr>
          <th class="one">Photo</th>
          <th class="one">Name</th>
          <th class="one">Qualification</th>
          <th class="one">Designation</th>
          <th class="one">E- Mail	</th>
          <th class="one">Activities</th>
          
        </tr>
        <tr>
          <td><img src="assets/img/p1.jpg" class="avatar1" alt="Profile-Image"></td>
          <td class="onee">Dr Balakrishnaraja R</td>
          <td class="onee">B.Tech., M.Tech., PhD.</td>
          <td class="onee">Principal Scientific Officer</td>
          <td class="onee">balakrishnarajar@bitsathy.ac.in</td>
          <td class="onee">Primary mentor, Collaborations, Policy & Strategy implementations and Techno commercial consultation.</td>
      
        </tr>
        <tr>
        <td> <img src="assets/img/p2.jpg" class="avatar1" alt="Profile-Image"></td>
          <td class="two">Ms K Thenmozhi</td>
          <td class="two">B.E. Agricultural Engineering</td>
          <td class="two">Young Professional</td>
          <td class="two">thenmoozhiag17@bitsathy.ac.in</td>
          <td class="two">Facility maintenance, Method Development & Testing events etc.</td>
        
        </tr>
      </table> -->
    <h2 class="fac-heading">Our Mentors</h2>
    <table id="myTable">
      <tr>
        <th class="one">Photo</th>
        <th class="one">Name</th>
        <th class="one">Qualification</th>
        <th class="one">Designation</th>
        <th class="one">E- Mail </th>
        <th class="one">Activities</th>

      </tr>
      <tr>
        <td><img src="assets/img/mem1.jpg" class="avatar1" alt="Profile-Image"></td>
        <td class="onee">Dr Tamilselvi S</td>
        <td class="onee">B Sc, M Sc, M.Phil,Ph.D</td>
        <td class="onee">Associate Professor and HOD Incharge,<br>Department of Bio-Technology, <br>BIT Sathyamangalam.</td>
        <td class="onee">tamilselvis@bitsathy.ac.in</td>
        <td class="onee">Ideation & Training</td>

      </tr>
      <tr>
        <td><img src="assets/img/mem2.jpg" class="avatar1" alt="Profile-Image"></td>
        <td class="onee">Dr Kannan K P</td>
        <td class="onee">B.Sc,M.Sc,M.Phil,Ph.D</td>
        <td class="onee">Associate Professor,<br>Department of Bio-Technology, <br>BIT Sathyamangalam.</td>
        <td class="onee">kannankp@bitsathy.ac.in</td>
        <td class="onee">Ideation & Training</td>

      </tr>
      <tr>
        <td><img src="assets/img/p3.jpg" class="avatar1" alt="Profile-Image"></td>
        <td class="onee">Dr V Chelladurai</td>
        <td class="onee">B.E,M.S.,Ph.D</td>
        <td class="onee">Associate Professor and HOD,<br>Department of Agricultural Engineering, <br>BIT Sathyamangalam.</td>
        <td class="onee">chelladurai@bitsathy.ac.in</td>
        <td class="onee">Ideation & Training</td>

      </tr>
      <tr>
        <td><img src="assets/img/mem4.jpg" class="avatar1" alt="Profile-Image"></td>
        <td class="onee">Dr M Vasudevan</td>
        <td class="onee">B.Tech,M.Tech,Ph.D</td>
        <td class="onee">Assistant Professor Level III and Head, <br>Dept. of Civil Engineering, <br>BIT, Sathyamangalam.</td>
        <td class="onee">vasudevan@bitsathy.ac.in</td>
        <td class="onee">Ideation & Training</td>

      </tr>
      <tr>
        <td><img src="assets/img/mem5.jpg" class="avatar1" alt="Profile-Image"></td>
        <td class="onee">Dr Sivaraman P</td>
        <td class="onee">BE, M.Tech, Ph.D</td>
        <td class="onee">Associate Professor and Head, <br>Department of Electrical & Electronics Engineering, <br>BIT Sathyamangalam.</td>
        <td class="onee">sivaramanpsr@bitsathy.ac.in</td>
        <td class="onee">Ideation & Training</td>

      </tr>
      <tr>
        <td><img src="assets/img/mem6.jpg" class="avatar1" alt="Profile-Image"></td>
        <td class="onee">Dr Ganesh Babu C</td>
        <td class="onee">BE, ME, Ph.D</td>
        <td class="onee">Professor and Head, <br>Department of Electronics & Instrumentation Engineering, <br>BIT Sathyamangalam</td>
        <td class="onee">ganeshbabuc@bitsathy.ac.in</td>
        <td class="onee">Ideation & Training</td>

      </tr>
    </table>
  </div>
  <!-- <script>// Get the table element
// Get the table element
var table = document.getElementById("myTable");

// Get all the rows in the table
var rows = table.getElementsByTagName("tr");

// Loop through the rows and add a click event listener
for (var i = 0; i < rows.length; i++) {
  rows[i].addEventListener("click", function() {
    // Highlight the clicked row
    this.classList.toggle("selected");
  });
}

</script>-->






  <?php include("footer.php") ?>