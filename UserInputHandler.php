<html>
<head>
<title>Handler</title>
</head>

<body>
<?php
$fn = $_POST['fName'] ;
$ln = $_POST['lName'] ;
$gr = $_POST['gender'] ;

if (isset($_POST['fruit'])  ) {
	$ft = $_POST['fruit'] ;
	$exist = true ;
}
else {
	$exist = false ;
}

echo "First Name : " . $fn ;
echo "<br><br>Last Name : " . $ln ;

if ($gr=='Female') {
	echo "<br><br>Gender : " . $gr ;
}
else if ($gr=='Male') {
	echo "<br><br>Gender : " . $gr ;
}	

echo "<br><br>Favorite Fruit : " ;

for ($i=0; $i < count($ft); $i++) {
		echo $ft[$i] . ", " ;
}

?>

</body>
</html>