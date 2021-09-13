<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title> user profile | Thelaundary360</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="assets/images/favicon/ ">
      <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="assets/css/register.css">
      <link rel="stylesheet" href="assets/css/userdash.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body class="authentication-bg">
      <header>
      <?php include_once("user-profile-nav.php"); ?>
      <div class="account-pages mt-5 mb-5">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-8 col-md-12 col-sm-12">
                  <div class="card" >
                     <div class="card-body">
                        <div class=" user-profile-img">
                           <img src="assets/img/image/user-profile.png"  height=200px; width=200px; class="img-fluid rounded-start user-profile-img">
                        </div>
                        <h5 class="card-title text-center">Pallavi Baraskar</h5>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-12 col-sm-12 mt-3">
                  <div class="card " >
                     <div class="card-header card-title bg-white font-weight-bold">

                  <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-6"> Personal information  
                   </div>

                 <div class="col-lg-2 col-md-2 col-sm-6">
                       <a data-toggle="modal" data-target="#updateprofile"><i class="fas fa-pencil-alt"></i></a></div>
                  </div>


                  </div>
                     <div class="card-body gray">
                        <div class="row">
                           <p class="card-text">
                           <div class="col-lg-2">
                              <i class="fas fa-user"></i>
                           </div>
                           <div class="col-lg-10 ">
                              <span>Full Name: <br> Pallavi Baraskar</span>
                           </div>
                           </p>
                        </div>
                        <hr>
                        <div class="row">
                           <p class="card-text">
                           <div class="col-lg-2">
                              <i class="fas fa-envelope"></i>
                           </div>
                           <div class="col-lg-8">
                              Email Id:<br>
                              <span>abd@gmail.com</span>
                           </div>
                           </p>
                        </div>
                        <hr>
                        <div class="row">
                           <p class="card-text">
                           <div class="col-lg-2">
                              <i class="fas fa-mobile-alt"></i>
                           </div>
                           <div class="col-lg-8">
                              Mobile:<br>
                              <span>9876543210</span>
                           </div>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row align-items-center mt-3">
               <div class="col-lg-8 col-md-12">
                  <div class="card mb-3" >
                     <div class="row g-0 p-3">
                        <div class="card-body">
                           <h5 class="card-title"> <i class="fas fa-list"></i>   My Orders</h5><hr>
                           <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="card " >
                     <div class="card-header card-title bg-white font-weight-bold">
                     <div class="row">
                    <div class="col-lg-10 col-md-10"> 
                        Address </div>
                        <div class="col-lg-2 col-md-2"> 

                        <a ><i class="fas fa-pencil-alt"></i></a>
</div>
                     </div>
</div>
                     <div class="card-body gray">
                        <div class="row">
                           <p class="card-text">
                           <div class="col-lg-2">
                              <i class="fas fa-home"></i> 
                           </div>
                           <div class="col-lg-8">
                              Flat/Door No:<br>
                              <span>403</span>
                           </div>
                           </p>
                        </div>
                        <hr>
                        <div class="row">
                           <p class="card-text">
                           <div class="col-lg-2">
                              <i class="fas fa-building"></i> 
                           </div>
                           <div class="col-lg-8">
                              Apartment/Street Name:<br>
                              <span> saidham ,lohar ali</span>
                           </div>
                           </p>
                        </div>
                        <hr>
                        <div class="row">
                           <p class="card-text">
                           <div class="col-lg-2">
                              <i class="fas fa-globe"></i> 
                           </div>
                           <div class="col-lg-8">
                              Seleted location from map:<br>
                              <span>9876543210</span>
                           </div>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <!-- placeorder -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Place Order</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger"> Place Pickup Request</button>
               </div>
            </div>
         </div>
      </div>



      <!-- update profile -->
      <!-- Modal -->
      <div class="modal fade" id="updateprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog " role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="firstname">First Name</label>
                           <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="lastname">Last Name</label>
                           <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="emailid">Email</label>
                           <input type="email" class="form-control" id="emailid" placeholder="Enter email">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="mobileid">Mobile</label>
                           <input type="text" class="form-control" id="mobileid" placeholder="Enter mobile">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputAddress">Flat/Door No.</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 ">
                     </div>
                     <div class="form-group">
                        <label for="inputAddress2">Apartment/Street Name</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                     </div>
                     <div class="form-group">
                        <iframe class="m-auto " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241412.4989036228!2d72.89307213178624!3d19.016623858733002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9f0b81f13ad%3A0x3c12f7681185f869!2sNavi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1629384637145!5m2!1sen!2sin" 
                           width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger">Update</button>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/animated.headline.js"></script>
      <script src="assets/js/jquery.magnific-popup.js"></script>
      <script src="assets/js/gijgo.min.js"></script>
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <script src="assets/js/jquery.sticky.js"></script>
      <script src="assets/js/jquery.barfiller.js"></script>
      <script src="assets/js/jquery.counterup.min.js"></script>
      <script src="assets/js/waypoints.min.js"></script>
      <script src="assets/js/jquery.countdown.min.js"></script>
      <script src="assets/js/hover-direction-snake.min.js"></script>
      <script src="assets/js/contact.js"></script>
      <script src="assets/js/jquery.form.js"></script>
      <script src="assets/js/jquery.validate.min.js"></script>
      <script src="assets/js/mail-script.js"></script>
      <script src="assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>