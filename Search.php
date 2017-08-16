<!DOCTYPE html>
<html lang="en-US">
<head>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <style>
      body {
        font-family: 'Lobster', cursive;
      }
  </style>
  <h1>Search For Food Item</h1>

        </a>
  <div class="container">
  <h2>Enter Food Items Here</h2>
  <form class="form-horizontal" action="/sample/ReceiveItem.php" method= "post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Food:</label>
      <div class="col-sm-10">
        <input type="text" name="item" class="form-control" id="pwd" placeholder="Enter food item">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Search!</button>
      </div>
    </div>
  </form>
</div>
  <a href="HomePage.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-grain"></span> Done & Exit
        </a>
  <a href="Search.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-grain"></span> Done & Search Again
        </a>
  <h2> Can't find your food here? Click penguin for general food rules. </h2>
  <a href="NotFound.php"><img src="https://image.ibb.co/fF1t7F/meme.png" alt="penguin" border="0" style = "width:150px; height:200px;"></a>
  </body>
</html>
