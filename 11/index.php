<?php

declare(strict_types=1);

session_start();

include 'includes/class-autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Begenner</title>
</head>

<body>


  <form action="includes/calc.inc.php" method="post">
    <h1>My own calculator</h1>
    <h2>Result: <?= $_SESSION['res'] ?? '' ?></h2>
    <input type="number" name="num1" placeholder="First number">
    <select name="oper">
      <option value="add">Addition</option>
      <option value="sub">Subtraction</option>
      <option value="div">Division</option>
      <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">Calculate</button>
  </form>

</body>

</html>