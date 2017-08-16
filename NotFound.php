<!DOCTYPE html>
<html lang="en-US">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      body {
        font-family: 'Lobster', cursive;
      }
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
  <style>
      body {
        font-family: 'Lobster', cursive;
      }
  </style>
  <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="Search.php">Search Food Item</a>
    <a href="PantryMenu.php">View Pantry</a>
    <a href="About.php">Credits/Info</a>
  </div>
</div>

<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
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
  <h1> General Food Storage </h1>
  <h2> Vegetable Help </h2>
  <a href="Veg.php"><img src="https://preview.ibb.co/j1D4ga/cartoon_145260_960_720.png" alt="orange" border="0" style="width:128px;height:128px;"></a>
  <h2> Fruit Help </h2>
  <a href="Fruit.php"><img src='https://i.imgur.com/e17UtF5.png' style="width:128px;height:128px;"></a>
  <h2> Meat Help </h2>
  <a href="Meat.php"><img src='https://i.imgur.com/yRbzNOA.png' style="width:128px;height:128px;"></a>
  <h2> Dairy Help </h2>
  <a href="Dairy.php"><img src='https://i.imgur.com/KfflXRZ.png' style="width:128px;height:128px;"></a>
</body>
</html>
