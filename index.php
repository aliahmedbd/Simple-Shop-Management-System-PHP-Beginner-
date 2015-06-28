

<?php

//$connection=mysql_connect("localhost","root","") or die("Can not connect to the database");
//mysql_select_db("shop",$connection);
include_once('database.php');
session_start();
$result = mysql_query("SELECT * FROM users ORDER BY id DESC");

//session_start();		

 if (isset($_POST['submit'])) {

$Pass=$_POST["pass"];
$name=$_POST["uname"];
 	while($res = mysql_fetch_array($result)) { 		
 		if($name == $res['name'] && $Pass == $res['password'] && $res['type']=='admin'){
 			$_SESSION["name"] = $name;
			$_SESSION["type"] = "admin";
 			header('location: manager.php'); 
 		}
 		else if($name == $res['name'] && $Pass == $res['password'] && $res['type']=='user'){
 			$_SESSION["name"] = $name;
			$_SESSION["type"] = "Salesman";
 			header('location: user.php');

 		}
 		else{
 			echo "Inavalid!!!";
 		}
	}

 	
   	# code...
   }  







?>

<html>
	<body background="#cccc00">
	<h1 align="center">Shop Management System</h1>
		<form method="post" action="index.php">
		<table width="300px"  align="center" bgcolor=#ccdfaa>
		<tr>
			<td>Name:</td>
		     <td><input type="text"  name="uname" ></td>
			
		</tr>
		<br><br>
		<tr>
			<td>Password:</td>
		     <td><input type="password" name="pass" ></td><br> <br>
			
		</tr>

		<tr>
			 <td><input  type="submit"  value="Log In" name="submit" ></td>
			
		</tr>
		</table

		<table width='80%' border=0>


		</form>

	</body>


</html>