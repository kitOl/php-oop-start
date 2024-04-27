<?php

use Person\Person;

include "includes/autoloader.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP MVC</title>
</head>

<body>

  <?php
  $person01 = new Person("Daniel", "Nielsen", 28);
  // var_dump($person01);
  echo $person01->getFirst(), "<br>", $person01->getAge();
  echo "<br>";
  print_r(Person::$drinkingAge);


  ?>

</body>

</html>