<script>
         function loadEstateRegions(estate) {
          $("#estate"+estate).append(this.value);
         }
         var getfriendsnow = new XMLHttpRequest();
           getfriendsnow.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
          	var obj = JSON.parse(this.responseText);
         	obj.forEach(loadEstateRegions(estate));
         	    
             }
           };
           getfriendsnow.open("GET", "/data/estate/count/" + estate, true);
           getfriendsnow.send();
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
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
   
			  <?php foreach ($estate_array as $estates){ ?>
  <tr>
                    <td><?php echo $estates["EstateName"];?></td>
                    <td><?php echo $estates["EstateID"];?></td>
                  <td><a href="land/estate/<?php echo $estates["EstateID"];?>">Click to Manage</a></td>
                  </tr>
        <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>


