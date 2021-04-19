<html>
<body>
<html>
<head>
<title></title>
                         <link rel="stylesheet" type="text/css" href="css/welcome.css"/>
</head>


<body>

<div class="maindiv" >

<?php
mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");
$a=$_GET['preeti']; 
$x=mysql_query("SELECT * FROM `food` WHERE `f_id`='$a'");
while($y=mysql_fetch_array($x) )
{
?>
<form action="updatefood.php" method="post">
<input type="hidden" value="<?php echo $y[0]; ?>" name="a" />
Product Name<input type="text" value="<?php echo $y[2]; ?>" name="c" />
Price<input type="text" value="<?php echo $y[4]; ?>" name="d" />

<input type="submit" value="submit" />
</form>
<?php
}
?>
</div>
</body>
</html>
