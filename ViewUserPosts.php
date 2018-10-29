<?php

$user = $_POST["users"];
echo "You are viewing " . $user . "'s posts.<br>";

  $mysqli = new mysqli("mysql.eecs.ku.edu", "s907c334", "qui4uuP4", "s907c334");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT * FROM Posts WHERE author_id='" . $user . "'";
  $result = $mysqli->query($query);

  echo "<table> <tr> <th> Posts </th> </tr>";
  while ($row = $result->fetch_assoc())
  {
    echo "<tr>" . $row["post_id"] . "</tr><tr>" . $row["content"] . "</tr>";
  }
  echo "</table>";
  if ($row == 0)
  {
    echo "There are no posts by this user.";
  }

  $mysqli->close();


?>
