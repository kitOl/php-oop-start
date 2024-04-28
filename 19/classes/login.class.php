<?php

class Login extends Dbh
{
  protected function getUser($uid, $pwd)
  {
    $sql = "SELECT pwd FROM users WHERE uid = ? OR email = ?;";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute([$uid, $uid])) {
      $stmt = null;
      header("Location: ../index.php?error=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ../index.php?error=usernotfound");
    }

    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPwd = password_verify($pwd, $pwdHashed[0]['pwd']);

    if (!$checkPwd) {
      $stmt = null;
      header("Location: ../index.php?error=wrongpassword");
      exit();
    }

    $sql = "SELECT * FROM users WHERE uid = ? OR email = ? AND pwd =?;";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute([$uid, $uid, $pwdHashed])) {
      $stmt = null;
      header("Location: ../index.php?error=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ../index.php?error=usernotfound");
      exit();
    }

    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    session_start();
    $_SESSION['id'] = $user[0]['id'];
    $_SESSION['uid'] = $user[0]['uid'];

    $stmt = null;
  }
}
