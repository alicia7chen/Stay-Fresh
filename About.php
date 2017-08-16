<!DOCTYPE html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<style>
      h1 {
        font-family: 'Lobster', cursive;
      }
      .typical {
        font-family: 'Homemade Apple', cursive;
      }
</style>
<html>
<body>
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

<h1>About</h1>
<div class="panel panel-default" style= "width:1500px">
  <div class="typical">Our Mission</div>
  <div class="panel-body">The average family throws away 470 pounds of food annually at a cost of $600 of waste, according to a joint-study at the University of
    Arizona and the United States Department of Agriculture. Americans throw up to a fourth of all produce they buy. We decided to do something about it! STAY FRESH is meant to maximize your purchases. By adding an interactive, digital reminder about the contents of your pantry, we hope to change the statistics and make a difference. Help us by joining STAY FRESH today.</div>
  </div>


<div class="container" style= "width:700px">
  <div class="panel-group">

    <div class="panel panel-success">
      <div class="panel-heading">Alicia Chen</div>
        <div class="panel-body">A snek. I live in Renton and play Ultimate Frisbee competitively! I enjoy doggos, boba from Over The Rainbow Tea Bar, and spicy foods ;) I developed the front-end of our site. <br>
        <center><img class = "center_image" src="AliciaBio.jpg" alt="A-Okay Alicia" align = "middle" style="width:210px;height:230px;"></center>
      </div>
    </div>

    <div class="panel panel-success", font-family: 'Homemade Apple', cursive;>
      <div class="panel-heading">Diana Tsegay</div>
        <div class="panel-body">I was born in Eritrea, a small country that's in East Africa. At the age of six my family and I moved to Egypt. A country full of good food and interesting buildings. At the age of 11 my family and I finally moved here. I'm 17 and proud to help make a web page that can help us all reduce the amount of food waste.</div>
          <div class ="panel-body"><center><img class = "center_image" src="DianaBio.jpg" alt="Diana Diva" align = "middle" style="width:300px;height:300px;"></center>

      </div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading", font-family: 'Homemade Apple', cursive;>Lynda Pham</div>
        <div class="panel-body">A rising senior at Kentwood High School in Covington, WA. I was born in Seattle and have been here since. I worked mostly on the back-end of Stay Fresh, including the database.</div>
          <div class ="panel-body">
          <center><img class = "center_image"src="LyndaBio.jpg" alt="Lynda Luck"  align = "middle" style="width:200px;height:250px;">
          </center>
      </div>
    </div>


  </div>
</div>
<style>


</style>
</body>
</html>
