<?php

session_start();
$userid=$_SESSION['id'];
   $host="localhost";
$username="root"; 
$password=""; 
$db_name="giftagift"; 
$tbl_name="orders"; 
$db=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 


$sql="insert into $tbl_name(cardid,userid) values('$gid','$userid')";
echo $sql;
$res=mysqli_query($db,$sql);
if($res)