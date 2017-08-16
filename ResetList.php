<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
  </head>

  <body>

  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="Search.php">Search Food Item</a>
      <a href="PantryMenu.php">View Pantry</a>
      <a href="About.php">Credits/Info</a>
    </div>
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
</head>
<body>
<style>
    body {
      font-family: 'Lobster', cursive;
    }
</style>
<h1>Your List has successfully been cleared.</h1>


<?php
$ser = "localhost";
$user ="root";
$pass ="";
$db ="foodexpiration";

$con =mysqli_connect($ser,$user,$pass,$db) or die("Connection Failed");
if (!$con){
  die("Connection failed: " . mysqli_connect_error());
}

$query = "DELETE FROM food_names;" ;
if(!($result =mysqli_query($con,$query))) {
  echo("Error: %s\n" + mysqli_error($con));
  echo("SQL QUERY FAILED");

  exit(1);
}
?>

<div class="container">
<a href="Search.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-grain"></span> Add More Items
      </a>
<a href="PantryMenu.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-grain"></span> View Pantry
      </a>

</div>

</body>
</html>
