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
   session_start();
   $_SESSION['email']=$email;
   header('location:index.html');
 }
 else
 {  
    $message = "Invalid Credentials";
    echo "<script type='text/javascript'>alert('$message');";
    echo 'window.location= "index.html#signup" </script>';
 }
?>
