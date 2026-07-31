<?
 
$company = $_POST[Company];
$name = $_POST[Name];
$designation = $_POST[Designation];
$address = $_POST[Address];
$tel = $_POST[Tel];
$email = $_POST[email];
$productTextile = $_POST[ProductTextile];
$productEngg = $_POST[ProductEngg];
$comment = $_POST[Comment];

 
$messages = 'Website Enquiry Information'."\r\n\n".'Company : '.$company."\r\n\n".'Name : '.$name."\r\n\n".'Address : '.$address."\r\n\n".'Tel : '.$tel."\r\n\n".'Email : '.$email."\r\n\n".'Comment : '.$comment."\r\n\n";


$to = "rajindustries@msn.com";
$subject = "Raj Industries Website Visiter";
$from = "info@rajindustries.org";
$headers = 'From: '.$from; 
 
mail($to,$subject,$message,$headers);

$status=mail($to, $subject, $messages, $headers);

if($status) 
{
	header("Location:thankyou.html");
	}
	else
	{
	header("Location:error.html");
}
 
?>
