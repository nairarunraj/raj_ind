<? 
  $message ="Name : ".$_POST[name]."\r\n\n";
  $message .= "Email : ".$_POST[email]."\r\n\n";
  $message .= "Mobile No : : ".$_POST[mobi]."\r\n\n";
  $message .= "Message : ".$_POST[message]."\r\n\n";
		 
$to = "rameshchavan06@gmail.com";
$subject = "Raj Industries Website Visiter";
$from = "feedback@f5realtors.com";
$headers = 'From: '.$from; 
 
mail($to,$subject,$message,$headers);
if($status) 
{
	header("Location:thankyou.html");
	}
	else
	{
	header("Location:error.html");
	}
?>


