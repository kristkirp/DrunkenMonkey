<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - DrunkenMonkey</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/listtyicons/style.css" rel="stylesheet">
  <link href="plugins/bootstrapthumbnail/bootstrap-thumbnail.css" rel="stylesheet">
  <link href="plugins/datepicker/datepicker.min.css" rel="stylesheet">
  <link href="plugins/selectbox/select_option1.css" rel="stylesheet">
  <link href="plugins/rwdtable/css/rwd-table.css" rel="stylesheet">
  <link href="plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/isotope/isotope.min.css" rel="stylesheet">
  <link href="plugins/map/css/map.css" rel="stylesheet">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <div class="page-loader" style="background: url(img/preloader.gif) center no-repeat #fff;"></div>
  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header">

      <!-- TOP INFO BAR -->

      <div class="nav-wrapper navbarWhite">

        <!-- NAVBAR -->
        <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="img/logo-drunkenmonkey.png" alt="logo"></a>
            </div>

          @if(Session::has('email'))
              <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li class=""><a href="{{ url('/') }}">home</a></li>
                          <li class=""><a href="{{ url('cocktail-main') }}">Cocktails </a></li>
                          <li class="active"><a href="{{ url('about-us') }}">about us </a></li>
                          <li class=""><a href="{{ url('profile') }}">Profile </a></li>
                      </ul>
                  {{--<button class="btn btn-default navbar-btn" type="button" ><a href="{{ url('/profile') }}">{{  Session::get('email') }}</a></button>--}}
          @else
              <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li class=""><a href="#">home</a></li>
                          <li class=""><a href="{{ url('cocktail-main') }}">Cocktails </a></li>
                          <li class="active"><a href="{{ url('about-us') }}">about us </a></li>
                      </ul>

                  </div>
                  <button class="btn btn-default navbar-btn" type="button" data-toggle="modal"
                          data-target="#loginModal"><span>Sign In</span></button>
              @endif
          </div>
        </nav>
      </div>
      
    </header>

<!-- PAGE TITLE SECTION -->
<section class="clearfix pageTitleSection" style="background-image: url();">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="pageTitle">
          <h2>Profile</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DASHBOARD PROFILE SECTION -->
