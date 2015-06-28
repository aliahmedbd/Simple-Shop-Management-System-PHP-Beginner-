<?php

include_once("database.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];	
	
	$query = mysql_query("UPDATE product SET quantity='$quantity', price='$price' WHERE id=$id");
	header("Location: display.php");
	}
?>
<?php

   $id = $_GET['id'];

   $query = mysql_query("SELECT * FROM product WHERE id=$id");
   while($res = mysql_fetch_array($query)){
   $quantity = $res['quantity'];
   $price = $res['price'];
}
?>
<html>
<head>	
	<title>Update </title>
</head>

<body>
	<a href="display.php"><button>Back</button></a>
	<br/>
	<h1 style="color: RED" align="center">Update</h1>
	<form name="form1" method="post" action="edit.php">
		<table width="50%" border="0" align="center">
			
			<tr> 
				<td>Quantity(kg)</td>
				<td><input type="text" name="quantity" value=<?php echo $quantity;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price" value=<?php echo $price;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
