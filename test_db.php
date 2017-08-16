<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<style>
body {
  background-color:lavender;
font-size:2rem;
}
</style>

<body>

<?php
$ser = "localhost";
$user ="root";
$pass ="";
$db ="foodexpiration";

$con =mysqli_connect($ser,$user,$pass,$db) or die("Connection Failed");
//echo "Connection Success";
//$query = "INSERT INTO food_names (iduser_profile, foodiitems_name) VALUES (0, 'avocado');";
$query = "SELECT * FROM fooditems; ";

//echo
if(!($result =mysqli_query($con,$query))) {
  echo("Error: %s\n" + mysqli_error($con));
  exit(1);
}

for ($x = 0; $x < 4; $x++) {
$row = mysqli_fetch_assoc($result);
echo($row['name']);
echo('&nbsp');
echo($row['category']);
echo('&nbsp');
}


?>

</body>
</html>
