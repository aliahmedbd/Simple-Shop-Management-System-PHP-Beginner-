
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="blue">
<h1 align="center">Welcome Salesman</h1>
<h2 align="right">Name:<?php session_start(); echo $_SESSION['name']; ?></h2>
<h2 align="right">Type:<?php  echo $_SESSION['type']; ?></h2>
<form action="user.php" method='POST'>
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
			while($value=mysql_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$value['p_id']."</td>";
				echo "<td>".$value['p_name']."</td>";
				echo "<td>".$value['p_inventory']."</td>";
				echo "<td>".$value['p_price']."</td>";
				if($value['p_inventory'] > 0){
					echo "<td><a href=\"sell.php?id=$value[p_id]\" onClick=\"return confirm('Are you sure you want to sell?')\">Sell</a></td>";
				}
				else{
					echo "<td><a href=\"user.php\" onClick=\"return confirm('You have not enough products!')\">Sell</a></td>";

				}
				echo "</tr>";
				echo "<br>";
			}
		}
		/*elseif($id==""){
			$query=mysql_query("SELECT * FROM products where p_name=$val");
			$result=$query;
			while($value=mysql_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$value['p_id']."</td>";
				echo "<td>".$value['p_name']."</td>";
				echo "<td>".$value['p_inventory']."</td>";
				echo "<td>".$value['p_price']."</td>";
				if($value['p_inventory'] > 0){
					echo "<td><a href=\"sell.php?id=$value[p_id]\" onClick=\"return confirm('Are you sure you want to sell?')\">Sell</a></td>";
				}
				else{
					echo "<td><a href=\"user.php\" onClick=\"return confirm('You have not enough products!')\">Sell</a></td>";

				}
				echo "</tr>";
				echo "<br>";
			}


		}*/

	}

//else{
	//echo "You don't select any products!! ";
//}

?>
</table>
<h3 align="center" color="Green">All Products-</h3>
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

	$query=mysql_query("SELECT * FROM products");
		$result=$query;
		while($value=mysql_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$value['p_id']."</td>";
		echo "<td>".$value['p_name']."</td>";
		echo "<td>".$value['p_inventory']."</td>";
		echo "<td>".$value['p_price']."</td>";
		if($value['p_inventory'] > 0){
			echo "<td><a href=\"sell.php?id=$value[p_id]\" onClick=\"return confirm('Are you sure you want to sell?')\">Sell</a></td>";
		}
		else{
			echo "<td><a href=\"user.php\" onClick=\"return confirm('You have not enough products!')\">Sell</a></td>";

		}
		echo "</tr>";
	}




		?>
</table>
	<table align="right" bgcolor="red">
		<tr>
			<td>
				<?php
					echo "<td><a href=\"index.php\">Log Out";
				?>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
