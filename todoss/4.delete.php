<?php
require("dbconfig.php");

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $jobID = $_GET['id'];

    $sql = "DELETE FROM todo WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $jobID);
    mysqli_stmt_execute($stmt);

    echo "message deleted.";
} else {
    echo "Invalid request.";
}
?>
<a href="1.新首頁.html">回工作列表</a>
