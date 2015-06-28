<?php
include_once('database.php');
$temp=$_GET['id'];
//$id=$_GET['p_id'];
echo $temp .'<br>';
//$query=mysql_query("SELECT * from products where p_id= $_GET['id']");
//$value=mysql_fetch_array($query);
//echo $value['p_inventory'];
$query=mysql_query("SELECT * from products where p_id= $temp");
$value=mysql_fetch_array($query);
$u_value = $value['p_inventory'] - 1;
echo $u_value;

$u_query=mysql_query("UPDATE products SET p_inventory=$u_value where p_id= $temp");
header("location: user.php");





?>