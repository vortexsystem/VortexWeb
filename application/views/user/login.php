<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
	   <link rel="manifest" href="manifest.json">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="Vortex">
<meta name="apple-mobile-web-app-title" content="Vortex">
<meta name="msapplication-starturl" content="/account/">
      <base href="<?= $base_href ?>">
      <title>Login to VortexWeb</title>
      <!-- Custom fonts for this template-->
      <link href="resources/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="resources/css/sb-admin.css" rel="stylesheet">
<script>
// Check compatibility for the browser we're running this in
if ("serviceWorker" in navigator) {
  if (navigator.serviceWorker.controller) {
    console.log("[Offline Service Worker] active service worker found, no need to register");
  } else {
    // Register the service worker
    navigator.serviceWorker
      .register("sw.js", {
        scope: "./"
      })
      .then(function (reg) {
        console.log("[Offline Service Worker] Service worker has been registered for scope: " + reg.scope);
      });
  }
}


	   </script>
   </head>
   <body class="bg-dark">
      <div class="container">
         <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
<?php echo form_open('user/process'); ?>

 <div class="form-group">
                     <div class="form-label-group">

<?php
if($message !== '')
{
echo "<div class='alert alert-danger' role='alert'>". $message . "</div>";
}
?>
</div>                    

                     </div>



                  <div class="form-group">
                     <div class="form-label-group">
                        <input type="text" name="user" id="user" class="form-control" autocomplete="username" placeholder="Username">
                        <label for="user">User Name</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-label-group">
                        <input type="password" name="password" id="password" class="form-control" autocomplete="current-password" placeholder="Password">
                        <label for="password">Password</label>
                     </div>
                  </div>
            </div>
		 <input type="hidden" name="login" id="login" value="nnnn">
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="text-center">
               <a class="d-block small mt-3" href="user/register">Register an Account</a>

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
