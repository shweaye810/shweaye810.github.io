<?php

// Create connection
$con=mysqli_connect('setapproject.org','csc412','csc412','csc412');


// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Student");

while($row = mysqli_fetch_array($result)) {
  echo $row['Quote'] . " " . $row['whom'];
  echo "<br>";
}
mysqli_close($con);
?>

