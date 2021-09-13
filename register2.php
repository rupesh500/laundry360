<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>register | laundry360 </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="assets/css/register.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh4PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEh4Sl0sibVcOQVnN" crossorigin="anonymous">
   </head>
   <body class="authentication-bg">
      <div class="account-pages  mb-5">
         <div class="container">
            <div class="row justify-content-center ">
               <div class="col-md-8 col-lg-6 col-xl-5 mt-5">
                  <div class="log">
                     <img src="assets/img/logo/logo.png"alt="">
                  </div>
                  <div class="card">
                     <div class="card-body p-4">
                        <div class="header text-center mb-4">
                           <h4 class="text-uppercase mt-0">SIGN UP</h4>
                        </div>
                        <form action="#">
                           <div class="form-group mb-3">
                              <input class="form-control" type="text" id="otp" required="" placeholder="Enter 6 digit OTP">
                           </div>
                           <div class="form-group mb-3">
                              <input class="form-control" type="text" required="" id="firstname" placeholder="First name">
                           </div>
                           <div class="form-group mb-3">
                              <input class="form-control" type="text" required="" id="Lastname" placeholder="Last name">
                           </div>
                           <div class="form-group mb-3">
                              <input class="form-control" type="password" required="" id="password" placeholder=" Password">
                           </div>
                           <div class="form-group mb-3">
                              <label for="password">Please confirm your password</label>
                              <input class="form-control" type="password" required="" id="passwordsec" placeholder="Re-enter password">
                           </div>
                           <div class="form-group mb-3">
                              <input class="form-control" type="text" required="" id="add1" placeholder="Flat no/door no">
                           </div>
                           <div class="form-group mb-3">
                              <select class="form-control" id="">
                                 <option>Select city</option>
                                 <option>Pune</option>
                                 <option>Nashik</option>
                                 <option>Nagpur</option>
                              </select>
                           </div>
                           <div class="form-group mb-3">
                              <input class="form-control" type="text" required="" id="add2" placeholder="aparment name/street name">
                           </div>
                           <div class="form-group mb-3">
                           <input type="search">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.8237264751397!2d73.15551131414101!3d19.20289998701525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be794f55acc5143%3A0xc9d79d2b6f69d836!2sRegency%20Plaza!5e0!3m2!1sen!2sin!4v1606724645192!5m2!1sen!2sin" width="400" height="200"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                           </div>
                           <div class="form-group mb-0 text-center">
                              <button href="user-profile.php" class="btn btn-primary btn-block" type="submit">REGISTER</button>
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