<!DOCTYPE html>
<html>
<head>
	<title>new products</title>
</head>
<body>
<?php
include_once('database.php');
if (isset($_POST['add'])) {
	$name=$_POST['pname'];
	$invetory=$_POST['pinven'];
	$pprice=$_POST['price'];

	$qurey=mysql_query("INSERT INTO products (p_name, p_inventory,p_price) VALUES ('".$name."', '".$invetory."', '".$pprice."')") or die("Error");
	header("Location:manager.php");



	# code...
}



?>
<form method="post" action="addnew.php">
<h1 align="center">Add New Products</h1>
	<table align="center">
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="pname"></td>
		</tr>
				<tr>
			<td>Product Inventory</td>
			<td><input type="text" name="pinven"></td>
			</tr>
					<tr>
			<td>Product Price</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
		<br>
		<td></td>
			<td align="right"><input type="submit" name="add" value="Add Products"></td>
		</tr>
		
	</table>
	
</form>



</body>
</html>