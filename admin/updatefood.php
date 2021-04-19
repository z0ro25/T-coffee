<?php
mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");

$a=$_POST['a'];
$c=$_POST['c'];
$d=$_POST['d'];
mysql_query("UPDATE `food` SET  `product` = '$c',`price` = '$d' where `f_id`='$a' ");

header('location:fetchfood.php');
?>

