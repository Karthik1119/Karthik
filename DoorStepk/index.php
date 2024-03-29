<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>DOOR STEP </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  .brand-name {
 font-family: 'Josefin Slab', serif;
 font-size: 47px;
 font-weight: bold;
 color: #444;
 text-decoration: none;
}
       #map {
        height: 400px;
        width: 100%;
       }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

            <a class="navbar-brand" rel="home" href="#" title="GIIGLES"><img style="max-width:45px; margin-top: -12px;"
             src="logo.png"></a>
             <a class="navbar-brand" href="#  ">GIGGLE</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#contact">COMPLAINT</a></li>
        <li><a href="track.php">TRACKING</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>DOOR STEP</h1> 
  <p>Public In Charge Of Change</p> 


  <img src="logo.png" class="img-rounded" width="230" height="230">
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>A group of passionate students of AMCEC started a team GIGGLES. The ideology of improvising the society has lead the team in creating this citizen friendly website.</h4><br>
      <p>This website solves any problems coming under the boundaries of Banglore, that includes BBMP, BESCOM, BWSSB, Pollution Control Board, BDA,Police, Senior Citizen & Child Help, Forest Department, Animal found in Human Territory and many more services.</p>
      <br>
      <!-- <button class="btn btn-default btn-lg" href="http://www.gigglesblogging.blogspot.com/">Get in Touch</button> -->
      <!-- <a onclick="www.gigglesblogging.blogspot.com" class="btn btn-default btn-lg" value="my Blog">Get in Touch</a> -->
     <a href="http://www.gigglesblogging.blogspot.com/">
    <button class="btn btn-default btn-lg">Get In Touch</button>
    </a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> To  Establish a Proper Communication Channel Between the Common-man and the Government Department.</h4><br>
      <h4><p><strong>VISION:</strong> To Resolve Common-Man Issues As Soon As Possible And Digitalisation Of The Public Services  department </h4><br></p>
      
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>

    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail" style="padding-top: 10px;">
      
        <!-- <img src="paris.jpg" alt="Paris" width="400" height="300"> -->
        <p><strong>Total number of Complaints Registered</strong></p>
        <p>NILL</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail" style="padding-top: 10px;">
        <!-- <img src="newyork.jpg" alt="New York" width="400" height="300"> -->
        <p ><strong>Total number of Complaints in Process</strong></p>
        <p>NILL</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail"  style="padding-top: 10px;">
        <!-- <img src="sanfran.jpg" alt="San Francisco" width="400" height="300"> -->
        <p><strong>Total number of Complaints solved</strong></p>
        <p>NILL</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">LOG A COMPLIANT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you as soon as possible.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore,Karnataka</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 73538 82873</p>
      <p><span class="glyphicon glyphicon-envelope"></span> gigglesblogging.blogspot.com</p>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="Number" type="number" required>
        </div>
        <div class="col-sm-6 form-group">
          <select class="selectpicker form-control" name="board" required>
            <option value="">Please Select The Associate</option>
            <optgroup label="BBMP">
              <option value="BBMP">garbage</option>
              <option value="BBMP">streetlight</option>
              <option value="BBMP">potholes</option>
              <option value="BBMP">dogs meance</option>
              <option value="BBMP">Others</option>
            </optgroup>
            <optgroup label="BESCOM">
              <option value="BESCOM">no power</option>
              <option value="BESCOM">transformer damage</option>
              <option value="BESCOM">hanging wire</option>
              <option value="BESCOM">meterbox change</option>
              <option value="BESCOM">Others</option>
            </optgroup>
            <optgroup label="BWSSB">
              <option value="BWSSB">no water</option>
              <option value="BWSSB">leaking underground pipes</option>
              <option value="BWSSB">sanitation</option>
              <option value="BWSSB">Others</option>              
            </optgroup>
            <optgroup label="Pollution control board">
              <option value="Pollution">lakes and river issues</option>
              <option value="Pollution">sound pollution</option>
              <option value="Pollution">air pollution</option>
              <option value="Pollution">Others</option>
            </optgroup>
             <optgroup label="Human Welfare">
              <option value="Welfare">sr.citzen</option>
              <option value="Welfare">physical handicap</option>
              <option value="Welfare">children</option>
              <option value="Welfare">women</option>
              <option value="Welfare">Others</option>
            </optgroup>
            <optgroup label="Forest Department">
              <option value="Forest">report a forest fire</option>
              <option value="Forest">animal intrusion</option>
              <option value="Forest">Others</option>
            </optgroup>
            <optgroup label="LPG Gas">
              <option value="lpg">gas leak</option>
              <option value="lpg">new connection</option>
              <option value="lpg">book a refill</option>
              <option value="lpg">change of address</option>
              <option value="lpg">Others</option>
            </optgroup>
              <option value="Police">Police-Report Crime</option>

          </select>

        </div>
      </div>

      <textarea class="form-control" id="address" name="address" placeholder="Write Your Address Here" rows="2" required></textarea><br>
      <textarea class="form-control" id="complaint" name="complaint" placeholder="Write Your Complaint Here" rows="5" required></textarea><br>

      <div class="col-sm-6 form-group">
        <label><input type="checkbox" name="check" value="check" > Check if its a public issue</label>
      </div>
      <div class="row"> 
        <div class="col-sm-12 form-group">
          <input class="btn btn-default pull-right" type="submit" name="submit" value="SUBMIT">
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doorstep";
$comp_id=$name=$complaint=$address=$email=$phone=$board=$pre='';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
  {
    // echo "string";
$sql="SELECT comp_id FROM complaints ORDER BY comp_id DESC LIMIT 1";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
    $pre= $row['comp_id'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check']) ) 
{
  $name = $_POST["name"];
  $email = $_POST["email"];
  $complaint = $_POST["complaint"];
  $address =$_POST["address"];
  $phone = $_POST["phone"];
  $board = $_POST["board"];

// echo $name.$complaint.$address.$email.$phone.$board;

// echo substr($pre, 0,8);
$d=date("Ymd");
if(substr($pre, 0,8)===$d)
  $comp_id=$pre+1;
else 
  $comp_id=$d*1000 +1;

$sql = "insert into complaints values ('$comp_id','$name','$complaint','$address','$email',$phone,'$board')";

if ($conn->query($sql) === TRUE) {
    echo "New complaint recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<!-- Add Google Maps -->
<!-- <div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx05wo7i_oZ7FtEGS7s3FRYFOUIpejZrI&callback=myMap">
</script> -->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp  AIzaSyCx05wo7i_oZ7FtEGS7s3FRYFOUIpejZrI
-->


  <div id="map"></div>
    <script>
       var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKeFn0wYXF-tgCVMxAaBJUGIMfkZod5Ls&callback=initMap">
    </script>

<footer class="container-fluid text-right">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up">TOP</span>
  </a>
  <p align="left">Copyright &copy; 2017 - All Rights Reserved</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>



</body>
</html>