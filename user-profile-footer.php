<!doctype php>
<php class="no-js" lang="zxx">


    <!-- ><meta http-equiv="content-type" content="text/php;charset=utf-8" /> -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TheLaundry360 | pricing</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->

        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animated-headline.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .modal .modal-dialog .modal-content {
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                border-color: #DDDDDD;
                border-radius: 2px;
                box-shadow: none;
                padding: 25px;
            }

            .modal-header h3 {
                color: #505458;
                font-family: 'Karla', sans-serif;
                margin: 10px 0;
                float: left;
            }

            .modal-body label {
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 700;
                color: #797979;
            }

        </style>
    </head>

    <body>

<!-- top navigation start -->
      <div class="topnav">

          <a href="index.php" class="nav-link ml-5">Home</a>
          <a href="#" id="place-order" class="nav-link">placeorder</a>
          <a href="#" class="nav-link">logout</a>

          <div id="place_order" class="modal fade sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <form action="profile_update.php" method="POST">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h3>Place Order</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="" class="control-label">Select Service</label>
                                          <select required class="form-control" id="service_list" name="service_list">
                                              <option selected disabled value="">Select Service</option>
                                              <option value="10">Steam Ironing</option>
                                              <option value="13">Wash & Fold (Kg Basis)</option>
                                              <option value="12">Wash & Iron (Kg Basis)</option>
                                              <option value="11">Wash & Iron</option>
                                              <option value="9">Premium Laundry</option>
                                              <option value="8">Dry Cleaning</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">Select pickup Date</label>
                                          <!-- <select required class="form-control pickup_date" name="dd" id="p_date">

                                            </select> -->
                                          <input type="date">
                                      </div>
                                  </div>
                                  <input type="hidden" value="" name="usr_id">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="field-22" class="control-label">Select pickup Time</label>
                                          <!-- <select required class="form-control" id="p_time" name="Time">
                                                <option selected disabled value="">Select Time</option>
                                            </select> -->
                                          <input type="time">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-danger waves-effect waves-light" onclick="open_conf_order();">Place Pickup Request</button>
                              <!-- <button type="button" class="btn btn-danger waves-effect waves-light" name="submit1" onclick="open_conf_order();"  data-toggle="modal" aria-expanded="false" data-target="#con-close_summary">Place Pickup Request</button> -->
                          </div>
                      </div>
                  </div>
              </form>
          </div><!-- /.modal -->
      </div>
      <!-- JS here -->

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

        <script>
            $(document).ready(function() {
                $("#place-order").click(function() {
                    $("#place_order").modal();
                });
            });
        </script>
    </body>

</php>