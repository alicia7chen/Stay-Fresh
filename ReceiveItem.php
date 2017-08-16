<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<br> <br> <br>
<?php
$ser = "localhost";
$user ="root";
$pass ="";
$db ="foodexpiration";

$con =mysqli_connect($ser,$user,$pass,$db) or die("Connection Failed");
if (!$con){
  die("Connection failed: " . mysqli_connect_error());
}
$item = $_POST['item'];

$query = "INSERT INTO food_names (fooditems_name) VALUES ('$item'); ";

if(!($result =mysqli_query($con,$query))) {
  echo("Error: %s\n" + mysqli_error($con));

  exit(1);
}
?>

<style>
    body {
      font-family: 'Lobster', cursive;
    }
</style>
<h1>The item has been successfully added to your Pantry!</h1>
<div class="container">
<a href="Search.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-grain"></span> Add Another Item
      </a>
<a href="PantryMenu.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-grain"></span> View Pantry
      </a>

</div>

<a href="NotFound.php"><img src="https://image.ibb.co/fF1t7F/meme.png" alt="penguin" border="0" style="width:464px;height:720px;"></a>
<a action="/sample/ReceiveItem.php" method= "post"
</body>
</body>
</html>
