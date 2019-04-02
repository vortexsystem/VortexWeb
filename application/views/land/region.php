<?php foreach ($region_array as $region){ ?>

<center>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1hmOXKUFV2pGtanKMa3q7e0Bw8e4Ngs4VDW1As6hXmV09ZTe3" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">Region: <?php echo $region["regionName"];?><small><?php echo $region["uuid"];?></small></h3>
                    <span><strong>Flags </strong></span>
                        <span class="badge badge-warning">Payment Due Soon</span>
                        <span class="badge badge-info">Locked Out</span>
                        <span class="badge badge-info">Fallback Region</span>
                        <span class="badge badge-success">Online</span>
                    </center>
                    <hr>
                    <center>
                    <div class="row">
          <div class="col-md-4 mb-2">
            <label for="locx">X</label>
            <input type="text" id="locx" placeholder="" value="<?php echo $region["locX"] /256 ;?>" readonly class="form-control-plaintext">
          </div>
         <div class="col-md-4 mb-2">
            <label for="locy">Y</label>
            <input type="text" id="locy" placeholder="" value="<?php echo $region["locY"]/256;?>" readonly class="form-control-plaintext">
          </div>
			<div class="col-md-4 mb-2">
            <label for="locz">Z</label>
            <input type="text" id="locz" placeholder="" value="<?php echo $region["locZ"] /256;?>" readonly class="form-control-plaintext">
          </div>
                    </center>



  <?php } ?>
