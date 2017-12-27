<?php

// Create connection
$con=mysqli_connect('setapproject.org','csc412','csc412','csc412');


// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "Insert Into Student (Quote, whom)
Values ('".$_POST[quote]."', '".$_POST[whom]."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .mysqli_error($conn);
}

mysqli_close($conn);
?>

