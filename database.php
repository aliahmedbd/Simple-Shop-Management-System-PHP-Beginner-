<?php
$address="localhost";
$path="root";
$password="";
$connection=mysql_connect($address,$path,$password) or die("Can not connect to the database");
mysql_select_db("shop",$connection);




?>