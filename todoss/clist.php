<p>completed list</p>
<hr />
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>Job</td>
    <td>Urgent</td>
    <td>Job Content</td>
  </tr>
<?php
require("dbconfig.php");

if(isset($_GET['state'])) {
    $state = $_GET['state'];
    $sql = "SELECT * FROM todo WHERE state = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "s", $state);
} else {
    $sql = "SELECT * FROM todo";
    $stmt = mysqli_prepare($db, $sql);
}

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while($rs = mysqli_fetch_assoc($result)) {
    echo "<tr><td>", $rs['id'],
    "</td><td>", $rs['jobName'],
    "</td><td>", $rs['jobUrgent'], 
    "</td><td>", $rs['jobContent'],
    "</td></tr>";
}
?>
</table>