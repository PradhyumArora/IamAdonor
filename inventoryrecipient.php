<?php
 $group=$_GET['group'];
 $cn=mysqli_connect('localhost','root','');
 $selectdb="use iamdonor";
 mysqli_query($cn,$selectdb);
 $qry="update inventory set stock=(stock+1) where bgroup='$group' ";
 mysqli_query($cn,$qry);
 header('location:recipients.php');
?>