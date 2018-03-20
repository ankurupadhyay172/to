<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
 

	
<body >




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATqQyrU35Rob9pT9vvigrI1No9hWnfDTM&libraries=places&callback=ankur"
        async defer></script>
<script>

function ankur() {
var autocomplete=new google.maps.places.Autocomplete(document.getElementById('search'));
google.maps.event.addListener(autocomplete,'place_changed',function(){
var place=autocomplete.getPlace();

var lat=place.geometry.location.lat();
var lng=place.geometry.location.lng();

//document.getElementById('result').innerHTML=lat+"<br>"+lng;
window.location.href="map.php?lat="+lat+"&lng="+lng;

});

};


function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }

</script>

<div class="container">
<a href="form.php"><button class="button btn-success">Give To-let Service</button></a>
<div class="card" style="width:20%;margin-top:10%">
<div class="card-header"><h1>YOUR LET </h1> </div>
<div class="card-body">
<form action="add.php" method="post" >Enter location for rooms:<br><br>
<input type="text" id="search" placeholder="Enter the address"/ autofocus>
</div><div class="card-footer">Contact No:9001782670 Email:yourlet@gmail.com

</div></div>

</div>

</body>
</html>