<section class="clearfix bg-light profileSection">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-5 col-xs-12">
				<div class="dashboardBoxBg mb30">
					<div class="profileImage">
						<img src="img/dashboard/blank.jpg" alt="Image User" class="img-circle">
						<div class="file-upload profileImageUpload">
							<div class="upload-area">
								<input type="file" name="img[]" class="file">
								<button class="browse" type="button">Upload a Picture <i class="icon-listy icon-upload"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-7 col-xs-12">
				<form>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro">
							<h3>About You</h3>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="firstNameProfile">Fast Name</label>
									<input type="text" class="form-control" id="firstNameProfile">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="lastNameProfile">Last Name</label>
									<input type="text" class="form-control" id="lastNameProfile">
								</div>
								<div class="form-group col-sm-12 col-xs-12">
									<label for="emailProfile">Email</label>
									<input type="text" class="form-control" id="emailProfile">
								</div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="datepicker" class="control-label">Date of Birth*</label>
                    <input type="date" class="form-control" id="dateBirth">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="gender" class="control-label">Gender</label>
                    <select class="form-control">
                      <option></option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Prefer to not inform</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="province" class="control-label">Province*</label>
                    <select class="form-control" id="province">
                      <option></option>
                      <option>Alberta</option>
                      <option>British Columbia</option>
                      <option>Manitoba</option>
                      <option>New Brunswick</option>
                      <option>Newfoundland and Labrador</option>
                      <option>Nova Scotia</option>
                      <option>Ontario</option>
                      <option>Prince Edward Island</option>
                      <option>Quebec</option>
                      <option>Saskatchewan</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="city" class="control-label">City*</label>
                    <input type="text" class="form-control" id="city">
                  </div>
								<div class="form-group col-xs-12">
									<label for="aboutYou">About You</label>
									<textarea class="form-control" rows="5" id="aboutYou" placeholder="About You"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mt30">
						<div class="profileIntro">
							<h3>Social Network</h3>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="linkedInUrl">Linked in URL</label>
									<input type="text" class="form-control" id="linkedInUrl" placeholder="http://linkedin.com/listty">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="facebookUrl">Facebook URL</label>
									<input type="text" class="form-control" id="facebookUrl" placeholder="http://facebook.com/listty">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="twitterUrl">Twitter URL</label>
									<input type="text" class="form-control" id="twitterUrl" placeholder="http://twitter.com/listty">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="youTubeUrl">You Tube URL</label>
									<input type="text" class="form-control" id="youTubeUrl" placeholder="http://youtube.com/listty">
								</div>
							</div>
						</div>
					</div>
					<div class="btn-area mt30">
						<button class="btn btn-primary" type="button">Save Change</button>
					</div>
					<div class="dashboardBoxBg mt30">
						<div class="profileIntro">
							<h3>Update password</h3>
							<div class="row">
								<div class="form-group col-xs-12">
									<label for="currentPassword">Current Password</label>
									<input type="password" class="form-control" id="currentPassword" placeholder="********">
								</div>
								<div class="form-group col-xs-12">
									<label for="newPassword">New Password</label>
									<input type="password" class="form-control" id="newPassword" placeholder="New Password">
								</div>
								<div class="form-group col-xs-12">
									<label for="confirmPassword">Confirm Password</label>
									<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
								</div>
								<div class="form-group col-xs-12">
									<button class="btn btn-primary" type="button">Change Password</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

    <!-- FOOTER -->
      <footer class="footerWhite">
          <!-- FOOTER INFO -->
          <div class="clearfix footerInfo">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-10 col-xs-12">
                          <div class="footerText">
                              <a href="index.php" class="footerLogo"><img src="img/logo-drunkenmonkey.png" alt="Footer Logo"></a>
                              <p>Information about the team</p>
                              <ul class="list-styled list-contact">
                                  <li><i class="fa fa-phone" aria-hidden="true"></i>[88] 657 524 332</li>
                                  <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@listy.com</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-sm-2 col-xs-12">
                          <div class="footerInfoTitle">
                              <h4>Links</h4>
                          </div>
                          <div class="useLink">
                              <ul class="list-unstyled">
                                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                                      <ul class="nav navbar-nav navbar-right">
                                          <li class=""><a href="{{ url('/') }}">home</a></li>
                                          <li class=""><a href="{{ url('cocktail-main') }}">Cocktails </a></li>
                                          <li class=""><a href="{{ url('about-us') }}">about us </a></li>
                                          <li class=" dropdown singleDrop">
                                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('fname')}} {{Session::get('lname')}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                              <ul class="active dropdown-menu dropdown-menu-right">
                                                  <li><a href="{{ url('profile') }}">Profile</a></li>
                                                  <li><a href="#">Wish List</a></li>
                                                  <li><a href="{{route('logout')}}">Log out</a></li>
                                              </ul>
                                          </li>
                                      </ul>
                              </ul>
                          </div>
                      </div>

                  </div>
              </div>
          </div>

          <!-- COPY RIGHT -->
          <div class="clearfix copyRight">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="copyRightWrapper">
                              <div class="row">
                                  <div class="col-sm-5 col-sm-push-7 col-xs-12">

                                  </div>
                                  <div class="col-sm-7 col-sm-pull-5 col-xs-12">
                                      <div class="copyRightText">
                                          <p>Copyright &copy; 2017. All Rights Reserved by <a href="http://www.iamabdus.com/" target="_blank">Code4Life</a></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </footer>
  </div>

  <!-- LOGIN  MODAL -->
  <div id="loginModal" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In to your Account</h4>
        </div>
        <div class="modal-body">
          <form class="loginForm">
            <div class="form-group">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input type="password" class="form-control" id="pwd" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
              <a href="password.html" class="pull-right link">Forgot Password?</a>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <p>Don’t have an Account? <a href="sign-up.html" class="link">Sign up</a></p>
        </div>
      </div>

    </div>
  </div>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="plugins/waypoints/waypoints.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
  <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
  <script src="plugins/rwdtable/js/rwd-table.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="plugins/isotope/isotope.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/isotope/isotope-triger.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
  <script src="js/map.js"></script>

  <script src="js/custom.js"></script>


</body>

</html>