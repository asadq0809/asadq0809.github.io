<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'aqstills');

if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['message']=='' )
{
  echo ("<script LANGUAGE='JavaScript'>
window.alert('All fields are required!');
window.location.href='http://localhost/aqstills/Hire.html';
</script>");
exit();
}
else
{
  $string="insert into hire values('$name','$email','$message')";
  mysqli_query($con,$string);

    echo ("<script LANGUAGE='JavaScript'>
  window.alert('Submitted successfully!');
  window.location.href='http://localhost/aqstills/Hire.html';
  </script>");
  exit();
}
?>
