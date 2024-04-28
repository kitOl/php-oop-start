<?php

class Users extends Dbh
{
  protected function getUser($name)
  {
    $sql = "SELECT * FROM users WHERE firstname = ?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name]);

    return $stmt->fetchAll();
  }

  public function setUser($firstname, $lastname, $dob)
  {
    $sql = "INSERT INTO users(firstname, lastname, dateofbirth) VALUES(?, ?, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname, $lastname, $dob]);
  }
}
