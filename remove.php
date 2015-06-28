<?php
include_once('database.php');
$id=$_GET['id'];
$query=mysql_query("SELECT * from products where p_id=$id");
$value=mysql_fetch_array($query);
$temp=$value['p_inventory'];
$temp=$temp-1;
$u_query=mysql_query("UPDATE products set P_inventory=$temp where p_id=$id");

header('Location: manager.php');



?>