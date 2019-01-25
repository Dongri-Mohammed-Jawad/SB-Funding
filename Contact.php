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
                            <h2>Contact Us</h2>
                            <ul>
                                <li><a href="index.php" title="Home">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="main-content">

            <!-- Contact Us -->
            <div class="tm-section contact-us-area tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center mt-30-reverse">

                        <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-placeholder"></i>
                                </span>
                                <h5>Address</h5>
                                <p> 218-75 hempstead ave queens village NY 11429</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-call"></i>
                                </span>
                                <h5>Phone</h5>
                                <p><a href="#" title="Phone">718 464 2000</a></p>
						  <br>
                                <!--<p><a href="#"></a></p>-->
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-email-1"></i>
                                </span>
                                <h5>Address</h5>
                                <p>Email: <a href="mailto:Cihinc@aol.com" title="Email">Cihinc@aol.com</a></p>
						  <br>
                                <!--<p>Skype: <a href="#">example.name</a></p>-->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container tm-padding-section-top">
                    <div class="row no-gutters">
                        <div class="col-lg-7">
                            <div class="tm-contact-formwrapper">
                                <h5>Get in Touch</h5>
                                <form action="Contact_Us.php" method="post">
                                    <div class="tm-contact-formfield">
                                        <input type="text" name="Name" placeholder="Name*" required>
                                    </div>
                                    <div class="tm-contact-formfield">
                                        <input type="email" name="Email" placeholder="Email*" required>
                                    </div>
                                    <div class="tm-contact-formfield">
                                        <input type="text" name="Subject" placeholder="Subject*">
                                    </div>
                                    <div class="tm-contact-formfield">
                                        <textarea name="Message" cols="30" rows="5" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="tm-contact-formfield">
                                        <input type="submit" class="tm-button" value="Send Message" name="ContactSubmit" />
                                    </div>
<!--								<div class="form-group">
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
<!--								</div>
								<center>
									<input type="submit" value="SUBMIT" name="ApplySubmit" class="btn btn-info" />
								</center>-->
                                </form>
                                <p class="form-messages"></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="tm-contact-map">
                                <div id="google-map"></div>
						  <?php //include("Location2.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Contact Us -->

        </main>
        <!--// Main Content -->

<?php include("Footer.php"); ?>
    </div>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgwgIuDRkO7HlxvpWN-vPePnGVWss5r5g"></script>
    <script src="assets/js/google-map.js"></script>


    <!-- Js Files -->
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajaxmail.js"></script>
    <script src="assets/js/main.js"></script>
    <!--// Js Files -->
</body>

</html>