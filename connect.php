<?php
$conn = new mysqli("localhost","root","","61502100091-9");
 
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else {
     echo "เชื่อม MySQLได้";
}
?>
