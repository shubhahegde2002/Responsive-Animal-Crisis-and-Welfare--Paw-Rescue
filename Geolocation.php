<button onclick="getLocation()">Find</button>
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  /*x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude; */

  txt_geolocation.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  
}
</script>

<form action="http://localhost/submit_geo.php" method="get>
  <label for="txt_geolocation">Submit Geo Location</label><br><br>
  <!--input id="txt_geolocation" required-->
  <label id="txt_geolocation"></label><br><br>
  <br><br>
  <input type="submit">
</form>
<form action="/action_page.php">
  <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  <small>Format: +91 </small><br><br>
  <input type="submit">
</form>
