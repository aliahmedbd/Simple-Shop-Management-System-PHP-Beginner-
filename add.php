<?php
include_once('database.php');
$id=$_GET['id'];
//echo $id;
$query=mysql_query("SELECT * from products where p_id=$id");
$value=mysql_fetch_array($query);
$temp=$value['p_inventory'];
echo $temp;
$temp=$temp+1;

$u_query=mysql_query("UPDATE products set p_inventory=$temp where p_id=$id");

header('Location: manager.php');



?>