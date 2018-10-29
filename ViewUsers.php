<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "s907c334", "qui4uuP4", "s907c334");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT * FROM Users";
  $result = $mysqli->query($query);

  echo "<table> <tr> <th> Users </th> </tr>";

  while ($row = $result->fetch_assoc())
  {
    echo "<tr> <td>" . $row["user_id"] . "</td></tr>";
  }

  echo "</table>";

  $mysqli->close();


?>
