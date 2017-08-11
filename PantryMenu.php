<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
</head>

<body>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="NewFoodItem.php">Enter Food Item</a>
    <a href="Alerts.php">Alerts</a>
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

<style>
      body {
        font-family: 'Lobster', cursive;
      }
</style>
<div class="container">
  <h2>My Pantry</h2>
  <p>Access Food Items here!</p>

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="OpenedCounter.php">
          <img src="cuttingboard.png" alt="countertop" style="width:100%">
          <div class="caption">
            <p style="text-align:center">My Countertop</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="OpenedFridge.php">
          <img src="goodrefrig.png" alt="refrigerator" style="width:100%">
          <div class="caption">
            <p style="text-align:center">My Refrigerator</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="OpenedFreezer.php">
          <img src="icebox.png" alt="freezer" style="width:100%">
          <div class="caption">
            <p style="text-align:center">My Freezer</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>



</body>
</html>
