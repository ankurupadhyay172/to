<!DOCTYPE html>
<html>
  <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  
  
    <title>ADDRESS PLACE</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
  </head>

  <body>
  
  <div class="container">
    <div class="jumbotron" style="height:500px">
    <div  id="locationField"><form name="myform" method="post" action="form.php">
      
	  <div class="form-group">
	  <input name="full" id="autocomplete" placeholder="Enter your address"
          class="form-control"   onFocus="geolocate()" type="text"></input></div><br><br>
    

    <table id="address">
	
	<tr>
        <td class="label">Name</td>
        <td class="slimField"><div class="form-group"><input type="text" name="name" style="width:300px" class="form-control"></input></td>
        <td class="label">Type</td>
        <td class="wideField" colspan="3">
		
		<select name="type" required>
		<option value="room">Room</option>
		<option value="hostel">Hostel</option>
		<option value="office">Office</option></select>
		</td> 
      </tr>
	
	
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input name="street" class="field" id="street_number"
              disabled="true" name="street" placeholder="House No."></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route" name="field"
              disabled="true" required></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        
        <td class="wideField" colspan="3"><input class="field" id="locality" name="locality"
              disabled="true" required></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true" name="state" required></input> </td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code" name="code"
              disabled="true"></input></td>
      </tr>
	  
	 
	  
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input name="country" class="field"
              id="country" disabled="true" required></input>
			  <input type="hidden"  name="lat"></input>
			  <input type="hidden"  name="lng"></input>
			  
			  </td>
			  
      </tr>
	  
	  
	  
		
		<tr>
        <td class="label">Contact </td>
        <td class="wideField" colspan="3"><input name="contact" class="field"
              id="country"  required></input>
			  			  
			  </td>
			  
      </tr>
		
		
		<tr>
		
		<td> 
	  
    </table>
	
	
	
	
	<input type="submit" name="submit"></form>
</div></div>
    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name',
		
		
	
		
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
		
		
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
		  
		  

		  
		  
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
		var lat=place.geometry.location.lat();
		var lng=place.geometry.location.lng();
		document.forms['myform']['lat'].value = lat;
		document.forms['myform']['lng'].value = lng;

		
		




        for (var component in componentForm) {
          document.getElementById(component).value = '';
		  
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
			
          }
        }
      }
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATqQyrU35Rob9pT9vvigrI1No9hWnfDTM&libraries=places&callback=initAutocomplete"
        async defer></script>
		
		
	  
	  <?php
	  
	  if(isset($_POST['submit']))
	  {
		  echo $_POST['name'];
		  echo $_POST['full'];
		  echo $_POST['type'];
		  echo $_POST['lat'];
		  echo $_POST['contact'];
		  $conn=mysqli_connect("localhost", "root", "", "marker");
		  $sql='insert into markers(name,address,Contact,lat,lng,type) values ("'.$_POST['name'].'","'.$_POST['full'].'","'.$_POST['contact'].'","'.$_POST['lat'].'","'.$_POST['lng'].'","'.$_POST['type'].'")';
		  $result=mysqli_query($conn,$sql);
		  if($result)
		  {
			  echo "sucessfully entered ";
		  }
		  else 
		  {
			  echo "not entered";
		  }
	  }
	  ?>
	  
	  
  </body>
</html>