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
                                <li>Credit Application</li>
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
                        <div class="col-lg-12 col-md-10 col-12">
                            <div class="tm-section-title text-center">
                                <!--<h4>IT TAKES LESS THAN A MINUTE TO APPLY</h4>-->
                                <h4>CAPITAL OFFER APPLICATION</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row services-wrap-2">

                        <!-- Single Service -->
                        <div class="col-lg-12  wow fadeInUp m-auto">
                            <div class="tm-service2 text-center">
					   <p class="alert alert-success"><b>Offer Application Sent Successfully.</b></p>
                                <form action="Apply_Offer_Form.php" method="post">
							<fieldset>
								<legend style="text-align:left;">OWNER INFORMATION</legend>
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Name">Name : </label>
											<input type="text" class="form-control" name="Name" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Date of Birth">Date Of Birth : </label>
											<input type="date" class="form-control" name="DOB" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="SSN">SSN : </label>
											<input type="text" class="form-control" name="SSN" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Phone">Phone : </label>
											<input type="int" class="form-control" name="Phone" required />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
								<!-- End of the 12 Column Row -->
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Current Address">Current Address : </label>
											<input type="text" class="form-control" name="Current_Address" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="City">City : </label>
											<input type="text" class="form-control" name="City" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="State">State : </label>
											<input type="text" class="form-control" name="State" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Zipcode">Zipcode : </label>
											<input type="text" class="form-control" name="Zipcode" required />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
							</fieldset>
							<!-- Owner Information End -->
							<!-- Second Owner Information Start -->
							<fieldset>
								<legend style="text-align:left;">SECOND OWNER INFORMATION</legend>
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Name">Name : </label>
											<input type="text" name="Second_Name" class="form-control" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Date of Birth">Date Of Birth : </label>
											<input type="date" class="form-control" name="Second_DOB" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="SSN">SSN : </label>
											<input type="text" class="form-control" name="Second_SSN" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Phone">Phone : </label>
											<input type="int" class="form-control" name="Second_Phone" required />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
								<!-- End of the 12 Column Row -->
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Current Address">Current Address : </label>
											<input type="text" class="form-control" name="Second_Current_Address" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="City">City : </label>
											<input type="text" class="form-control" name="Second_City" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="State">State : </label>
											<input type="text" class="form-control" name="Second_State" required />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Zipcode">Zipcode : </label>
											<input type="text" class="form-control" name="Second_Zipcode" required />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
							</fieldset>
							<fieldset>
								<legend style="text-align:left;">BUSINESS INFORMATION</legend>
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Business Legal Name">Business Legal Name : </label>
											<input type="text" class="form-control" name="Business_Legal_Name" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Business DBA Name">Business DBA Name : </label>
											<input type="text" class="form-control" name="Business_DBA_Name" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Federal Tax ID">Federal Tax ID : </label>
											<input type="text" class="form-control" name="Federal_Tax_ID" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Business Start Date">Business Start Date : </label>
											<input type="date" class="form-control" name="Business_Start_Date" />
										</div>
									</div>
								</div>
								<!-- End of 12 Column -->
								<div class="col-md-12 float-left" style="text-align:left;">
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Type of Business Entity">Type of Business Entity : </label>
											<select name="Type_Of_Business_Entity" class="form-control">
												<option value="Sole Proprietor">Sole Proprietor</option>
												<option value="LLC">LLC</option>
												<option value="Partnership">Partnership</option>
												<option value="LTD. Partnership">LTD. Partnership</option>
												<option value="Corporation">Corporation</option>
												<option value="LLP">LLP</option>
											</select>
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Primary Business Structure">Primary Business Structure : </label>
											<select name="Primary_Business_Structure" class="form-control">
												<option value="Home-Based">Home-Based</option>
												<option value="Franchise">Franchise</option>
												<option value="E-Commerce">E-Commerce</option>
												<option value="None Applicable">None Applicable</option>
											</select>
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Does Business have any open MCA or Loan Accounts">Does Business have any open MCA or Loan Accounts : </label>
											<select name="Loan_Accounts" class="form-control">
												<option value="YES">YES</option>
												<option value="NO">NO</option>
											</select>
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="If Yes, Balance">If Yes, Balance : </label>
											<input type="text" name="Balance" class="form-control" />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
								<!-- End of 12 COlumn  -->
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Physical Street Address">Physical Street Address : </label>
											<input type="text" class="form-control" name="Physical_Street_Address" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="How Long?">How Long? : </label>
											<input type="text" class="form-control" name="How_Long" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="City">City : </label>
											<input type="text" class="form-control" name="Business_City" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="State">State : </label>
											<input type="text" class="form-control" name="Business_State" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Zipcode">Zipcode : </label>
											<input type="int" class="form-control" name="Business_Zipcode" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Phone">Phone : </label>
											<input type="int" class="form-control" name="Business_Phone" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Email">Email : </label>
											<input type="email" class="form-control" name="Business_Email" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Fax">Fax : </label>
											<input type="text" class="form-control" name="Business_Fax" />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
								<!-- 12 Column Ends here -->
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-6 float-left">
										<div class="form-group">
											<label for="Billing Address if different from Physical Address">Billing Address if different from Physical Address : </label>
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-6 float-left">
										<div class="form-group">
											<input type="text" class="form-control" name="Billing_Address" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="City">City : </label>
											<input type="text" class="form-control" name="Billing_City" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="State">State :</label>
											<input type="text" class="form-control" name="Billing_State" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Zipcode">Zipcode : </label>
											<input type="text" class="form-control" name="Billing_Zipcode" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Phone">Phone : </label>
											<input type="int" class="form-control" name="Billing_Phone" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Email">Email : </label>
											<input type="text" class="form-control" name="Billing_Email" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Fax">Fax : </label>
											<input type="text" class="form-control" name="Billing_Fax" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Industry Type">Industry Type : </label>
											<input type="text" class="form-control" name="Industry_Type" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="State of Incorporation">State of Incorporation : </label>
											<input type="text" class="form-control" name="State_Of_Incorporation" />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
								<!-- 12 Column End -->
								<div class="col-md-12 float-left" style="text-align:left;">
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Business Location">Business Location :</label>
											<select name="Business_Location" class="form-control">
												<option value="Rented">Rented</option>
												<option value="Mortgaged">Mortgaged</option>
											</select>
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Landlord Name">Landlord Name : </label>
											<input type="text" class="form-control" name="Landlord_Name" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Landlord Phone">Landlord Phone : </label>
											<input type="text" class="form-control" name="Landlord_Phone" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Current Credit Card Processor">Current Credit Card Processor : </label>
											<input type="text" class="form-control" name="Current_Credit_Card_Processor" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Monthly Credit Card Sales">Monthly Credit Card Sales : </label>
											<input type="text" class="form-control" name="Monthly_Credit_Card_Sales" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Gross Annual Sales">Gross Annual Sales : </label>
											<input type="text" class="form-control" name="Gross_Annual_Sales" />
										</div>
									</div>
									<!-- Individual Form Field -->
									<div class="col-md-3 float-left">
										<div class="form-group">
											<label for="Purpose of Loan">Purpose of Loan : </label>
											<input type="text" class="form-control" name="Purpose_Of_Loan" />
										</div>
									</div>
									<!-- Individual Form Field -->
								</div>
								<!-- 12 Column Ends Here -->
								<div class="col-md-12 float-left" style="text-align:left;">
									<p><b>Terms & Conditions :</b></p>
									<p style="text-align:justify;">By clicking below I ACCEPT TERMS & CONDITIONS, each of the above listed busines s and business owner/ officer (individually and collectively, “you”)authorize [Smart
Business Funding](‘SBF’) and each of its representatives, successors, assign and designees (‘Recipients”) that may be involved with or
acquire commercial loans having daily repayment features or purchase of future r eceivables including Merchant Cash Advance
transactions, including without limitation the application therefor (collectively, “Transactions”)to obtain consumer or personal,
business and investigative reports and other information about you, including credi t card processor statements and bank statements,
from one or more consumer reporting agencies, such as TransUnion, Experian and Equifax, and from other credit bureaus, banks,
creditors and other third parties. You also Authorize SBF to transmit this application form, along with any of the foregoing information
obtained in connection with your application, to any or all of the Recipients for the foregoing purposes. You also consent to the
release, by any creditor or financial institution, or any information relating to any of you, to SBF and to each of the recipients, on its
own behalf.”</p>
								</div>
							</fieldset>
							<div class="col-md-12 float-left alert alert-info" style="text-align:left;margin-top:20px;">
								<div class="col-md-6 float-left">
									<p>Accept Terms & Conditions : </p>
								</div>
								<div class="col-md-6 float-left">
									<select id="sel" onchange="updateCheckBox(this)" name="T_C">
										<option value="DECLINE">DECLINE</option>
										<option value="ACCEPT">ACCEPT</option>
									</select>
								</div>
							</div>
							<center>
								<input type="submit" name="OfferFormSubmit" class="btn-info" id="chk1" disabled="disabled" value="SUBMIT" />
							</center>
                                </form>
<script>
    function updateCheckBox(opts) {
        var chks = document.getElementsByName("OfferFormSubmit");

        if (opts.value == 'ACCEPT') {
            for (var i = 0; i <= chks.length - 1; i++) {
                chks[i].disabled = false;
                document.getElementById('div').innerHTML = 'Checkboxes enabled';
            }
        }
        else {
            for (var i = 0; i <= chks.length - 1; i++) {
                chks[i].disabled = true;
                chks[i].checked = false;
                document.getElementById('div').innerHTML = 'Checkboxes disabled and unchecked';
            }
        }
    }
</script>						  
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