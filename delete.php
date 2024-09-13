<?php
include("conn.php");
$id = $_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM mama WHERE id='$id'");
if ($delete) {
    # code...
    header('location:select.php');
}
?>
