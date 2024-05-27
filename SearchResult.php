<html>
<head>
<title>Results | UltimateYou</title>

<link rel="stylesheet" href="ProjectStyle1.css">
</head>

<body>

<h3>Search Result</h3><hr>

<?php
$in = $_POST['input'];
$query = "SELECT * FROM makeup
		  INNER JOIN skincare ON makeup.brand = skincare.brand
		  INNER JOIN haircare ON haircare.brand = skincare.brand WHERE product_type LIKE '%$in%';";
		  
echo "<div class='category'>You Entered: </div>" . "<div class='category'>" . $in . "</div>" ;
echo "<br>" ;

include 'Checkpoint3_Connection.php';

if (mysqli_connect_errno())
{
  echo "Error: Cannot connect to database <br>" . mysqli_connect_error();
}

$result = mysqli_query($con, $query);

echo "<table border='1'>";

while($row = mysqli_fetch_array($result)) {
  echo "<th>" . $row['brand'] . "</th>" . "<td>" . $row['product'] . "</td>" . "<td>" . $row['product_type'] . "</td>" . "<td>" . $row['price'] . "</td>" ;
  echo "<br>";
}

echo "</table>";

mysqli_close($con);

?>

<br><br><hr>

<div class="footer">UltimateYou, LLC | Established 2023</div>
<br>

</body>

</html>