<?php
 require_once("connect.php");
 $sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>
<table style="width:100%" border="1">
  <tr>
    <th>student_id</th>
    <th>student_fname</th>
    <th>student_lname</th>
    <th>student_bday</th>
    <th>student_pin</th>
  </tr>
<?php
 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
    <tr>
    <td><?php echo $row["student_id"];?></td>
    <td><?php echo $row["student_fname"];?></td>
    <td><?php echo $row["student_lname"];?></td>
    <td><?php echo $row["student_bday"];?></td>
    <td><?php echo $row["student_pin"];?></td>
  </tr>
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
  ?>  
</table>


