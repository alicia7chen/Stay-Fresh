<!DOCTYPE html>
<html>
<body>
  <?php

//query/command for printing columns from table fooditems
$query = "SELECT * FROM food items; ";

//query to link two tables
$query = "SELECT fooditems.name, fooditems.category, fooditems.storage, fooditems.how_long
FROM fooditems
INNER JOIN food_names ON food_names.fooditems_name=fooditems.name; " ;


?>
</body>
</html>
