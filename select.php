<?php
 require_once("connect.php");
 $sql = "SELECT * FROM student";
 if(isset($_GET['search_click'])) {
  $sql = "SELECT * FROM student WHERE student_id LIKE '%{$_GET['search']}%' OR student_fname LIKE '%{$_GET['search']}%'";
  echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
}
$result = $conn->query($sql);
?>
<form action="." method="get">
    <label for="search">ช่องค้นหา</label>
    <input type="text" name="search" id="search" placeholder="ช่องค้นหา...">
    <button type="submit" name="search_click">ค้นหา</button>
</form>
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


