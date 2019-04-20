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
    <div class="col">
			<h6>My Friends</h6>
		    <ul class="list-group">
	    <?php foreach ($friends_array as $friends){ ?>

  <li class="list-group-item"><?php echo $friends["name"];?></li>


	    <?php } ?>
		    </ul>
    </div>
    <div class="col">
			<h6>Upcoming Events</h6>

    </div>
	  
	  <script>
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax-groups").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "https://account.nwam.tk/data/groups", true);
  xhttp.send();
</script>
    <div class="col">
			<h6>My Groups</h6>
	  	    <p id="ajax-groups">
		    
	    </p>
    </div>
  </div>
</div>
