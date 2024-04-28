<?php

class UsersView extends Users
{
  public function showUser($name)
  {
    $results = $this->getUser($name);
    echo "Full name: " . $results[0]['firstname'] . " " . $results[0]['lastname'] . "<br>";
    echo "Date of birth: " . $results[0]['dateofbirth'];
  }
}
