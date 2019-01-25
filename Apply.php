<?php
if(isset($_POST['ApplySubmit']))
{
	$One = $_POST['One'];
	$Two = $_POST['Two'];
	$Three = $_POST['Three'];
	$Four = $_POST['Four'];
	
	$ContactPhone = $_POST['Phone'];
	$ContactEmail = $_POST['Email'];
	$ContactFirstName = $_POST['First_Name'];
	$ContactLastName = $_POST['Last_Name'];
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
				<h2 style='font-family:Arial;'>Smart Business Funding <mark style='background:#E3E1E3;'>CAPITAL APPLICATION PART 1</mark> Details :</h2>
				<table style='font-family:Palatino Linotype;border-collapse:no-collapse;font-size:18px;color:#875A84;width:50%;'>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>How long have you been in business? </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$One</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>What is your annual revenue? </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Two</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>How much money do you need? </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Three</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>What’s the name of your business? </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Four</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Phone Number </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactPhone</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Email </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactEmail</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>First Name </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactFirstName</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Last Name </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactLastName</td>
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
		header("refresh:0.001;url=Offer_Application.php#offer-btn");
	}
	else
	{
		header("refresh:0.001;url=SorryForAppointment.php");
	}
	
}
?>