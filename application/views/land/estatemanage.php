<script>
function loadEstateRegions(estaterequested) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("estate"+estaterequested).innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "https://demo.vortexapp.tk/data/estate/count/" + estaterequested, true);
  xhttp.send();
}
</script>
<!-- Page Content -->
        <h1>Manage Estates</h1>
        <hr>
<p>These are your estates.</p>
       <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Manage Estates</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Estate Name</th>
                    <th>ID</th>
                    <th>Number of Regions</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
   
			  <?php foreach ($estate_array as $estates){ ?>
  <tr>
                    <td><?php echo $estates["EstateName"];?></td>
                    <td><?php echo $estates["EstateID"];?></td>
                    <td id="estate-<?php echo $estates["EstateID"];?>" onload="loadEstateRegions('<?php echo $estates["EstateID"];?>')"</td>
	  <td><a href="land/estate/<?php echo $estates["EstateID"];?>">Click to Manage</a></td>
                  </tr>
        <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>


