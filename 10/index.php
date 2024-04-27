<?php

declare(strict_types=1);

use Person\Person;

include "includes/class-autoloader.inc.php";
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
  try {
    //code...
    echo $person01->getFirst(), "<br>";
    $person01->setFirst('Betty');
  } catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
  }

  ?>

</body>

</html>