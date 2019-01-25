<?php
if(isset($_POST['OfferFormSubmit']))
{
	$Name = $_POST['Name'];
	$DOB = $_POST['DOB'];
	$SSN = $_POST['SSN'];
	$Phone = $_POST['Phone'];
	$Current_Address = $_POST['Current_Address'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Zipcode = $_POST['Zipcode'];
	$Second_Name = $_POST['Second_Name'];
	$Second_DOB = $_POST['Second_DOB'];
	$Second_SSN = $_POST['Second_SSN'];
	$Second_Phone = $_POST['Second_Phone'];
	$Second_Current_Address = $_POST['Second_Current_Address'];
	$Second_City = $_POST['Second_City'];
	$Second_State = $_POST['Second_State'];
	$Second_Zipcode = $_POST['Second_Zipcode'];
	$Business_Legal_Name = $_POST['Business_Legal_Name'];
	$Business_DBA_Name = $_POST['Business_DBA_Name'];
	$Federal_Tax_ID = $_POST['Federal_Tax_ID'];
	$Business_Start_Date = $_POST['Business_Start_Date'];
	$Type_Of_Business_Entity = $_POST['Type_Of_Business_Entity'];
	$Primary_Business_Structure = $_POST['Primary_Business_Structure'];
	$Loan_Accounts = $_POST['Loan_Accounts'];
	$Balance = $_POST['Balance'];
	$Physical_Street_Address = $_POST['Physical_Street_Address'];
	$How_Long = $_POST['How_Long'];
	$Business_City = $_POST['Business_City'];
	$Business_State = $_POST['Business_State'];
	$Business_Zipcode = $_POST['Business_Zipcode'];
	$Business_Phone = $_POST['Business_Phone'];
	$Business_Email = $_POST['Business_Email'];
	$Business_Fax = $_POST['Business_Fax'];
	$Billing_Address = $_POST['Billing_Address'];
	$Billing_City = $_POST['Billing_City'];
	$Billing_State = $_POST['Billing_State'];
	$Billing_Zipcode = $_POST['Billing_Zipcode'];
	$Billing_Phone = $_POST['Billing_Phone'];
	$Billing_Email = $_POST['Billing_Email'];
	$Billing_Fax = $_POST['Billing_Fax'];
	$Industry_Type = $_POST['Industry_Type'];
	$State_Of_Incorporation = $_POST['State_Of_Incorporation'];
	$Business_Location = $_POST['Business_Location'];
	$Landlord_Name = $_POST['Landlord_Name'];
	$Landlord_Phone = $_POST['Landlord_Phone'];
	$Current_Credit_Card_Processor = $_POST['Current_Credit_Card_Processor'];
	$Monthly_Credit_Card_Sales = $_POST['Monthly_Credit_Card_Sales'];
	$Gross_Annual_Sales = $_POST['Gross_Annual_Sales'];
	$Purpose_Of_Loan = $_POST['Purpose_Of_Loan'];
	$T_C = $_POST['T_C'];
	//$ContactPhone = $_POST['Phone'];
	
	$To = "jawadlee92@gmail.com";
	$DateOf = Date('d/m/y');
	$MailSubject = "Contact Us Request ($ContactName $DateOf)";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: info@crammaze.com" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $ContactEmail";
	
	$Message = "
	<html>
			<body>
				<h2 style='font-family:Arial;'>Smart Business Funding <mark style='background:#E3E1E3;'>CAPITAL OFFER APPLICATION</mark> Details :</h2>
				<table style='font-family:Palatino Linotype;border-collapse:no-collapse;font-size:18px;color:#875A84;width:50%;'>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Name : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Name</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Date Of Birth : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$DOB</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>SSN : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$SSN</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Phone : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Phone</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Current Address : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Current_Address</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>City : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$City</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>State : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$State</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Zipcode : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Zipcode</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Second Owner Name : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_Name</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Second Owner Date Of Birth : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_DOB</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Second Owner SSN : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_SSN</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'> Second Owner Phone : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_Phone</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Second Owner Current Address : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_Current_Address</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Second Owner City : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_City</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Second Owner State : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_State</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Second Owner Zipcode : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Second_Zipcode</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Business Legal Name : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_Legal_Name</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Business DBA Name : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_DBA_Name</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Federal Tax ID : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Federal_Tax_ID</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Business Start Date  </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_Start_Date</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Type of Business Entity : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Type_Of_Business_Entity</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Primary Business Structure : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Primary_Business_Structure</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Does Business have any open MCA or Loan Accounts : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Loan_Accounts</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>If Yes, Balance : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Balance</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Physical Street Address : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Physical_Street_Address</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>How Long? : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$How_Long</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>City : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_City</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>State : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_State</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Zipcode : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_Zipcode</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Phone : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_Phone</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Email : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_Email</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Fax : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_Fax</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Billing Address if different from Physical Address : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Billing_Address</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>City : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Billing_City</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>State : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Billing_State</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Zipcode : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Billing_Zipcode</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Phone : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Billing_Phone</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Email : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Billing_Email</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Fax : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Billing_Fax</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Industry Type : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Industry_Type</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>State of Incorporation : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$State_Of_Incorporation</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Business Location : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Business_Location</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Landlord Name : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Landlord_Name</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Landlord Phone : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Landlord_Phone</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Current Credit Card Processor : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Current_Credit_Card_Processor</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Monthly Credit Card Sales : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Monthly_Credit_Card_Sales</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Gross Annual Sales : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Gross_Annual_Sales</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Purpose of Loan : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Purpose_Of_Loan</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Accept Terms & Conditions : </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$T_C</td>
					</tr>
				</table>
				<p><strong>Thanks & Regards,</strong></p>
				<p><strong><a href='http://crammaze.com/' style='text-decoration:none;color:#7C2BDF;'>Crammaze Inc.,</a></strong></p>
			</body>
		</html>
		";
	
	$Mail = mail($To, $MailSubject, $Message, $headers);
	if($Mail)
	{
		header("refresh:0.001;url=SuccessOfferForm.php");
	}
	else
	{
		header("refresh:0.001;url=FailOfferForm.php");
	}
	
}
?>