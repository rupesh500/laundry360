<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>register|laundry360 </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="assets/css/register.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh4PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEh4Sl0sibVcOQVnN" crossorigin="anonymous">
   </head>
   <body class="authentication-bg">
  
   <div id="demo"></div>
    <script>
        const div = document.querySelector('div');
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        }

        function showPosition(postion) {
            div.innerHTML = `Latitude: ${postion.coords.latitude} Longitude: ${postion.coords.longitude}`
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    div.innerHTML = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    div.innerHTML = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    div.innerHTML = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    div.innerHTML = "An unknown error occurred."
                    break;
            }
        }
    </script>

      <div class="account-pages  mb-5">
         <div class="container">
            <div class="row justify-content-center ">
               <div class="col-md-8 col-lg-6 col-xl-5 mt-5">
                  <div class="log">
                     <img src="assets/img/logo/logo.png"alt="">
                  </div>
                  <div class="card">
                     <div class="card-body p-4">
                        <div class="text-center mb-4">
                           <div class="header text-center mb-4">
                              <h4 class="text-uppercase mt-0">SIGN UP</h4>
                           </div>
                        </div>
                        <form action="#">
                           <div class="form-group mb-3">
                              <label for="email">Email address</label>
                              <input class="form-control" type="email" id="email" required="" placeholder="Enter your email">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mobile">Mobile</label>
                              <input class="form-control" type="text" required="" id="mobile" placeholder="Enter your mobile">
                           </div>
                           <div class="form-group mb-0 text-center">
                              <a href="register2.php " class="text-white btn btn-primary btn-block">VERIFY</a>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="mt-3 text-center">
                     <p class="gray">Already have  an account?<a href="login.php" class="no-border text-primary font-weight-bold">Sign in</a></p>
                  </div>
               </div>
            </div>
         </div>




      </div>
   </body>
</html>