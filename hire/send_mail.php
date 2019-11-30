<?php
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$mailfrom=$_POST['mail'];
	$message=$_POST['message'];

	$mailTo ="asadqureshi0809@yahoo.in";
	$headers = "From: ".$mailfrom;
	$txt = "You have recieved an e-mail from ".$name."\n\n".$message;

mail($mailTo, $txt, $headers);
echo ("<script LANGUAGE='JavaScript'>
window.alert('Submitted successfully!');
window.location.href='http://localhost/aqstills/Hire.html';
</script>");
exit();
}
?>
