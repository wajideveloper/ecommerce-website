<?php
include "db.php";
$id=0;

if(isset($_GET["name"])){

$nm=$_GET["name"];
print "Welcome Back ".$nm;
}

if(isset($_GET["id"])){

$id=$_GET["id"];

}
if($id==5544114421){
$sql = "SELECT * FROM products";
$run_query = mysqli_query($con,$sql);
$allProducts = mysqli_num_rows($run_query);
print "Title || Price || Description <br>" ;
 	while($row = mysqli_fetch_array($run_query)){

		$title = $row["product_title"];
		$price = $row["product_price"];
		$description = $row["product_desc"];
		
		print $title." || ".$price." || ".$description."<br>" ;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

</body>

</html>
