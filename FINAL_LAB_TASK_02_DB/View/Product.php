<?php
session_start();
if (isset($_POST['submit'])) {
	$name= $_POST['name'];
	$buyprice= $_POST['buyprice'];
	$sellprice= $_POST['sellprice'];

	$profit = $sellprice-$buyprice;

	$conn = mysqli_connect('localhost', 'root' , '' , 'product');

	$sql = "insert into products values('' , '{$name}' , '{$profit}' ,'{$buyprice}' , '{$sellprice}')";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		header('location: home.php');
	}else{
		echo "error";
	}
}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROFILE PICTURE</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>EDIT PRODUCT</legend>
		Name <br>
		<input type="text" name="name"><br>
		Buying price <br>
		<input type="number" name="buyprice"><br>	
		Selling price <br>
		<input type="number" name="sellprice"><br><br>	

			
	<input type="submit" name="submit" value="SAVE">	
	</fieldset>	
</form>
</body>
</html>