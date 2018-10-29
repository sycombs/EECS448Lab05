<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "s907c334", "qui4uuP4", "s907c334");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT * FROM Users";
  $result = $mysqli->query($query);

  while ($row = $result->fetch_assoc())
  {
    echo "<option value=" . $row["user_id"] . ">" . $row["user_id"] . "</option>";
  }

  $mysqli->close();


?>
