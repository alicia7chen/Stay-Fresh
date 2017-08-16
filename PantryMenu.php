<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css?family=Lobster|Vollkorn" rel="stylesheet">
  <title>Access Pantry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown a:hover {background-color: #f1f1f1}
.show {display:block;}
</style>
<a href= "PantryMenu.php" id = "img" download="My Pantry" style="float:right">
  <img border="0" src="download.png" alt="Download" width="80" height="50">
</a>
</head>

<body>
<style>
div.download {
    position: relative;
    left: 1200px;
    right: 100 px;
    bottom: 1500 px:
  }
div.menu {
    position: relative;
    left: 0;
    right: 1000 px;
    bottom: 1500 px:
  }
</style>
<div class="dropdown">
  <div class = "menu">
  <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="Search.php">Search Food Item</a>
      <a href="PantryMenu.php">View Pantry</a>
      <a href="About.php">Credits/Info</a>
    </div>
  </div>
</div>
<div class = "download">
  <a href="ResetList.php" class="btn btn-info btn-lg">
    <span class="glyphicon glyphicon-grain"></span> Reset Your List
  </a>
</div>


<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<style>
      body {
        font-family: 'Vollkorn', cursive;
      }
</style>
<div class="container">
  <h2>My Pantry</h2>
  <p>Access Food Items here!</p>

  <div class="row">

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="OpenedFridge.php">
          <img src="goodrefrig.png" alt="refrigerator" style="width:100%">
          <div class="caption">
            <p style="text-align:center">My Pantry</p>
          </div>
        </a>
      </div>
    </div>

  </div>
</div>

<table style="width:100%">

    <th>Food Item</th>
    <th>Category</th>
    <th>Storage</th>
    <th>Expiration Period</th>




<?php
$ser = "localhost";
$user ="root";
$pass ="";
$db ="foodexpiration";

$con =mysqli_connect($ser,$user,$pass,$db) or die("Connection Failed");
if (!$con){
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connection Success";
//$query = "INSERT INTO food_names (iduser_profile, foodiitems_name) VALUES (0, 'avocado');";
$query = "SELECT fooditems.name, fooditems.category, fooditems.storage, fooditems.how_long FROM fooditems INNER JOIN food_names ON food_names.fooditems_name=fooditems.name;";

//echo
if(!($result =mysqli_query($con,$query))) {
  echo("Error: %s\n" + mysqli_error($con));
  exit(1);
}





for ($x = 0; $x < 100; $x++) {
$row = mysqli_fetch_assoc($result);
echo("<tr>");
echo nl2br("<td style = \"color:red;\">" . $row['name'] . "</td>" . "&nbsp"  . "<td>" . $row['category'] .  "</td>" .  "&nbsp". "<td style = \"color:green;\">" . $row['storage'] . "</td>" . "<td style = \"color:blue;\">" . $row['how_long'] . "</td>");
echo("</tr>");
}
echo("</table>")


//$query2 = "INSERT INTO food_names (fooditems_name) VALUES ('avocado');";
//if (mysqli_query($cnn, $query2)) {
//    echo "Record updated successfully";
//    echo "Record updated successfully";
//} else {
//    echo "Error updating record: " . mysqli_error($con);
//}

?>



<style>
th {
  text-align: left;
}
table {
  border-collapse: collapse;
  border: 1px solid black;
  font-family: 'Vollkorn', serif;
}
th, td {
    border-bottom: 1px solid #ddd;
}
</style>

action="/sample/ReceiveItem.php" method= "post"

<!--<table style="width:100%">
  <tr>
    <th>Food Item</th>
    <th>Category</th>
    <th>Storage</th>
    <th>Expiration Period</th>
  </tr>
  <tr>
    <td style = "color:red;"> Jill</td>
    <td>Smith</td>
    <td style = "color:blue;"> Yellow</td>
    <td style = "color:green;"> Jill</td>
  </tr>
  <tr>
    <td style = "color:red;">Eve</td>
    <td>Jackson</td>
    <td style = "color:blue;"> Jill</td>
    <td style = "color:green;"> Jill</td>
  </tr>

</table>
!-->

</body>
</html>
