<?php
$connect = mysqli_connect("localhost", "root", "maves", "awp_assignment"); //creates a connection with database
if ($connect == false) {
  die("Error:Connection failed" . mysqli_connect_error($connect));
} else {
  // echo "Connection successful";
  echo "<br>";
}
