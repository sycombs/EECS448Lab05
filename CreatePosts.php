<?php

$userid = $_POST["userid"];
$post = $_POST["post"];
if ($post == "")
{
  echo "Post cannot be blank!<br>";
}

else {
  $mysqli = new mysqli("mysql.eecs.ku.edu", "s907c334", "qui4uuP4", "s907c334");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT * FROM Users WHERE user_id=" . $userid;
  $data = "INSERT INTO Posts (content) VALUES ('" . $post . "')";

  $result = $mysqli->query($query);


  if ($result->num_rows != 0)
  {
    echo "User exists!";
    if ($mysqli->query($data))
    {
      echo "Post added!";
    }
    else {
      echo "Couldn't add post... :(";
    }
  }
  else
  {
    echo "Nothing works :(";
  }

  $mysqli->close();
}

?>
