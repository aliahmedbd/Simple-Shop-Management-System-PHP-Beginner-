

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#cccccc">







	 <?php
	 /*
include_once('database.php');
$temp=$_GET['id'];
$variable=$temp;
//$id=$_GET['p_id'];
echo $temp .'<br>';
//$query=mysql_query("SELECT * from products where p_id= $_GET['id']");
//$value=mysql_fetch_array($query);
//echo $value['p_inventory'];
$query=mysql_query("SELECT * from products where p_id= $variable");
$val=mysql_fetch_array($query);
$temp1=$val['p_name'];
$temp2=$val['p_price'];
if(isset($_GET['submit'])){
	$new=$_GET['n_price'];
	$u_query=mysql_query("UPDATE products SET p_price=$new where p_id= $variable");

}


//$u_query=mysql_query("UPDATE products SET p_inventory=$u_value where p_id= $temp");
//header("location: user.php");

*/

include_once('database.php');
if(isset($_POST['update'])){
	$pid=$_POST['id'];
	$pname=$_POST['p_name'];
	$oprice=$_POST['o_price'];
	$nprice=$_POST['n_price'];

	if(empty($nprice)) {	
			
		if(empty($nprice)) {
			echo "<font color='red'>New price field is empty.</font><br/>";
		}		
	} else {	
		
		$result = mysql_query("UPDATE products SET p_price='$nprice' WHERE p_id=$pid") or die("Error");
		
		
		//header("Location: manager.php");
	}




}



?>


<?php
//include_once('database.php');
	$id = $_GET['id'];
	//echo $id;


	$result = mysql_query("SELECT * FROM products WHERE p_id=$id");

	while($res = mysql_fetch_array($result))
	{
		$temp1 = $res['p_name'];
		$temp2 = $res['p_price'];
	
	}
?>


	 <form action="changePrice.php" method="post">
	 	<h1 align="center">Change Product Price</h1><br><br>
	 	<table align="center" bgcolor="#eeeffee">
	 		<tr>

	 			<td>Id:</td>
	 			<td>
	 			   <input type='text' name="id" value="<?php echo $_GET['id'] ?>" >
	 			   

	 			</td>
	 		</tr>
	 		<tr>
	 		<tr>

	 			<td>Product Name:</td>
	 			<td>
	 			   <input type='text' name="p_name" value="<?php echo $temp1; ?>" >
	 			   

	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Product Old price:</td>
	 			<td><input type='text' name="o_price" value="<?php echo $temp2  ?>" ></td>
	 		</tr>
	 		<tr>
	 			<td>Product New price:</td>
	 			<td><input type='text' name="n_price" ></td>
	 		</tr>
	 		<tr>
	 			
	 			<td><input type='submit' name="update" value="Change Price" ></td>
	 		</tr>
	 	</table>
	 	
	 </form>



</body>

</html>

