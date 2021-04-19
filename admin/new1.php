<?php

$a=$_POST['a'];
$b=$_POST['b'];

$c=$_POST['c'];

mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");
mysql_query("INSERT INTO  `coffeecafe`.`user` (`id` ,`name` ,`user` ,`pwd`)VALUES (NULL ,  '$a',  '$b',  '$c');");
header("location:index.php");





?>