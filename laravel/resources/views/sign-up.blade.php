@include('header')
<head>
    <title>Sign up | DrukenMonkey</title>
</head>

<body class="body-wrapper">
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
              <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('img/logo-drunkenmonkey.png') }}" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="{{ url('/') }}">home</a></li>
                  <li class=""><a href="{{ url('cocktail-main') }}">Cocktails </a></li>
                  <li class=""><a href="{{ url('about-us') }}">about us </a></li>
                </ul>
            </div>
            <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#loginModal"><span>Sign In</span></button>
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
					<h2>Sign Up</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SIGN UP SECTION -->
<section class="clearfix signUpSection">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="signUpFormArea">
					<div class="priceTableTitle">
						<h2>Account Registration</h2>
						<p>Please fill out the fields below to create your account. We will send your account information to the email address you enter. Your email address and information will NOT be sold or shared with any 3rd party. If you already have an account, please, <a href="{{ url('sign-in') }}">click here</a>.</p>
					</div>
					<div class="signUpForm">
						<form action="#">
							<div class="formSection">
								<h3>Contact Information</h3>
								<div class="row">
                  <div class="form-group col-xs-12">
                    <div class="profileImage">
                      <img src="{{ url('img/dashboard/blank.jpg') }}" alt="Image User" class="img-circle">
                      <div class="file-upload profileImageUpload">
                        <div class="upload-area">
                          <input type="file" name="img[]" class="file">
                          <button class="browse" type="button">Upload a Picture <i class="icon-listy icon-upload"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="firstName" class="control-label">First Name*</label>
										<input type="text" class="form-control" id="firstName">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="lastName" class="control-label">Last Name*</label>
										<input type="text" class="form-control" id="lastName">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="emailAdress" class="control-label">Email Address*</label>
										<input type="email" class="form-control" id="emailAdress">
									</div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="emailAdress" class="control-label">Confirm Email Address*</label>
                    <input type="email" class="form-control" id="emailAdress" placeholder="info@example.com">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="datepicker" class="control-label">Date of Birth*</label>
                    <input type="date" class="form-control" id="dateBirth" placeholder="mm/dd/yyyy">
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
								</div>
							</div>
							<div class="formSection">
								<h3>Account Information</h3>
								<div class="row">
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Username*</label>
										<input type="text" class="form-control" id="usernames">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordFirst" class="control-label">Password*</label>
										<input type="password" class="form-control" id="password">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordAgain" class="control-label">Password (re-type)*</label>
										<input type="password" class="form-control" id="passwordAgain">
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Security Control</h3>
								<div class="row">
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Confirm that you are human*</label>
										<img src="{{ url('img/business/recaptcha.jpg') }}" alt="Image captcha" class="img-responsive img-rtl">
									</div>
									<div class="form-group col-xs-12">
										<div class="checkbox">
											<label>
												<input type="checkbox">
												I agree to the <a href="terms-of-services.html">Terms of Use</a> & <a href="#">Privacy Policy</a>. Your business listing is fully backed by our 100% money back guarantee.
											</label>
										</div>
									</div>
									<div class="form-group col-xs-12 mb0">
										<button type="submit" class="btn btn-primary">Create Account</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

      @include('footer-img')
</div>

  @include('login')
  @include('js-load')

</body>

</html>