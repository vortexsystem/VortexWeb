	<script>
		var allowsubmit = false;
		$(function(){
			//on keypress 
			$('#confpass').keyup(function(e){
				//get values 
				var pass = $('#pass').val();
				var confpass = $(this).val();
				
				//check the strings
				if(pass == confpass){
					//if both are same remove the error and allow to submit
					$('.error').text('');
					allowsubmit = true;
				}else{
					//if not matching show error and not allow to submit
					$('.error').text('Password not matching');
					allowsubmit = false;
				}
			});
			
			//jquery form submit
			$('#form').submit(function(){
			
				var pass = $('#pass').val();
				var confpass = $('#confpass').val();
 
				//just to make sure once again during submit
				//if both are true then only allow submit
				if(pass == confpass){
					allowsubmit = true;
				}
				if(allowsubmit){
					return true;
				}else{
					return false;
				}
			});
		});
	</script>


		
					<form action="" id="form" method="post">
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
