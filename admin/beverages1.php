<?php
mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");
$a=$_POST['menutype'];
$b=$_POST['product'];
$d=$_FILES['image']['tmp_name'];
$e='../img/'.$_FILES['image']['name'];
$g=$_FILES['image']['name'];
$f=$_POST['price'];

move_uploaded_file($d,$e);

mysql_query("INSERT INTO `beverages` (`b_id` ,`menu_type` ,`product` ,`image`,`price`)VALUES ('',  '$a',  '$b',  '$g','$f')");

?>

<img src="<?php echo  $e;?>" />