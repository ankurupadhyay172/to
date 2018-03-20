<!DOCTYPE html>
<html>
<title>to-letService</title>
<link rel="icon" href="icon.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css?family=Raleway">
<link rel="stylesheet" href="drop.css">
 <link rel="stylesheet" href="css/style.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display:none}
</style>
<body class="w3-content w3-border-left w3-border-right" >
<?php 

$conn=mysqli_connect("localhost", "root", "", "house");



session_start();

if(isset($_GET['d']))
{
	$_SESSION["d"]=$_GET['d'];
}


$sql='SELECT * FROM rooms where id='. $_SESSION["d"] . '.';

$r=mysqli_query($conn, $sql);

?>
<?php 
//include_once('form.php');?>
  
<?php
//include_once('navigation.php');
?>
  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
    <h2 class="w3-text-green">The Apartment</h2>
	<?php
	
		
    if (isset($_GET['g']))
	{
		 echo '<div class="w3-display-container mySlides">';
		$j=$_GET['g'];
		echo '<img src="'.$j.'" style="width:100%;margin-bottom:-6px">';
		echo '<div class="w3-display-bottomleft w3-container w3-black"><p>'.$j.'</p></div></div>';
	}
	
	?>
	
	
	
	
    
  
   <?php 
  while($row=mysqli_fetch_assoc($r))
  {
	  
  
  echo '
  <div class=" w3-section">
    <div class="w3-col s3">
      <a href="to-let.php?g='.$row['img1'].'"> <img class="" src="'.$row['img1'].'"  style="width:100%;cursor:pointer" onclick="currentDiv('.$row['id'].')" title="Living room">
	 </a>
	 
  </div>
    
  </div>
  
  <div class=" w3-section">
    <div class="w3-col s3">
      <a href="to-let.php?g='.$row['img2'].'"> <img class="" src="'.$row['img2'].'"  style="width:100%;cursor:pointer" onclick="currentDiv('.$row['id'].')" title="Living room">
	 </a>
	 
  </div>
    
  </div>
  
  <div class=" w3-section">
    <div class="w3-col s3">
      <a href="to-let.php?g='.$row['img3'].'"> <img class="" src="'.$row['img3'].'"  style="width:100%;cursor:pointer" onclick="currentDiv('.$row['id'].')" title="Living room">
	 </a>
	 
  </div>
    
  </div>
  
  <div class=" w3-section">
    <div class="w3-col s3">
      <a href="to-let.php?g='.$row['img4'].'"> <img class="" src="'.$row['img4'].'"  style="width:100%;cursor:pointer" onclick="currentDiv('.$row['id'].')" title="Living room">
	 </a>
	 
  </div>
    
  </div>';}?>
  

  <div class="w3-container">
    <h4><strong>The space</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> Max people: 4</p>
        <p><i class="fa fa-fw fa-bath"></i> Bathrooms: 1</p>
        <p><i class="fa fa-fw fa-bed"></i> Bedrooms: 2</p>
      </div>
      
    </div>
    <hr>
    
    <h4><strong>Amenities</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-shower"></i> FAN</p>
        <p><i class="fa fa-fw fa-wifi"></i>LIGHT</p>
        <p><i class="fa fa-fw fa-tv"></i> WASHBASIN</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-cutlery"></i> Kitchen</p>
        <p><i class="fa fa-fw fa-thermometer"></i> Heating</p>
        <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
      </div>
    </div>
    <hr>
	
   	
 
    
   
    <h4><strong>Address </strong></h4>
    <?php
	$conn1=mysqli_connect("localhost","root","","marker");
	$sql1='select * from markers where id='. $_SESSION["d"] . '.';
	$r1=mysqli_query($conn1,$sql1);
	while($row1=mysqli_fetch_assoc($r1))
	{
		echo $row1['address'];
	}
	?>
	
	
	<hr>
    
	
	
    <h4><strong>Extra Info </strong></h4>
    <p>Our rooms is really clean and we like to keep it that way. Enjoy the lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    <hr>
    
    <h4><strong>Rules</strong></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	<p style="border:1px solid green;color:red">Plase read all the condition if any troble occar service provider is not responsible for that </p>
    <p>Subscribe to receive updates on available dates and special offers.</p>
	
	<input type="checkbox" name="agree" required>I Agree<br><br><br><br>
	
	

	
	
	
	
	
	<input type="submit" name="submit" class="w3-button w3-green w3-third" value="BOOK NOW"></form>
    
  </div>

  <hr>
  
  <!-- Contact -->
  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <i class="fa fa-map-marker" style="width:30px"></i> Udaipur, Rajasthan<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +91 151515<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
    <p>Questions? Go ahead, ask them:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
    <button type="submit" class="w3-button w3-green w3-third">Send a Message</button>
    </form>
	
  </div>
  
  <footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a href="shopping school" title="w3.CSS" target="_blank" class="w3-hover-text-green">shopping school</a></footer>

<!-- End page content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent">close</i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join our mailing list to receive updates on available dates and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>
