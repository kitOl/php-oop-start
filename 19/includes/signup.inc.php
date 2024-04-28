<?php

if (isset($_POST['submit'])) {

  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwdrepeat'];
  $email = $_POST['email'];

  include '../classes/dbh.class.php';
  include '../classes/signup.class.php';
  include '../classes/signup-contr.class.php';

  $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

  $signup->singupUser();

  header("Location: ../index.php?error=none");
}
