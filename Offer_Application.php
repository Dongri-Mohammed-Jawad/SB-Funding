<!DOCTYPE html>
<html lang="zxx">

<head>
<?php include("Head.php"); ?>
</head>

<body>

<?php include("Header.php"); ?>
        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tm-breadcrumb">
                            <h2>Credit Application</h2>
                            <ul>
                                <li><a href="index.php" title="Home">Home</a></li>
                                <li>Capital Application</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="main-content">

            <!-- Services Area -->
            <div class="tm-section services-area tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 col-12">
                            <div class="tm-section-title text-center">
                                <!--<h4>IT TAKES LESS THAN A MINUTE TO APPLY</h4>-->
                                <h4>CAPITAL APPLICATION</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row services-wrap-2">

                        <!-- Single Service -->
                        <div class="col-lg-8  wow fadeInUp m-auto">
                            <div class="tm-service2 text-center">
                                <form action="Apply.php" id="tm-contactform" class="tm-contact-form" method="post">
								<div class="form-group">
									<label for="One">How long have you been in business?</label>
									<select name="One" class="form-control">
										<option>0 - 6 Months</option>
										<option>6 - 12 Months</option>
										<option>1 - 3 Years</option>
										<option>3 Years or More</option>
									</select>
								</div>
								<div class="form-group">
									<label for="Two">What is your annual revenue?</label>
									<select name="Two" class="form-control">
										<option>$0 - $1,00,000</option>
										<option>$1,00,000 - $2,00,000</option>
										<option>$2,00,000 - $5,00,000</option>
										<option>$5,00,000 - $10,00,000</option>
										<option>$10,00,000 - $50,00,000</option>
									</select>
								</div>
								<div class="form-group">
									<label for="Three">How much money do you need?</label>
									<select name="Three" class="form-control">
										<option>$0 - $5,000</option>
										<option>$5,000 - $25,000</option>
										<option>$25,000 - $75,000</option>
										<option>$75,000 - $1,50,000</option>
										<option>$1,50,000+</option>
									</select>
								</div>
								<div class="form-group">
									<label for="Four">What’s the name of your business?</label>
									<input type="text" name="Four" class="form-control" required />
								</div>
								<div class="form-group">
									<label for="Four">What’s the best way to reach you?</label>
									<input type="int" name="Phone" class="form-control" required placeholder="Phone Number"  />
									<input type="text" name="Email" class="form-control mt-1" required placeholder="Email" />
									<input type="text" name="First_Name" class="form-control mt-1" required placeholder="First Name" />
									<input type="text" name="Last Name" class="form-control mt-1" required placeholder="Last Name" />
									<!-- Thank you for completing our funding request form. -->
								</div>
								<div class="col-md-12" id="offer-btn">
								<p class="alert alert-success"><b>We Received your Mail Successfully. Click GET AN OFFER for grab Offer</b></p><br>
								<center>
									<a href="Offer_Application_Form.php"><input type="button" value="GET AN OFFER" name="ApplyOfferSubmit" class="btn btn-success" /></a><br><br>
								</center>
								</div>
								<center>
									<input type="submit" value="SUBMIT" name="ApplySubmit" class="btn btn-info" />
								</center>
                                </form>
						  
                            </div>
                        </div>
                        <!--// Single Service -->


                    </div>
                </div>
            </div>
            <!--// Services Area -->



		  
		  
		  
		  
        </main>
        <!--// Main Content -->

<?php include("Footer.php"); ?>
    </div>

    <!-- Js Files -->
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <!--// Js Files -->
</body>

</html>