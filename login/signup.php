<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$email=$_REQUEST['email'];
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'aqstills');


$sql_u = "SELECT * FROM signup WHERE username='$username'";
$res_u = mysqli_query($con, $sql_u);
$sql_e = "SELECT * FROM signup WHERE email='$email'";
$res_e = mysqli_query($con, $sql_e);



if($_REQUEST['username']=='' || $_REQUEST['email']=='' || $_REQUEST['password']=='' )
{
  echo ("<script LANGUAGE='JavaScript'>
window.alert('All fields are required \n Try Again....');
window.location.href='http://localhost/aqstills/loginform.php';
</script>");
exit();
}
elseif (mysqli_num_rows($res_u) > 0) {

  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Username already Exist Try Again...');
  window.location.href='http://localhost/aqstills/loginform.php';
  </script>");
  exit();

}
elseif (mysqli_num_rows($res_e) > 0) {
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Email already Exist Try Again...');
  window.location.href='http://localhost/aqstills/loginform.php';
  </script>");
  exit();

}

else
{
  $string="insert into signup values('$username','$password','$email')";
  mysqli_query($con,$string);

    echo ("<script LANGUAGE='JavaScript'>
  window.alert('You have successfully signed up! Login to continue!');
  window.location.href='http://localhost/aqstills/loginform.php';
  </script>");
  exit();
}




/*


if (isset($post['submit'])) {
  include_once 'signup.php';

  $username = $_post['username'];
  $password = $_post['password'];
  $email = $_post['email'];

  if (empty($username) || empty($password) || empty($email)) {
    header("Location: http://localhost/aqstills/loginform.php?signup=error");
    exit();
  } else{

    if (!preg_match("/^[a-zA-Z]*$/",$username) || !preg_match("/^[a-zA-Z]*$/",$password)) {
      header("Location: http://localhost/aqstills/loginform.php?signup=char");
      exit();
    } else {

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://localhost/aqstills/loginform.php?signup=invalidemail");
        exit();
      } else{
          header("Location: http://localhost/aqstills/loginform.php?signup=success");
          exit();
     }
   }
 }
}else{
  header("Location: http://localhost/aqstills/loginform.php?signup=error");
  exit();
}
*/
?>
