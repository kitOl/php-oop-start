<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Beginner</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <nav>
      <div>
        <h3>OLEG KITAEV</h3>
        <ul class="menu-main">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">PRODUCTS</a></li>
          <li><a href="#">CURRENT SALES</a></li>
          <li><a href="#">MEMBER+</a></li>
        </ul>
      </div>
      <ul class="menu-member">

        <?php
        if (isset($_SESSION['id'])) :
        ?>

          <li><a href="#"><?= $_SESSION['uid'] ?></a></li>
          <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>

        <?php else : ?>

          <li><a href="#">SIGN UP</a></li>
          <li><a class="header-login-a" href="#">LOGIN</a></li>

        <?php endif; ?>

      </ul>
    </nav>
  </header>

  <section class="index-intro">
    <div class="index-intro-bg">
      <div class="wrapper">
        <div class="index-intro-c1">
          <div class="video">VIDEO
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nisi saepe nulla nam molestias similique nostrum reprehenderit dignissimos dolor fugiat commodi, placeat corporis nobis necessitatibus animi doloribus ipsum, pariatur laborum?</p>
        </div>
        <div class="index-intro-c2">
          <h2>We make <br>professional <br>gear</h2>
          <a href="#">FIND OUR GEAR HERE</a>
        </div>
      </div>
    </div>
  </section>

  <section class="index-login" style="visibility: <?= isset($_SESSION['id']) ? 'hidden' : 'visible' ?>;">
    <div class="wrapper">
      <div class="index-login-signup">
        <h4>SIGN UP</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdrepeat" placeholder="Repeat Password">
          <input type="email" name="email" placeholder="E-mail">
          <br>
          <button type="submit" name="submit">SIGN UP</button>
        </form>
      </div>

      <div class="index-login-login">
        <h4>LOGIN</h4>
        <p>Do you have an account? Login here!</p>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <br>
          <button type="submit" name="submit">LOGIN</button>
        </form>
      </div>


    </div>
  </section>

</body>

</html>