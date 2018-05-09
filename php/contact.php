<html>
<head>
<style>
a:link{
  text-decoration:none;
}
a:visited{
  text-decoration: none;
}
</style>
</head>
<body>
  <?php


if(isset($_POST['name'])){ $name = $_POST['name']; }
if(isset($_POST['surname'])){$surname=$_POST['surname'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['phone'])){$phone=$_POST['phone'];}
if(isset($_POST['message'])){$message=$_POST['message'];}


  $to='sanathsingavarapu99@gmail.com';
  $subject='Want to collabrate';
  $msg="Name:$name\n".
  "Surname:$surname\n".
  "Phone:$phone\n".
  "Email:$email\n".
  "Message:$message\n";
  mail($to,$subject,$msg,'From:'.$email);
  ?>

<img src="../images/submit.png" style="margin 0px auto;">
<h1>Thanks for submitting the form</h1>
<a href="../index.html">Back to Home</a>



</body>
</html>
