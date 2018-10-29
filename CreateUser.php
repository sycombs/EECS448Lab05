<?php

$userid = $_POST["userid"];
if ($userid == "")
{
  echo "Cannot create blank ID!<br>";
}

else {
  $mysqli = new mysqli("mysql.eecs.ku.edu", "s907c334", "qui4uuP4", "s907c334");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT * FROM Users WHERE user_id=" . $userid;
  $data = "INSERT INTO Users (user_id) VALUES ('" . $userid . "')";

  if ($result = $mysqli->query($query))
  {
    echo "User already exists!";
  }
  else
  {
    if($mysqli->query($data))
    {
      echo "User added<br>";
    }
    else {
      echo "User already exists!";
    }
  }

  $mysqli->close();
}

?>
