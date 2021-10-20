<?php 
 $email=$_POST['email'];
 $pass=$_POST['pwd'];
 $cn=mysqli_connect('localhost','root','');
 $selectdb="use iamdonor";
 mysqli_query($cn,$selectdb);
 $chkqry="select password from info where email = '$email'";
 $result = mysqli_query($cn,$chkqry);
 $ans = mysqli_fetch_row($result);
 if ($pass==$ans[0])
 {
   header('location:index.html');
 }
 else
 {
   echo "Invalid Login Credentials you bitch";
 }
?>
