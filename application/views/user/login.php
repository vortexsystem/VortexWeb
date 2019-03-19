<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <base href="<?= $base_href ?>">z
      <title>Neverworld MyAccount - Login</title>
      <!-- Custom fonts for this template-->
      <link href="resources/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="resources/css/sb-admin.css" rel="stylesheet">
   </head>
   <body class="bg-dark">
      <div class="container">
         <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
<?php echo form_open('user/process'); ?>
                   <div class="form-group">
                     <div class="form-label-group">
                        <input type="text" name="first" id="first" class="form-control" placeholder="First name">
                        <label for="first">First Name</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-label-group">
                        <input type="text" name="last" id="first" class="form-control" placeholder="Last name">
                        <label for="last">Last Name</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-label-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <label for="password">Password</label>
                     </div>
                  </div>
            </div>
		 <input type="hidden" name="login" id="login" value="nnnn">
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="text-center">
               <a class="d-block small mt-3" href="register.html">Register an Account</a>
               <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
         </div>
      </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="resources/vendor/jquery/jquery.min.js"></script>
      <script src="resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="resources/vendor/jquery-easing/jquery.easing.min.js"></script>
   </body>
</html>
