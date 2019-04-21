<div class="container">
  <div class="row">
    <div class="col">
	    <h6>Account Summary</h6>
     <table class="table">
  <tbody>
    <tr>
      <th scope="row">Username</th>
      <td>Apple Mole</td>
    </tr>
    <tr>
      <th scope="row">Payment info on File</th>
      <td>No</td>
    </tr>
    <tr>
      <th scope="row">Country of Residence</th>
      <td>United States</td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="col">
	    <h6>Billing Summary</h6>
     <table class="table">
  <tbody>
    <tr>
      <th scope="row">Linked to Gloebit</th>
      <td>No</td>
    </tr>
    <tr>
      <th scope="row">Region Billing Setup</th>
      <td>No</td>
    </tr>
    <tr>
      <th scope="row">Due Next Bill Date</th>
      <td>$21.50</td>
    </tr>
	   <tr>
      <th scope="row">Bill Date</th>
      <td>4/20/2019</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
  <div class="row">
	    <script>
var getmyfriends = new XMLHttpRequest();
  getmyfriends.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax-friends").innerHTML =
      this.responseText;
    }
  };
  getmyfriends.open("GET", "https://account.nwam.tk/data/friends", true);
  getmyfriends.send();
</script>
    <div class="col">
			<h6>My Friends</h6>
		    <p id="ajax-friends"></p>
    </div>
	  	    <script>
var geteventsnow = new XMLHttpRequest();
  geteventsnow.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax-events").innerHTML =
      this.responseText;
    }
  };
  geteventsnow.open("GET", "https://account.nwam.tk/data/events", true);
  geteventsnow.send();
</script>
    <div class="col">
			<h6>Upcoming Events</h6>
	    <p id="ajax-events"></p>
    </div>
	  <script>
function GroupsFunction(value) {
 $("#ajax-groups").append("<tr><td>" + value.Name + "</td></tr>");
}
var getgroupsnow = new XMLHttpRequest();
  getgroupsnow.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
 	var obj = JSON.parse(this.responseText);
	obj.forEach(GroupsFunction);
	    
    }
  };
  getgroupsnow.open("GET", "https://account.nwam.tk/data/groups", true);
  getgroupsnow.send();
</script>
    <div class="col">
			<h6>My Groups</h6>
	  	    <table class="table table-sm">
  <tbody id="ajax-groups">

    
  </tbody>
</table>
    </div>
  </div>
</div>
