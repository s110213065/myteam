<?php
require("dbconfig.php");

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $jobID = $_GET['id'];

    $sql = "UPDATE todo SET state = 'done' WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $jobID);
    $success = mysqli_stmt_execute($stmt);

    if($success) {
        echo "mark complete";
} 
}
?>