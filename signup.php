

<?php
  session_start();
   $_SESSION['name']=$_POST['name'];
   $_SESSION['city']=$_POST['city'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['pwd'];
   $city=$_POST['city'];
   $cn=mysqli_connect('localhost','root','');
   $dbselect="use iamdonor";
   $answerr=mysqli_query($cn,$dbselect);
   $qry="insert into info values ('$name','$email','$city','$password')";
   $result=mysqli_query($cn,$qry);
   mysqli_error($cn);
   $qry2="commit";
   mysqli_query($cn,$qry2);
   header('location:index.html');
?>