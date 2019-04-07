<?php
function getFlagNameByNumber($number)
{
    // 0 = Fried request 
    // OR (if uuid = principalid)
    // 0 = Friend request accepted
    // 1 see if connected
    // 3 see on map
    // 4 move/take objects
    // 7 full
    if ($number == 0)
        $Flags = '<i data-toggle="tooltip" class="glyphicon glyphicon-ban-circle text-danger" title="No right"></i>';
    else if ($number == 1)
        $Flags = '<i data-toggle="tooltip" class="glyphicon glyphicon-eye-open text-success" title="See if connected"></i>';
    else if ($number == 3)
        $Flags = '<i data-toggle="tooltip" class="glyphicon glyphicon-globe text-success" title="See on map"></i>';
    else if ($number == 4)
        $Flags = '<i data-toggle="tooltip" class="glyphicon glyphicon-gift text-success" title="Move/Take objects"></i>';
    else if ($number == 7)
        $Flags = '<i data-toggle="tooltip" class="glyphicon glyphicon-education text-danger" title="Full right"></i>';
    else $number = '<i data-toggle="tooltip" class="glyphicon glyphicon-question-sign text-danger" title="Unknow flag"></i>';
    return $Flags;
}

?>
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
	    
  <li class="list-group-item"><?php getFlagNameByNumber($friends["Flags"]);?></li>


	    <?php } ?>
		    </ul>
    </div>
    <div class="col">
			<h6>Upcoming Events</h6>
    </div>
    <div class="col">
			<h6>My Groups</h6>
    </div>
  </div>
</div>
