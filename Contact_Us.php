<?php
if(isset($_POST['ContactSubmit']))
{
	
	$ContactSubject = $_POST['Subject'];
	$ContactEmail = $_POST['Email'];
	$ContactName = $_POST['Name'];
	$ContactMessage = $_POST['Message'];
	
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
				<h2 style='font-family:Arial;'>Smart Business Funding <mark style='background:#E3E1E3;'>Contact Us</mark> Details :</h2>
				<table style='font-family:Palatino Linotype;border-collapse:no-collapse;font-size:18px;color:#875A84;width:50%;'>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Name </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactName</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Email </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactEmail</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Subject </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactSubject</td>
					</tr>
					<tr>
						<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Message </th>
						<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ContactMessage</td>
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
		header("refresh:0.001;url=ThankYouContactUs.php");
	}
	else
	{
		header("refresh:0.001;url=SorryForAppointment.php");
	}
	
}
?>