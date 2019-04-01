       <!-- Page Content -->
        <h1>Manage Regions</h1><hr>
       <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Manage Regions</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Region</th>
                    <th>Position</th>
                    <th>Product</th>
                    <th>Estate</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
   
			  <?php foreach ($region_array as $regions){ ?>

         <?php
		$x = $regions["locX"] / 256;
		$y = $regions["locY"] / 256;
	
	?>
  <tr>
                    <td><?php echo $regions["regionName"];?></td>
                    <td><?php echo $x; ?> , <?php echo $y;?></td>
                    <td>General Region</td>
                    <td>Estate Name Here</td>
	  <td><a href="land/region/<?php echo $regions["uuid"];?>">Click to Manage</a></td>
                  </tr>
        <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>
