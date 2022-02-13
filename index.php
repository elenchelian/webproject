<!DOCTYPE html>
<html>
<title>Insurance Policy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img/bg1.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="img/logo.png" alt="logo" style="width:20%"/></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-th"></i> TEAM</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LOGIN</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Getting insurance is <strong> YOUR </strong> responsibility to your family and loved once. INSURANCE MATTERS.</span><br>
    <span class="w3-large">Nothing is impossible; the word itself says ‘I’m possible!’ — Audrey Hepburn</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more about us</a></p>
  </div>

</header>

<!-- About Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large"><strong>Secrets about your insurance policies</strong></p>
  <p class="w3-center w3-large">Approach us and we shall reveal the truth behind your insurance policies</p>
  <p class="w3-center w3-large">Why you should approach us?</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-user-secret w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Professional</p>
      <p>Professional Insurance Advisors are HERE!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-money w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Stable Finance</p>
      <p>Financial planners and Risk Management consultants are AVAILABLE to help you plan your future.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-shield  w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Shield</p>
      <p>Protect your loved ones from potential financial risks</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Advices and seminars are completely FREE!</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">MEET THE TEAM</h3>
  <p class="w3-center w3-large">The pillar of this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-dark-grey">
        <img src="img/team11.png" alt="team1" style="width:100%"/>
        <div class="w3-container" style="padding:20px 16px">
          <!-- <img src="/img/team1.jpg" alt="Tony" style="width:100%"/> -->
          <h3><b>Tony Well</b></h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Making major corporate decisions, managing the overall operations and resources of a company.</p>
          <br>
          <br>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/team12.png" alt="team2" style="width:100%"/>
        <div class="w3-container" style="padding:20px 16px">
          <h3><b>Michelle Moses</b></h3>
          <p class="w3-opacity">Actuary</p>
          <p>Apply math and calculate premiums, forecast potential impact of catastrophes, analyze insurance rates for cars, homes, businesses and belongings.</p>
          <br>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-dark-grey">
        <img src="img/team13.png" alt="team3" style="width:100%">
        <div class="w3-container" style="padding:20px 16px">
          <h3><b>Sam Smith</b></h3>
          <p class="w3-opacity">Marketing Representative</p>
          <p>Create marketing strategies, conduct market research, develop brand positioning and promotional materials to develop and deliver products and services to meet customer needs.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/team14.png" alt="team4" style="width:100%">
        <div class="w3-container" style="padding:20px 16px">
          <h3><b>Wendy Kim</b></h3>
          <p class="w3-opacity">Loss Control Specialist</p>
          <p> Inspect and identify potential risks related to fire, crime, liability or accidents, understand large commercial and manufacturing risks where there are complex processes and many exposures to loss.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">25+</span>
    <br>Collaborators
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">250+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">500+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">750+</span>
    <br>Meetings
  </div>
</div>


<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Gather all the information regarding your insurance policies<br>
      and deliver it to you with detailed explaination</p>
      <p>Make you feel safe and secure. Plan your expenses wisely<br>
      Be a guidance to make your future BETTER!</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-user-secret w3-margin-right"></i>Confidentiality</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-lock w3-margin-right"></i>Safe and Secured</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-handshake-o w3-margin-right"></i>Guaranteed Future</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:80%">80%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h4 class="card-title">Seminar List</h4>

  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>TOPIC</th>
          <th>DATE</th>
          <th>TIME</th>
          <th>VENUE</th>

        </tr>
      </thead>
      <tbody>
        <?php   // LOOP TILL END OF DATA
        $conn = mysqli_connect("localhost", "root", "", "insurance");
        $sql_member = "SELECT * from seminar ORDER BY id ASC;";
        $result_member = $conn-> query($sql_member);
        while($row =mysqli_fetch_array($result_member,MYSQLI_ASSOC)){
                                 $id=$row['id'];
                                 $topic=$row['topic'];
                                 $date=$row['date'];
                                 $time=$row['time'];
                                 $venue=$row['venue'];

         ?>
        <tr>
          <td><?php echo $id;?></td>
          <td><?php echo $topic;?></td>
          <td><?php echo $date;?></td>
          <td><?php echo $time;?></td>
          <td><?php echo $venue;?></td>

        </tr>
        <?php
            }
         ?>
      </tbody>
    </table>
    <br><br>
    <div style="align:center">
      <form method="POST" action="registration1.php">
        <button class="w3-button w3-green" type="submit"> REGISTER FOR THE SEMINAR </button>
      </form>
  </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Kuala Lumpur, Malaysia</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +60 167849256</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: insurancemail@gmail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
