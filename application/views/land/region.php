
<?php foreach ($region_array as $region){ ?>
		
<div style="display:none"><?php echo $region["flags"];?></div>
<center>
	
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1hmOXKUFV2pGtanKMa3q7e0Bw8e4Ngs4VDW1As6hXmV09ZTe3" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">Region: <?php echo $region["regionName"];?><small>  <a id="region-hop" href="hop://hg.neverworldgrid.com:8002/<?php echo $region["regionName"];?>">Teleport</a></small></h3>
       <script>
var regionHop = document.getElementById('region-hop');
 regionHop.setAttribute('href', site.grid_url + "<?php echo $region["regionName"];?>");
</script>
<span><strong>Flags </strong></span>
<span class="badge badge-info">Flags not Available at this time</span>
<!--
                        <span class="badge badge-primary">Default Region</span>
			<span class="badge badge-primary">Fallback Region</span>
                        <span class="badge badge-info">Locked Out</span>
			<span class="badge badge-danger">Inactive Reservation</span>
                        <span class="badge badge-success">Online</span>
-->
                    </center>
                    <hr>
                    <center>
			    <div class="row">
    <div class="col-sm">
	    <h6>Region Basic Info</h6>
		    <table class="table table-hover">
  <tbody>
    <tr>
      <td>Location : <?php echo $region["locX"] /256 ;?> , <?php echo $region["locY"] /256 ;?></td>
     
    </tr><tr>
	   <td>Last Seen : <?php echo date('Y-m-d H:i:s', $region["last_seen"]);?></td>
	  </tr>
  </tbody>
</table>
    </div>
    <div class="col-sm">
   	    <h6>Region Technical Info</h6>
		    <table class="table table-hover">
  <tbody>
    <tr>
      <td>Hosted at  : <?php echo $region["serverIP"];?></td>
    </tr>
	  <tr>
      <td>Region Port : <?php echo $region["serverPort"];?></td>
    </tr>
	  <tr>
      <td>Server URI: <?php echo $region["serverURI"];?></td>
    </tr>
	   <tr>
      <td>Server URI: <?php echo $region["serverURI"];?></td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="col-sm">
	    <h6>OpenSimWorld</h6>
	   		    <table class="table table-hover">
  <tbody>
    <tr>
	    <td id="avatarsinregion"><b>Total Avis</b></td>
    </tr>

  </tbody>
</table> 
	    
	    
    </div>
  </div>
			   
                    </center>
	      </div>
	    <script>
var region = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "https://opensimworld.com/gateway/get.json?cmd=search&q="+ "<?php echo $region["regionName"];?>",
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
})(); 

document.getElementById("avatarsinregion").innerHTML = region.total_avis[0];
</script>



  <?php } ?>
