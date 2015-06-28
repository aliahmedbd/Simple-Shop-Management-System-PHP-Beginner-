<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<script type="text/javascript" src="reg.js"></script>
</head>
<body>
	<form method="post" action="registration.php" onsubmit=" return validation()">
	<h1 align="center">Salesman Registration</h1>
	<table align="center" border="2px">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="u_name" id="u_name" onblur="username()"></td>
			<td width="200px">
				<div id="mname">
					
				</div>
			</td>

		</tr>
				<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" id="pass" onblur="userpass()"></td>
			<td >
				<div id="mpass" width="200px">
					
				</div>
			</td>
			</tr>
			<tr>
			<td>Retype Password:</td>
			<td><input type="password" name="rpass" id="rpass" onblur="rPassword()"></td>
			<td  >
				<div id="mRpass" width="200px">
					
				</div>
			</td>
			
		</tr>
		</table>
		<br><br>
		<table align="center">
		    <tr>
		    <td><input type="submit" name="submit" id="submit" align="center"></td>
		    </tr>
		</table>
	</form>
	<?php
	include_once('database.php');
	//$a= flag (variabel flag from the function);
	//echo $a;
	//$a="<script>document.write(flag)</script>";
	//echo "dsfvfdgfgf";
	//echo $a;
	if(isset($_POST['submit'])){
		$uname=$_POST['u_name'];
		$pass=$_POST['pass'];
		//echo $name;
		//echo $password;
		

		$q=mysql_query("select * from user where name='".$uname."'") or die(mysql_error());
  		$n=mysql_fetch_row($q);
  		if($n>0)
  		{
   					$er='The username name: '.$uname.' is already present in database';
   					echo $er;
  		}
  

else{
		$sql="INSERT INTO users (name, password, type) VALUES ('".$uname."', '".$pass."', 'user')";
		$query=mysql_query($sql) or die("Sorry");
		header("Location:index.php");
	}
}


	


	?>
</body>
</html>