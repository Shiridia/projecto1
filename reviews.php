<!DOCTYPE html>
<html lang="en">
<title>Dylan and Huy's Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-blue w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px solid rgb(110, 229, 245)">Close Menu</a>
  <div class="w3-container">
       <h3 class="w3-padding-64"><b>Dylan and Huy's Website
        <h4><p id="date"></p>
      <script>
	
	var currentDate = new Date(),
	    month = currentDate.getMonth() + 1,
      day = currentDate.getDate(),
      year = currentDate.getFullYear();
  document.write(month + "/" + day + "/" + year)
  </script>
  <br>
  <script>
   var currentTime = new Date(),
      hours = currentTime.getHours(),
      minutes = currentTime.getMinutes();

	if (minutes < 10) {
	 minutes = "0" + minutes;
  }

	var suffix = "AM";
	if (hours >= 12) {
    suffix = "PM";
    hours = hours - 12;
	}
	if (hours == 0) {
	 hours = 12;
	}

	document.write(hours + ":" + minutes + " " + suffix);
      </script>
      </h4></b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="services.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact Us</a>
    <a href="reviews.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Reviews</a>
    <a onclick="document.body.style.backgroundColor = '#88CBFF'; "class="w3-bar-item w3-button w3-hover-white">Change Background To Light Blue!</button></a>
    <a onclick="document.body.style.backgroundColor = '#FFFFFF'; "class="w3-bar-item w3-button w3-hover-white">Change to White!</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>Explore With Us!</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">


<body>

  <!-- Reviews -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Reviews!</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <h3>Here are some reviews people have posted!</h3>
 
    </p>
  </div>

<div class='w3-row-padding w3-grayscale'>
<?php
$servername = getenv('IP');
$username = "shiridia";
$password = "";
$dbname = "review";
$dbport = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, rating, message FROM reviews";
$result = mysqli_query($conn, $sql);

if ($result) {

  while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
      echo "<div class='w3-col m4 w3-margin-bottom'>
      <div class='w3-light-grey'>
        <div class='w3-container'>
          <h3>" . $row["name"] . "</h3>
          <p class='w3-opacity'>" . $row["rating"] . "/10</p>
          <p>" . $row["message"] . "</p>
        </div>
      </div>
    </div>";
  }
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
</div>
  
 
  
