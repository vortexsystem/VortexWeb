<style>
	#pswd_info {
    position:absolute;
    bottom:-75px;
    bottom: -115px\9; /* IE Specific */
    right:55px;
    width:250px;
    padding:15px;
    background:#fefefe;
    font-size:.875em;
    border-radius:5px;
    box-shadow:0 1px 3px #ccc;
    border:1px solid #ddd;
}
.invalid {

    padding-left:22px;
    line-height:24px;
    color:#ec3f41;
}
.valid {
    padding-left:22px;
    line-height:24px;
    color:#3a7d34;
}
</style>
<div class="row">
    <div class="col">
      <form action="" id="form" method="post">
	      					<div class="form-group">
							<label for="desc">Current Password: </label> 
							<input type="password" class="form-control" name="current" id="current" required>
						</div>
						<div class="form-group">
							<label for="desc">Password:</label> 
							<input type="password" class="form-control" name="pass" id="pass" required>
						</div>
						<div class="form-group">
							<label for="desc">Confirm Password:</label> 
							<input type="password" class="form-control" name="confpass" id="confpass" required>
						</div>
						<div class="form-group">
							<span class="error" style="color:red"></span><br />
						</div>
						<button type="submit" name="submit" class="btn btn-default">Submit</button>
					</form>
    </div>
    <div class="col">
      <div id="pswd_info">
    <h4>Password must meet the following requirements:</h4>
    <ul>
        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
        <li id="number" class="invalid">At least <strong>one number</strong></li>
        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
    </ul>
</div>
	    <div id="passwords_match">
    <h4>Do your passwords match?</h4>
		    <p id="password_typed_right">No</p>

   
</div>
    </div>
  </div>


		
					
<script>
	$(document).ready(function() {

    $('input[id=pass]').keyup(function() {
    var pswd = $(this).val();
	    //validate letter
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}
//validate the length
if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}
}).focus(function() {

}).blur(function() {
   
});

});
</script>


<script>
	$(document).ready(function() {

$('input[id=confpass]').keyup(function() {
  var _pass = $('#pass').val();
  var _conf = $('#confpass').val();
  
  if (_pass == _conf)
  {
     $( "p.password_typed_right" ).text( "Yes" );
  }
  else
  {
    $( "p.password_typed_right" ).text( "No" );
  }
});

}).focus(function() {

}).blur(function() {
   
});

});
</script>
