<?php
session_start();
include_once('database.php');

$value=mysql_query('SELECT * from products');
$result=$value;




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#aaaaaa">
<h1 align="center">Welcome Manager</h1>
<h2 align="center">Name:<?php  echo $_SESSION['name']; ?></h2>
<h2 align="center">Type:<?php  echo $_SESSION['type'];?></h2>
	<form action="manager.php" method='POST'>
<table align="center" bgcolor="#eeeeee">
	<tr>
	<td>Product Id:</td>
	<td><input type="text" name="s_id"></trd
	</tr>
	<tr>
	<td>Product Name:</td>
	<td><input type="list" name="s_name"></td>
	</tr>
	<tr>
		<td><input type="submit" name="search" value="Search"></td>
	</tr>
	</table>
</form>

<h3 align="center">Desire Products:</h3>
	<table bgcolor="#dddddd" align="center">
		<tr bgcolor="#cccfff">
			<td >Product Id   |</td>
			<td>Product Name   |</td>
			<td>Product Inventory   |</td>
			<td>Product Price   |</td>
			<td>Operation   |</td>
		</tr>
<?php
	include_once('database.php');


	if(isset($_POST['search'])){	
		$id=$_POST['s_id'];
		$val=$_POST['s_name'];
		if($val==""){
			$query=mysql_query("SELECT * FROM products where p_id=$id");
			$result=$query;
			while($final=mysql_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$final['p_id']."</td>";
				echo "<td>".$final['p_name']."</td>";
				echo "<td>".$final['p_inventory']."</td>";
				echo "<td>".$final['p_price']."</td>";
				//echo 
				echo "<td><a href=\"add.php?id=$final[p_id]\">Add</a> | <a href=\"remove.php?id=$final[p_id]\" onClick=\"return confirm('Are you sure you want to remove?')\">Remove</a>|<a href=\"changePrice.php?id=$final[p_id]\" onClick=\"return confirm('Are you sure you want to change price?')\">Change Price </a></td>";
				echo "</tr>";
			}

		}
		

	}

else{
	echo "You don't select any products!! ";
}

?>
</table>



<h3 align="center">All Products:</h3>

	<table bgcolor="eeeeee" align="center">
		<tr bgcolor="#cccccc">
			<td>Product Id    |</td>
			<td>Product Name   |</td>
			<td>Product Inventory   |</td>
			<td>Product Price   |</td>
			<td>Operation  </td>
		</tr>
		<?php
		include_once('database.php');
		$query=mysql_query("SELECT * FROM products");
			$result=$query;
			while($final=mysql_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$final['p_id']."</td>";
				echo "<td>".$final['p_name']."</td>";
				echo "<td>".$final['p_inventory']."</td>";
				echo "<td>".$final['p_price']."</td>";
				//echo 
				echo "<td><a href=\"add.php?id=$final[p_id]\">Add</a> | <a href=\"remove.php?id=$final[p_id]\" onClick=\"return confirm('Are you sure you want to remove?')\">Remove</a>|<a href=\"changePrice.php?id=$final[p_id]\" onClick=\"return confirm('Are you sure you want to change price?')\">Change Price </a></td>";
				echo "</tr>";
			}


		?>
	</table>

	<a  href="addnew.php">Add New Products</a>
	<br><br><br>


	<table align="center">
		<tr>
			<td>
				<td bgcolor="violet"><a href="registration.php">Register a Salesman<br>

				<?php
				//echo "<td><a href=\"registration.html\">Resister a salesman";
				//	echo "<td><a href=\"index.php\">Log Out";

				?>
			</td>

			<td bgcolor="red"><a href="index.php">Log Out</td>
		</tr>
	</table>

</body>
</html>
