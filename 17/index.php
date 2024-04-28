<?php
include 'includes/class-autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Beginner</title>
</head>

<body>

  <?php
  $testObj = new Test();
  $testObj->getUsers();

  $testObj->setUserStmt("John", "Doe", "1984-03-02");
  ?>

</body>

</html>